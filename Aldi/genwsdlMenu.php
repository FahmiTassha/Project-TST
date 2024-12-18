<?php

require "C:/xampp/htdocs/soap/vendor/autoload.php";
require "menuService.php";

// intialize generator 
$gen = new \PHP2WSDL\PHPClass2WSDL("menuService" , "http://localhost/soap/Aldi/menuService.php");

// generate WSDL and Write to .wsdl file

$gen -> generateWSDL();
file_put_contents("menuService.wsdl", $gen -> dump());
echo "Done!";