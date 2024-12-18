<?php
require ('menuService.php');
ini_set ("soap.wsdl_cache_enabled",0);
 header ("Access-Control-Allow-Origin:*");
// This generates the SOAP server from the menuService class.
$server = new SoapServer(null, ['uri' => 'http://localhost/']);
$server->setClass('MenuService');
$server->handle();
?>
