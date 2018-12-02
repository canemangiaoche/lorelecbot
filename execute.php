<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);
if(!$update)
{
  exit;
}
$message = isset($update['message']) ? $update['message'] : "";
$messageId = isset($message['message_id']) ? $message['message_id'] : "";
$chatId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
$firstname = isset($message['chat']['first_name']) ? $message['chat']['first_name'] : "";
$lastname = isset($message['chat']['last_name']) ? $message['chat']['last_name'] : "";
$username = isset($message['chat']['username']) ? $message['chat']['username'] : "";
$date = isset($message['date']) ? $message['date'] : "";
$text = isset($message['text']) ? $message['text'] : "";
$text = trim($text);
$text = strtolower($text);
header("Content-Type: application/json");
$response = '';
if(strpos($text, "/start") === 0 || $text=="ciao")
{
	$response = "Preparati a soffrire, $firstname!";
}
elseif($text=="/stocazzo")
{
	$response = "stocazzo";
}
elseif($text=="/TEMPESTADIMATTONELLE")
{
	$response = "/TEMPESTADIMATTONELLE";
}
elseif($text=="/dado")
{
	$x = random_int(0, 5);
	if ($x == 0)
	{
		$response = "1";
	}
	elseif ($x == 1)
	{
		$response = "2";
	}
	elseif ($x == 2)
	{
		$response = "3";
	}
	elseif ($x == 3)
	{
		$response = "4";
	}
	elseif ($x == 4)
	{
		$response = "5";
	}
	elseif ($x == 5)
	{
		$response = "6";
	}
}
else
{
	$response = "sto comando nn esiste cogl****e";
}
$parameters = array('chat_id' => $chatId, "text" => $response);
$parameters["method"] = "sendMessage";
echo json_encode($parameters);