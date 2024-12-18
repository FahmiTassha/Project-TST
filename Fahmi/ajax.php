<?php
require_once 'NoOrder.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    
    if (!isset($input['name']) || empty($input['name'])) {
        echo json_encode(['error' => 'Invalid input']);
        exit;
    }
    
    $noOrder = new NoOrder();
    $response = $noOrder->getNoOrder($input['name']);
    
    header('Content-Type: application/json');
    echo json_encode($response);
}