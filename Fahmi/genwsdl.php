<?php

// include the PHPClass2WSDL Library
require "../vendor/autoload.php";

// include the class we want to use
require "NoOrder.php";

// initialize generator
$gen = new \PHP2WSDL\PHPClass2WSDL("NoOrder",
"http://localhost/soap/Fahmi/server.php");

// generate WSDL and write to .wsdl file
$gen->generateWSDL();
file_put_contents("noorder.wsdl", $gen->dump());
echo "Done!";