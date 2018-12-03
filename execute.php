<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);
if(!$update)
{
  exit;
}
$message = isset($update['message']) ? $update['message'] : "";
$messageId = isset($message['message_id']) ? $message['message_id'] : "";
$scrivente = isset($message['from']) ? $message['from'] : "";
$link = Request::exportChatInviteLink(['chat_id' => $chat_id]);
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
$lorebot = 'lorebot';
$attacca = 'lorebot attacca';
$uccidi = 'lorebot uccidi';
if(strpos($text, "/start") === 0)
{
	$response = "Preparati a soffrire, $firstname!";
}
if(strpos($text, "/scrivente") === 0)
{
	$response = "$scrivente";
}
if(strpos($text, "/link") === 0)
{
	if (isset($link))
	{
	$response = "Link Regno: $link";
	}
	else
	{
	$response = "Fai troppo schifo per richiedere il link";
	}
}
elseif(strpos($text, "/stocazzo") === 0)
{
	$response = "stocazzo";
}
elseif(strpos($text, "/use") === 0)
{
	$response = "USE";
}
elseif(strpos($text, "/mfnb") === 0)
{
	$response = "MFNB";
}
elseif(strtolower($text) == "/tempestadimattonelle")
{
	$response = "/TEMPESTADIMATTONELLE";
}
elseif( strpos(strtolower($text), "aaaa") !== false )
{
   $response = "AAAAAAAAAAAAAAAAAAAAAA";
}
elseif(strpos($text, "/kio") === 0)
{
	$x = random_int(0, 8);
	if ($x == 0)
	{
		$response = "Statt accort ca mammt staser a truov muort all anm e kitamuort a te e chella cess e mammt stu scem e merd";
	}
	elseif ($x == 1)
	{
		$response = "a granda latrin e sort co cul stuort";
	}
	elseif ($x == 2)
	{
		$response = "tua mamma tutto guarda come me lo succhia tutto";
	}
	elseif ($x == 3)
	{
		$response = "chell to miett inde pakk e tu sort sta bukkinar e merd";
	}
	elseif ($x == 4)
	{
		$response = "allora nn mi presento perche dovresti gia sapere chi sono capito";
	}
	elseif ($x == 5)
	{
		$response = "Maronn sguarret e kitabiv té alla pesca";
	}
	elseif ($x == 6)
	{
		$response = "A fess d mamt kitammourt t facc assagià lu vesuvij e nin ti ding li babbbà capit strunz k l babbbà è a nostr spescialità";
	}
	elseif ($x == 7)
	{
		$response = "Cazz rid vafammocc t jett la munnezz appress";
	}
	elseif ($x == 8)
	{
		$response = "cazz vuo";
	}
}
elseif(strpos($text, "/kia") === 0)
{
	$x = random_int(0, 24);
	if ($x == 0)
	{
		$response = "Io non sono vergine, a differenza tua. Perché le persone mi vogliono perché sono matura e più intelligente di un bambino col pannolino che si caca ancora addosso";
	}
	elseif ($x == 1)
	{
		$response = "Infatti una volta mi ha detto che non ero costretta a farlo se mi faceva schifo, ma alla fine io lo faccio solo per lui";
	}
	elseif ($x == 2)
	{
		$response = "Ahaha è che io sono praticamente anestetizzata quindi non sento quasi nulla";
	}
	elseif ($x == 3)
	{
		$response = "Hai assaggiato il tuo sperma? 
A me fuori fa schifo per la consistenza. Se si lava il sapore non è un problema";
	}
	elseif ($x == 4)
	{
		$response = "Si chiama vandali di merda che rompono le cose mannaggia a loro sono caduta in un tombino più di quattro anni fa e mi sono sfracellata le tette. Non mi si sono più sviluppate.";
	}
	elseif ($x == 5)
	{
		$response = "Immagino che faccia anche bene a dirmi che sono inutile, che sono un fallimento, una fancazzista, che faccio schifo, che sono un preservativo bucato...";
	}
	elseif ($x == 6)
	{
		$response = "ho sempre saputo di non avere diritto di vivere";
	}
	elseif ($x == 7)
	{
		$response = "Mia madre dice che i coltelli sono armi da fuoco";
	}
	elseif ($x == 8)
	{
		$response = "E mio padre mi telefona una volta dopo 18 anni di assenza per dirmi di non stare al telefono";
	}
	elseif ($x == 9)
	{
		$response = "Prof: Chiara, cosa farai stasera? 
Io: mi deprimerò.. E quando arriverà mia madre mi chiuderò in camera mia, mi siederò per terra e senza fare nulla aspetterò la notte e così il giorno dopo
Prof: Ma perché non esci? 
Io: *ride* non so con chi uscire
Prof: *indica i compagni* e qui non ce n'è abbastanza di persone con cui uscire?
Io: *ha un attimo di blocco, non vuole dire che le stanno tutti sul cazzo e che preferirebbe mettere le dita nella presa di corrente e pensa una scusa* nahh *ride* sono lontani
Prof: eh il modo di incontrarsi si trova... E a Villasor? 
Io: Sì li ho, cioè li avevo. Ho litigato con una persona e sono tutti dalla sua... Cioè, non ho proprio litigato... 
Prof: oppure potresti restare a Cagliari con i tuoi amici per la notte? 
Io: *ride forte* mia madre non mi lascia stare a Cagliari, ho chiesto più volte
I PROF CHE SI FANNO GLI AFFARI TUOI";
	}
	elseif ($x == 10)
	{
		$response = "È perché sono negra";
	}
	elseif ($x == 11)
	{
		$response = "Ho la pelle color marocchino e i capelli ricci e castani mentre loro sono tutti pallidi, capelli rossi e occhi verdi";
	}
	elseif ($x == 12)
	{
		$response = "PRETENDE CHE MI ALZI DAL CESSO MENTRE CAGO PER FARLA PISCIARE MADONNA PUTTANA TRATTIENI";
	}
	elseif ($x == 13)
	{
		$response = "DIOCANE LASCIAMI CAGARE E LEVATI DAL CAZZO DROGATA DI MERDA CHE NON SEI ALTRA(fuma)";
	}
	elseif ($x == 14)
	{
		$response = "MI DICE CHE SONO UNA EXTRACOMUNITARIA OBESA";
	}
	elseif ($x == 15)
	{
		$response = "AVETE CAPITO PORCO DIO? MI MANDA DALLO PSICOLOGO PER CONVINCERMI CHE IO HO PROBLEMI MENTALI";
	}
	elseif ($x == 16)
	{
		$response = "I genitori di mia madre sono già morti altrimenti se capitasse alla mia le direi di morire lei piuttosto bene";
	}
	elseif ($x == 17)
	{
		$response = "Sta gran zoccola mi fa passare da stronza perché lei è handicappata e io anziché fare la cenerentolina di merda pulendo dove sporca e parlando con i pettirossi mi faccio i maledetti cazzi miei e se ho voglia studio
PORCO DIO NON SONO UNA SERVA E NON MI PAGHI HO SETTEMILA COSE MIGLIORI DA FARE CHE PULIRE LA TUA MERDA";
	}
	elseif ($x == 18)
	{
		$response = "È ENTRATA DI NUOVO PER LA STORIA DELLA PIPÌ PORCODDIO HO IL CICLO E DEVO CAMBIARMI IL COSO NON PUOI ENTRARE LEVATI DAI COGLIONI DIO MALEDETTO E SMETTILA DI METTERE DALL'ALTRA PARTE DELLA CASA IL CESTINO CHE PORCO DIO INFAME GLI ASSORBENTI TE LI LASCIO APERTI NEL NEL LETTO";
	}
	elseif ($x == 19)
	{
		$response = "Ti coddiri
(Forma apotropaica in sardo, che letteralmente si traduce con ciò-che-fece-cicciolina-con-un-cavallo)";
	}
	elseif ($x == 20)
	{
		$response = "Io avevo un nonno mozzarellino con gli occhi verdi e i capelli rossi (era del nord Italia) che ha sposato una sarda tra le più negre😂 mio padre ha preso da lei, ma mio fratello è la copia di jon snow e io sono negra😂
Mentre i genitori di mamma avevano entrambi gli occhi scuri e lo stesso tutti e quattro i figli, ma i figli dei maschi hanno gli occhi chiari (verdi o grigi) e noi figli delle femmine li abbiamo scuri(mio fratello jonsnò non è figlio di mamma)";
	}
	elseif ($x == 21)
	{
		$response = "NOI TROBIAMO LE PECOREEEEEEEEE DIO CANEEEEEEE";
	}
	elseif ($x == 22)
	{
		$response = "Raga
Sono ufficialmente una quattrocchi
Miope
-1 a destra e -0.75 a sinistra. Evviva";
	}
	elseif ($x == 23)
	{
		$response = "Ti avevo detto che hai le boobies così impari a rubarmele";
	}
	elseif ($x == 24)
	{
		$response = "Hai fallato solo tre cose
1) mio padre non era un pedofilo sgrammaticato 
2) non sono italiana
3) mio padre è morto";
	}
}
elseif( strpos(strtolower($text), $lorebot) !== false )
{
	if( strpos(strtolower($text), $attacca) !== false || strpos(strtolower($text), $uccidi) !== false)
	{
		$x = random_int(0, 9);
		$vittima = ucfirst(substr($text, 15));  
	if ($x == 0)
	{
		$response = "$vittima, preparati a morire! CANNONE COTOLETTA!";
	}
	elseif ($x == 1)
	{
		$response = "$vittima, preparati a morire! FRONTE LUMINOSAAAAAAAAAAAAAAA";
	}
	elseif ($x == 2)
	{
		$response = "$vittima, preparati a morire! COLPO FURTO DI PORCO!";
	}
	elseif ($x == 3)
	{
		$response = "non ho voglia";
	}
	elseif ($x == 4)
	{
		$response = "$vittima, preparati a soffrire! KIOKEN TRICOLORE!";
	}
	elseif ($x == 5)
	{
		$response = "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA";
	}
	elseif ($x == 6)
	{
		$response = "$vittima, preparati a morire! SBORRATA TEMPORALE!";
	}
	elseif ($x == 7)
	{
		$response = "$vittima, la Kiomorra ti saluta! PUGNO!";
	}
	elseif ($x == 8)
	{
		$response = "forse non dovremmo ucciderlo, forse dovremmo farlo entrare nella Lore";
	}
	elseif ($x == 9)
	{
		$response = "aspe che mi sparo un po' di olio di motore nel corpo";
	}
	}
	else {
	$x = random_int(0, 9);
	if ($x == 0)
	{
		$response = "cazzo vuoi";
	}
	elseif ($x == 1)
	{
		$response = "si sono proprio io";
	}
	elseif ($x == 2)
	{
		$response = "in canne e fossa";
	}
	elseif ($x == 3)
	{
		$response = "nominami di nuovo e finisce bene";
	}
	elseif ($x == 4)
	{
		$response = "tuna, attacca!";
	}
	elseif ($x == 5)
	{
		$response = "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA";
	}
	elseif ($x == 6)
	{
		$response = "stasera sta busta di piscio di $firstname paga da bere a tutti";
	}
	elseif ($x == 7)
	{
		$response = "Boris, obliteralo!";
	}
	elseif ($x == 8)
	{
		$response = "dio paride";
	}
	elseif ($x == 9)
	{
		$response = "We $username";
	}
	}
}
/*else
{
	$response = "sto comando nn esiste cogl****e";
}*/
$parameters = array('chat_id' => $chatId, "text" => $response);
$parameters["method"] = "sendMessage";
echo json_encode($parameters);
