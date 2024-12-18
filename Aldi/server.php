<?php

ini_set ("soap.wsdl_cache_enabled",0);
 header ("Access-Control-Allow-Origin:*");
require ('Voucher.php');
$server = new SoapServer('voucher.wsdl');
$server -> setClass('Voucher');
$server -> handle();