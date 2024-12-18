<?php

require('NoOrder.php');
$server = new SoapServer('noorder.wsdl');
$server->setClass('NoOrder');
$server->handle();