<?php
// server.php

require_once 'voucherService.php';

// Mengambil data dari request
$inputData = json_decode(file_get_contents('php://input'), true);

// Mengecek apakah input yang diberikan benar
if (!isset($inputData['transactionAmount'])) {
    header('HTTP/1.1 400 Bad Request');
    echo json_encode(['error' => 'transactionAmount parameter is missing']);
    exit;
}

// Menyiapkan VoucherService
$voucherService = new VoucherService();
$response = $voucherService->getHotelVoucherFromCafeTransaction($inputData['transactionAmount']);

// Mengirimkan response JSON
header('Content-Type: application/json');
echo json_encode($response);

?>

