<?php
require_once 'pemesananCafeModel.php';

class VoucherService {
    private $cafeModel;

    public function __construct() {
        $this->cafeModel = new PemesananCafeModel();
    }

    public function getHotelVoucherFromCafeTransaction($transactionAmount) {
        if ($this->cafeModel->verifyCafeTransaction($transactionAmount)) {
            $voucher = $this->cafeModel->generateHotelVoucher();
            return [
                "voucherCode" => $voucher["voucherCode"],
                "discount" => $voucher["discount"],
                "description" => $voucher["description"]
            ];
        } else {
            return [
                "voucherCode" => null,
                "discount" => 0,
                "description" => "Tidak mendapat voucher diskon hotel karena pembayaran di bawah 200,000."
            ];
        }
    }
}
?>