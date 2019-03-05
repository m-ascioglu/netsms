<?php
require "../src/Classes/Balance.php";

use Kubpro\Balance;

$api_key   = 'Buraya APIKEY inizi Yazın';


$balance_array = array(
    'api_key' => $api_key,

);

$balance = new Balance($balance_array);

$result = $balance->request();

print_r($result);