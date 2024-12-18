<?php

$wsdl = "http://localhost/soap/Fahmi/noorder.wsdl";

$client = new SoapClient($wsdl);
$histories = $client->getHistories();

header('content-type:application/json');
echo json_encode($histories);