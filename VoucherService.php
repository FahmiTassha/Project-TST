<?php
class VoucherService {
    public function checkin($customer_id, $name, $checkin_date, $stay_duration) {
        return "Check-in berhasil untuk $name (ID: $customer_id) pada tanggal $checkin_date selama $stay_duration hari";
    }

    public function checkVoucher($customer_id) {
        if ($customer_id == "12345") {
            return "Voucher 50000 IDR tersedia untuk digunakan di kafe";
        } else {
            return "Customer tidak memenuhi syarat untuk voucher";
        }
    }
}

ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("http://localhost/soap/voucher_service.wsdl");
$server->setClass("VoucherService");
$server->handle();
?>
