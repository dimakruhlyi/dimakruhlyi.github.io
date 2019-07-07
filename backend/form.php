<?php
define ('url',"https://api.telegram.org/bot616773570:AAEbRRLKXdIbU5d2IROEy0phK0bkv7Qp-3g/");

$name = $_GET['name'];

$message = $_GET['message'];

$phone = $_GET['phone'];

$chat_id = '-334154009';

$message = urlencode("Name:".$name."\nPhone: ".$phone."\nMessage: ".$message);

file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");

?>