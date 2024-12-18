<?php

$wsdl = "http://localhost/soap/Fahmi/noorder.wsdl";

$client = new SoapClient($wsdl);
$name = $_REQUEST['name'];
$number = $client->getNoOrder($name);

header('content-type:application/json');
echo json_encode($number);