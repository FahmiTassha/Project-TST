<?php
require 'Middleware.php';

$middleware = new Middleware("voucher_server.wsdl");

// Fungsi check-in
function checkIn($customer_id, $name, $checkin_date, $stay_duration) {
    global $middleware;
    $response = $middleware->checkIn($customer_id, $name, $checkin_date, $stay_duration);
    echo "Response: " . $response;
}

// Fungsi cek voucher
function checkVoucher($customer_id) {
    global $middleware;
    $response = $middleware->checkVoucher($customer_id);
    echo "Response: " . $response;
}

// Contoh penggunaan
checkIn("123", "Danes", "2024-11-28", 5);
checkVoucher("12345");
?>