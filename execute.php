<?php
$aquila = array("Acciano", 
"Aielli", 
"Alfedena",
"Anversa degli Abruzzi",
"Ateleta",
"Avezzano",
"Balsorano",
"Barete",
"Barisciano",
"Barrea",
"Bisegna", 
"Bugnara", 
"Cagnano Amiterno", 
"Calascio", 
"Campo di Giove", 
"Campotosto", 
"Canistro", 
"Cansano", 
"Capestrano",
"Capistrello", 
"Capitignano", 
"Caporciano", 
"Cappadocia", 
"Carapelle Calvisio", 
"Carsoli", 
"Castel del Monte", 
"Castel di Ieri", 
"Castel di Sangro", 
"Castellafiume", 
"Castelvecchio Calvisio", 
"Castelvecchio Subequo", 
"Celano", 
"Cerchio", 
"Civita d'Antino", 
"Civitella Alfedena", 
"Civitella Roveto", 
"Cocullo", 
"Collarmele", 
"Collelongo", 
"Collepietro", 
"Corfinio", 
"Fagnano Alto", 
"Fontecchio", 
"Fossa",
"Gagliano Aterno", 
"Gioia dei Marsi", 
"Goriano Sicoli", 
"Introdacqua", 
"L'Aquila", 
"Lecce nei Marsi", 
"Luco dei Marsi", 
"Lucoli", 
"Magliano de' Marsi",
"Massa d'Albe", 
"Molina Aterno", 
"Montereale", 
"Morino",
"Navelli", 
"Ocre",
"Ofena",
"Opi", 
"Oricola", 
"Ortona dei Marsi", 
"Ortucchio", 
"Ovindoli", 
"Pacentro", 
"Pereto", 
"Pescasseroli", 
"Pescina", 
"Pescocostanzo", 
"Pettorano sul Gizio", 
"Pizzoli",
"Poggio Picenze",
"Prata d'Ansidonia", 
"Pratola Peligna", 
"Prezza", 
"Raiano", 
"Rivisondoli", 
"Rocca Pia", 
"Rocca di Botte", 
"Rocca di Cambio", 
"Rocca di Mezzo", 
"Roccacasale", 
"Roccaraso", 
"San Benedetto dei Marsi", 
"San Benedetto in Perillis", 
"San Demetrio ne' Vestini", 
"San Pio delle Camere", 
"San Vincenzo Valle Roveto", 
"Sant'Eusanio Forconese", 
"Sante Marie", 
"Santo Stefano di Sessanio", 
"Scanno", 
"Scontrone", 
"Scoppito", 
"Scurcola Marsicana", 
"Secinaro", 
"Sulmona", 
"Tagliacozzo", 
"Tione degli Abruzzi", 
"Tornimparte", 
"Trasacco", 
"Villa Sant'Angelo", 
"Villa Santa Lucia degli Abruzzi", 
"Villalago", 
"Villavallelonga", 
"Villetta Barrea", 
"Vittorito");
$content = file_get_contents("php://input");
$update = json_decode($content, true);
if(!$update)
{
  exit;
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
elseif(strpos($text, "/guerra") === 0)
{
	$response = "LA GUERRA HA INIZIO!";
	$parameters = array('chat_id' => $chatId, "text" => $response);
	$parameters["method"] = "sendMessage";
	echo json_encode($parameters);
	sleep(10);
	while((sizeof($provincia)) > 1)
	{
		$w = $aquila[rand(0,sizeof($aquila)-1)];
		$l = $aquila[rand(0,sizeof($aquila)-1)];
		while ($w == $l)
		{
			$l[rand(0,sizeof($aquila)-1)];
			sleep(1);			
		}
		$parameters = array('chat_id' => $chatId, "text" => $response);
		$response = "Il comune di $w ha sconfitto il comune di $l! ".sizeof($aquila)." comuni rimanenti.";
		$parameters["method"] = "sendMessage";
		echo json_encode($parameters);
		unset($aquila[$l]);
		array_values($aquila);		
		sleep(60);
	}
	$parameters = array('chat_id' => $chatId, "text" => $response);
	$response = "Il comune di ".$aquila[0]." ha conquistato L'Abruzzo!";
	$parameters["method"] = "sendMessage";
	echo json_encode($parameters);
	return;
}
