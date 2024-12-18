<?php

$wsdl = "https://localhost/soap/Aldi/menuService.wsdl";

$client = new SoapClient($wsdl);
$id = "240124";
$menuService = $client -> getMenu($id);

header('content-type:application/json');
echo json_encode($menuService);