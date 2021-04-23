<?php

namespace corsica\regulb;

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");

require(dirname(dirname(__FILE__)) . '/vendor/autoload.php');

$data = json_decode(file_get_contents("php://input"));
$api = new ApiRouter();
$response = $api->ejecutar($data);
echo json_encode($response);
exit;
