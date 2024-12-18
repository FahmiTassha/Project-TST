<?php

$method = $_SERVER['REQUEST_METHOD'];
$url = $_SERVER['PATH_INFO'];
$url = explode("/", $url);
$url = array_filter($url);
$body = file_get_contents("php://input");

//  var_dump($method, $uri, $body);

function out ($data){
    header ('content-type:application/json');
    echo json_encode($data);
    exit;
}

switch ($method){
    case 'POST':
        break;
    case 'PUT':
        $fun = array_shift($url);
        if ($fun == 'id' ){
            $id = json_decode($body);
            //delete user dari database
            //disini

            $result = new stdClass;
            $result -> id = $id;
            $result -> put = true;
            out($result);
        } 
        break;
    case 'DELETE':
        $fun = array_shift($url);
        if ($fun == 'id'){
            $id = json_decode($body);
            //delete user dari database
            //disini

            $result = new stdClass;
            $result -> id = $id;
            $result -> delete = true;
            out($result);
        } 
        break;
    case 'GET':
        $fun = array_shift($url);
        if ($fun == 'gettamu') {
            $bayar = 'Bayar Nanti';
            $tamu = new stdClass;
            $tamu -> bayar = $bayar;
            out ($tamu);
        }

    default:
        break;
}