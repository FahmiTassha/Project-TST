<?php
// menuService.php

class MenuService {
    private $menuItems = [
        ["id" => 1, "name" => "Kopi Latte", "price" => 25000],
        ["id" => 2, "name" => "Teh Tarik", "price" => 15000],
        ["id" => 3, "name" => "Burger", "price" => 35000],
        ["id" => 4, "name" => "Pizza Margherita", "price" => 60000],
        ["id" => 5, "name" => "Sandwich", "price" => 25000]
    ];

    private $valid_guest_id = "240124"; // ID untuk Ardi

    public function getMenu() {
        return $this->menuItems;
    }

    public function verifyGuestId($guestId) {
        return $guestId === $this->valid_guest_id ? 'pay_later' : 'pay_now';
    }

    public function orderItem($itemId, $quantity, $paymentOption) {
        foreach ($this->menuItems as $item) {
            if ($item['id'] == $itemId) {
                $totalPrice = $item['price'] * $quantity;
                return [
                    'item' => $item['name'],
                    'quantity' => $quantity,
                    'total_price' => $totalPrice,
                    'payment_option' => $paymentOption
                ];
            }
        }
        return null;
    }
    /**
     * Summary of getHistories
     * @return array
     */
    public function getHistories(){
        $a = new stdClass;
        $a->id ='2671688';
        $a->booking ='sudah booking';

        $b = new stdClass;
        $b->id ='267168298';
        $b->booking ='belum booking';

        $histories =[$a,$b];
        return $histories;
    }
}


// Proses ID Tamu dan kirim data ke tampilan
$payment_option = 'pay_now'; // Default ke bayar sekarang
$menuService = new MenuService();
$menuItems = $menuService->getMenu();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['guest_id'])) {
    $entered_id = $_POST['guest_id'];
    $payment_option = $menuService->verifyGuestId($entered_id);
}

// Sertakan tampilan menu
include 'menuView.php';

$server = new SoapServer(null, ['uri' => 'http://localhost/']);
$server->setClass('MenuService');
$server->handle();
?>
