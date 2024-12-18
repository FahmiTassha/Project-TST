<?php

$method = 'PUT';
$url = 'http://localhost/soap/Aldi/server1.php/id';
$body = new stdClass;
$body->id = 1;
$body->price = 15000;
$body->name = "Teh Tarik";
$body->Kriteria = "Hangat";

$options = array(
    CURLOPT_CUSTOMREQUEST => $method,
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($body),
    CURLOPT_HTTPHEADER =>
        array('content-type:application/json'),
    CURLOPT_RETURNTRANSFER =>true,
    CURLOPT_SSL_VERIFYPEER => false
);

$ch = curl_init();
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
curl_close($ch);

var_dump($result);