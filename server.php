<?php

require('voucher_service.php');
$server = new SoapServer('voucher_service.wsdl');
$server->setClass('VoucherService');
$server->handle();