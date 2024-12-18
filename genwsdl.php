<?php

require "vendor/autoload.php";
require "voucher_service.php";

//initialize generator
$gen = new \PHP2WSDL\PHPClass2WSDL("VoucherService", 
"http://localhost/soap/server.php");

//generate WSDL and write to .wsdl file
$gen->generateWSDL();
file_put_contents("voucher_server.wsdl", $gen->dump());
echo "Done!";