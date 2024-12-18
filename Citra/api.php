<?php
header("Content-Type: application/json");

require_once 'voucherService.php'; // Memasukkan layanan voucher

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'POST':
        // Menangani permintaan untuk membuat voucher baru
        $requestBody = json_decode(file_get_contents('php://input'), true);
        $transactionAmount = $requestBody['transactionAmount'] ?? 0;

        $voucherService = new VoucherService();
        $result = $voucherService->getHotelVoucherFromCafeTransaction($transactionAmount);

        echo json_encode($result);
        break;

    case 'GET':
        // Menangani permintaan untuk mendapatkan semua voucher (atau voucher tertentu)
        // Untuk kesederhanaan, kita akan mengembalikan pesan statis
        echo json_encode([
            "message" => "GET request received. Use /api/voucher/{id} to get a specific voucher."
        ]);
        break;

    case 'PUT':
        // Menangani permintaan untuk memperbarui voucher yang ada
        $requestBody = json_decode(file_get_contents('php://input'), true);
        $voucherId = $_GET['id'] ?? null; // Mengambil ID dari query parameter
        $newData = $requestBody['data'] ?? null; // Data baru untuk diperbarui

        if ($voucherId && $newData) {
            // Logika untuk memperbarui voucher
            echo json_encode([
                "message" => "Voucher with ID $voucherId has been updated.",
                "newData" => $newData
            ]);
        } else {
            http_response_code(400);
            echo json_encode(['error' => 'Invalid input for update.']);
        }
        break;

    case 'DELETE':
        // Menangani permintaan untuk menghapus voucher yang ada
        $voucherId = $_GET['id'] ?? null; // Mengambil ID dari query parameter

        if ($voucherId) {
            // Logika untuk menghapus voucher
            echo json_encode([
                "message" => "Voucher with ID $voucherId has been deleted."
            ]);
        } else {
            http_response_code(400);
            echo json_encode(['error' => 'Invalid ID for deletion.']);
        }
        break;

    default:
        http_response_code(405); // Method Not Allowed
        echo json_encode(['error' => 'Method not allowed']);
}
?>