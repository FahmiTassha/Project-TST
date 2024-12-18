<?php

require "C:/xampp/htdocs/soap/vendor/autoload.php";
require "Voucher.php";

// intialize generator 
$gen = new \PHP2WSDL\PHPClass2WSDL("Voucher" , "http://localhost/soap/Aldi/server.php");

// generate WSDL and Write to .wsdl file

$gen -> generateWSDL();
file_put_contents("voucher.wsdl", $gen -> dump());
echo "Done!";