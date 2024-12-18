<?php

$wsdl = "https://localhost/soap/Aldi/menuService.wsdl";

$client = new SoapClient($wsdl);
$histories = $client->getHistories();

header('content-type:application/json');
echo json_encode($histories);