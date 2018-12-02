<?php
require 'functions.php';
require 'class-http-request.php';

$api = "587912595:AAH2vcd1JzG1RuUK7X4h1k06L0VnMU7RUO0";
$content = file_get_contents("php://input");
$update = json_decode($content, true);

$userID = $update["message"]["from"]["id"];
$chatID = $update["message"]["chat"]["id"];
$msg = $update["message"]["text"];


if($msg == "/stocazzo") {
  sm($chatID, "stocazzo");
} 
?>