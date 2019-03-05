<?php
require "../src/Classes/Send.php";

use Kubpro\Send;


$api_key   = 'Buraya APIKEY inizi Yazın';
$numbers   = 'Numaralarınızı buaraya yazın. Virgülle ayrılmış'; //905050416585,05050469875,5623584235
$message   = 'Mesajınızı yazın';
$sender_id = 'Gönderen kimliği (Başlıq)';


$send_array = array(
    'api_key' => $api_key,
    'to' => $numbers,
    'message'=> $message,
    'sender_id' => $sender_id,
    //'speed' => true, //Eğer hızı sms göndermek istiyorsanız yorum satırı kaldırıp 'speed' => true yapın. Speed api 1 smslikdir.
);

$send = new Send($send_array);


$result = $send->request();

print_r($result);

