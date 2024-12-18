<?php
class PemesananCafeModel {
    private $minPurchaseCafe = 200000;
    private $discountHotel = 20;

    public function verifyCafeTransaction($transactionAmount) {
        return $transactionAmount >= $this->minPurchaseCafe;
    }

    public function generateHotelVoucher() {
        return [
            "voucherCode" => uniqid("HOTEL-"),
            "discount" => $this->discountHotel,
            "description" => "Diskon 20% untuk menginap satu malam di Hotel PeseninKuy"
        ];
    }
}
?>