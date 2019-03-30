<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);
if(!$update)
{
  exit;
}
$dservername = "localhost";
$dusername = "root";
$dpassword = "";
$dbname = "my_simonetenisci";

	// Create connection
$link = new mysqli($dservername, $dusername, $dpassword, $dbname);
// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
} 
//require(“send-sticker.php”);
date_default_timezone_set('Europe/Rome');
$giorno = date("H:i:s");
$message = isset($update['message']) ? $update['message'] : "";
$messageId = isset($message['message_id']) ? $message['message_id'] : "";
//$scrivente = isset($message['from']) ? $message['from'] : "";
//$link = Request::exportChatInviteLink(['chat_id' => $chat_id]);
$chatId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
$firstname = isset($message['chat']['first_name']) ? $message['chat']['first_name'] : "";
$lastname = isset($message['chat']['last_name']) ? $message['chat']['last_name'] : "";
$username = isset($message['chat']['username']) ? $message['chat']['username'] : "";
$date = isset($message['date']) ? $message['date'] : "";
$text = isset($message['text']) ? $message['text'] : "";
$text = trim($text);
$text = strtolower($text);
header("Content-Type: application/json");
$response = 'Qualcosa non ha funzionato, aggiusta stronzo';
if(strpos($text, "/start") === 0)
{
	$response = "A REGA FUNZIONO";
	$parameters = array('chat_id' => $chatId, "text" => $response);
	$parameters["method"] = "sendMessage";
	echo json_encode($parameters);
}
elseif(strpos($text, "/postaggio") === 0)
{
	$response = "POSTAGGIO IN CORSO";
	$parameters = array('chat_id' => $chatId, "text" => $response);
	$parameters["method"] = "sendMessage";
	echo json_encode($parameters);
	 $sql = "SELECT * from messaggi";
	 $result = $link->query($sql);
	 if ($result->num_rows > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			$response = $row["messaggio"];
			header("Location: https://api.telegram.org/bot587912595:AAH2vcd1JzG1RuUK7X4h1k06L0VnMU7RUO0/sendMessage?chat_id=@AbruzzoGuerra1980&text=".$response."");
			sleep(60);			
		}
} else {
    echo "0 risultati";
}
$link->close();	
}
