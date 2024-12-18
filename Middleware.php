<?php
class Middleware {
    private $client;

    public function __construct($wsdl) {
        $this->client = new SoapClient($wsdl);
    }

    public function checkIn($customer_id, $name, $checkin_date, $stay_duration) {
        // Validasi input
        if (empty($customer_id) || empty($name) || empty($checkin_date) || empty($stay_duration)) {
            return "Semua field harus diisi.";
        }
        
        // Panggil fungsi checkin dari SOAP client
        try {
            return $this->client->checkin($customer_id, $name, $checkin_date, $stay_duration);
        } catch (SoapFault $fault) {
            return "Error: " . $fault->getMessage();
        }
    }

    public function checkVoucher($customer_id) {
        // Validasi input
        if (empty($customer_id)) {
            return "Customer ID tidak boleh kosong.";
        }

        // Panggil fungsi checkVoucher dari SOAP client
        try {
            return $this->client->checkVoucher($customer_id);
        } catch (SoapFault $fault) {
            return "Error: " . $fault->getMessage();
        }
    }
}
?>