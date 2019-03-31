<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);
if(!$update)
{
  exit;
}
set_time_limit(90000);
//require(“send-sticker.php”);
date_default_timezone_set('GMT');
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
$response = '';
$bot_token = '587912595:AAH2vcd1JzG1RuUK7X4h1k06L0VnMU7RUO0';
$sticker_id = "CAADBAADZgEAApD3ZAYdxLS3pXN-cAI";
$lorebot = 'lorebot';
$attacca = 'lorebot attacca';
$uccidi = 'lorebot uccidi';
$domanda = 'lorebot cosa ne pensi di';
$battaglia = array("Il comune di Cermignano ha sconfitto il comune di Ortona dei Marsi! 305 comuni rimanenti.", "Il comune di Barete ha sconfitto il comune di Basciano! 304 comuni rimanenti.", "Il comune di Castel di Ieri ha sconfitto il comune di Sulmona! 303 comuni rimanenti.", "Il comune di Castiglione a Casauria ha sconfitto il comune di Serramonacesca! 302 comuni rimanenti.", "Il comune di Gamberale ha sconfitto il comune di Tocco da Casauria! 301 comuni rimanenti.", "Il comune di Morino ha sconfitto il comune di Villa Sant'Angelo! 300 comuni rimanenti.", "Il comune di Spoltore ha sconfitto il comune di Bucchianico! 299 comuni rimanenti.", "Il comune di Villalfonsina ha sconfitto il comune di Montelapiano! 298 comuni rimanenti.", "Il comune di Celano ha sconfitto il comune di Canistro! 297 comuni rimanenti.", "Il comune di Alba Adriatica ha sconfitto il comune di Popoli! 296 comuni rimanenti.", "Il comune di Scontrone ha sconfitto il comune di Ofena! 295 comuni rimanenti.", "Il comune di Scurcola Marsicana ha sconfitto il comune di Raiano! 294 comuni rimanenti.", "Il comune di Fraine ha sconfitto il comune di Luco dei Marsi! 293 comuni rimanenti.", "Il comune di Civitella del Tronto ha sconfitto il comune di Frisa! 292 comuni rimanenti.", "Il comune di Pineto ha sconfitto il comune di Avezzano! 291 comuni rimanenti.", "Il comune di Opi ha sconfitto il comune di Roio del Sangro! 290 comuni rimanenti.", "Il comune di Castiglione a Casauria ha sconfitto il comune di Mozzagrogna! 289 comuni rimanenti.", "Il comune di Castellalto ha sconfitto il comune di Montebello di Bertona! 288 comuni rimanenti.", "Il comune di Ripa Teatina ha sconfitto il comune di Notaresco! 287 comuni rimanenti.", "Il comune di Giulianova ha sconfitto il comune di Villamagna! 286 comuni rimanenti.", "Il comune di Villa Santa Maria ha sconfitto il comune di Cupello! 285 comuni rimanenti.", "Il comune di Tornimparte ha sconfitto il comune di Turrivalignani! 284 comuni rimanenti.", "Il comune di Castelvecchio Calvisio ha sconfitto il comune di Rosciano! 283 comuni rimanenti.", "Il comune di Castel del Monte ha sconfitto il comune di Scafa! 282 comuni rimanenti.", "Il comune di Palombaro ha sconfitto il comune di Miglianico! 281 comuni rimanenti.", "Il comune di Barete ha sconfitto il comune di Archi! 280 comuni rimanenti.", "Il comune di Civitella Alfedena ha sconfitto il comune di Gessopalena! 279 comuni rimanenti.", "Il comune di Collecorvino ha sconfitto il comune di Martinsicuro! 278 comuni rimanenti.", "Il comune di Campotosto ha sconfitto il comune di San Benedetto dei Marsi! 277 comuni rimanenti.", "Il comune di Francavilla al Mare ha sconfitto il comune di Crognaleto! 276 comuni rimanenti.", "Il comune di Scoppito ha sconfitto il comune di Pizzoferrato! 275 comuni rimanenti.", "Il comune di Torricella Sicura ha sconfitto il comune di Ateleta! 274 comuni rimanenti.", "Il comune di Santa Maria Imbaro ha sconfitto il comune di Poggiofiorito! 273 comuni rimanenti.", "Il comune di Roccaraso ha sconfitto il comune di Villetta Barrea! 272 comuni rimanenti.", "Il comune di Scontrone ha sconfitto il comune di Alanno! 271 comuni rimanenti.", "Il comune di Pescasseroli ha sconfitto il comune di Civitaluparella! 270 comuni rimanenti.", "Il comune di Filetto ha sconfitto il comune di Ripa Teatina! 269 comuni rimanenti.", "Il comune di Palombaro ha sconfitto il comune di Corfinio! 268 comuni rimanenti.", "Il comune di Barisciano ha sconfitto il comune di Arielli! 267 comuni rimanenti.", "Il comune di San Salvo ha sconfitto il comune di Fontecchio! 266 comuni rimanenti.", "Il comune di Vicoli ha sconfitto il comune di Castel Castagna! 265 comuni rimanenti.", "Il comune di Gagliano Aterno ha sconfitto il comune di Penna Sant'Andrea! 264 comuni rimanenti.", "Il comune di Corvara ha sconfitto il comune di Gissi! 263 comuni rimanenti.", "Il comune di Roccacasale ha sconfitto il comune di Collecorvino! 262 comuni rimanenti.", "Il comune di Acciano ha sconfitto il comune di Tortoreto! 261 comuni rimanenti.", "Il comune di Barrea ha sconfitto il comune di Pretoro! 260 comuni rimanenti.", "Il comune di Scurcola Marsicana ha sconfitto il comune di Cepagatti! 259 comuni rimanenti.", "Il comune di Borrello ha sconfitto il comune di Rosello! 258 comuni rimanenti.", "Il comune di Nereto ha sconfitto il comune di Caramanico Terme! 257 comuni rimanenti.", "Il comune di San Pio delle Camere ha sconfitto il comune di Pettorano sul Gizio! 256 comuni rimanenti.", "Il comune di San Salvo ha sconfitto il comune di Ari! 255 comuni rimanenti.", "Il comune di Pratola Peligna ha sconfitto il comune di Goriano Sicoli! 254 comuni rimanenti.", "Il comune di Cugnoli ha sconfitto il comune di Paglieta! 253 comuni rimanenti.", "Il comune di San Vito Chietino ha sconfitto il comune di Sant'Egidio alla Vibrata! 252 comuni rimanenti.", "Il comune di Civitella Roveto ha sconfitto il comune di Canosa Sannita! 251 comuni rimanenti.", "Il comune di Torino di Sangro ha sconfitto il comune di Tollo! 250 comuni rimanenti.", "Il comune di Castelguidone ha sconfitto il comune di Atessa! 249 comuni rimanenti.", "Il comune di Capitignano ha sconfitto il comune di Civitella Casanova! 248 comuni rimanenti.", "Il comune di Casacanditella ha sconfitto il comune di Cansano! 247 comuni rimanenti.", "Il comune di Treglio ha sconfitto il comune di Cermignano! 246 comuni rimanenti.", "Il comune di Castel di Ieri ha sconfitto il comune di Gioia dei Marsi! 245 comuni rimanenti.", "Il comune di Capestrano ha sconfitto il comune di Taranta Peligna! 244 comuni rimanenti.", "Il comune di Canzano ha sconfitto il comune di Capistrello! 243 comuni rimanenti.", "Il comune di Sant'Eufemia a Maiella ha sconfitto il comune di San Buono! 242 comuni rimanenti.", "Il comune di Borrello ha sconfitto il comune di Filetto! 241 comuni rimanenti.", "Il comune di Santo Stefano di Sessanio ha sconfitto il comune di Schiavi di Abruzzo! 240 comuni rimanenti.", "Il comune di Ocre ha sconfitto il comune di Massa d'Albe! 239 comuni rimanenti.", "Il comune di Ortucchio ha sconfitto il comune di Roccamorice! 238 comuni rimanenti.", "Il comune di Civitella Alfedena ha sconfitto il comune di Cugnoli! 237 comuni rimanenti.", "Il comune di Vicoli ha sconfitto il comune di Città Sant'Angelo! 236 comuni rimanenti.", "Il comune di Giuliano Teatino ha sconfitto il comune di Villa Santa Maria! 235 comuni rimanenti.", "Il comune di Guilmi ha sconfitto il comune di Fallo! 234 comuni rimanenti.", "Il comune di San Vito Chietino ha sconfitto il comune di Catignano! 233 comuni rimanenti.", "Il comune di Pescosansonesco ha sconfitto il comune di Celano! 232 comuni rimanenti.", "Il comune di Castellafiume ha sconfitto il comune di Carpineto Sinello! 231 comuni rimanenti.", "Il comune di Fossacesia ha sconfitto il comune di Tufillo! 230 comuni rimanenti.", "Il comune di Santa Maria Imbaro ha sconfitto il comune di Morro d'Oro! 229 comuni rimanenti.", "Il comune di Carunchio ha sconfitto il comune di Cocullo! 228 comuni rimanenti.", "Il comune di San Pio delle Camere ha sconfitto il comune di Carunchio! 227 comuni rimanenti.", "Il comune di Balsorano ha sconfitto il comune di Lettomanoppello! 226 comuni rimanenti.", "Il comune di Villalago ha sconfitto il comune di Roccacasale! 225 comuni rimanenti.", "Il comune di Fano Adriano ha sconfitto il comune di Ocre! 224 comuni rimanenti.", "Il comune di San Valentino in Abruzzo Citeriore ha sconfitto il comune di Collelongo! 223 comuni rimanenti.", "Il comune di Colonnella ha sconfitto il comune di Lucoli! 222 comuni rimanenti.", "Il comune di Pianella ha sconfitto il comune di San Vincenzo Valle Roveto! 221 comuni rimanenti.", "Il comune di Colledara ha sconfitto il comune di Sant'Eusanio Forconese! 220 comuni rimanenti.", "Il comune di Civitaquana ha sconfitto il comune di Colonnella! 219 comuni rimanenti.", "Il comune di Sant'Omero ha sconfitto il comune di Casacanditella! 218 comuni rimanenti.", "Il comune di Tagliacozzo ha sconfitto il comune di Civitella Roveto! 217 comuni rimanenti.", "Il comune di Pietranico ha sconfitto il comune di Tossicia! 216 comuni rimanenti.", "Il comune di Atri ha sconfitto il comune di Pineto! 215 comuni rimanenti.", "Il comune di Tagliacozzo ha sconfitto il comune di Rocca Santa Maria! 214 comuni rimanenti.", "Il comune di Civita d'Antino ha sconfitto il comune di Civitella del Tronto! 213 comuni rimanenti.", "Il comune di Castiglione Messer Raimondo ha sconfitto il comune di Tornareccio! 212 comuni rimanenti.", "Il comune di Manoppello ha sconfitto il comune di Collepietro! 211 comuni rimanenti.", "Il comune di Pratola Peligna ha sconfitto il comune di Alfedena! 210 comuni rimanenti.", "Il comune di Vacri ha sconfitto il comune di Morino! 209 comuni rimanenti.", "Il comune di Casalanguida ha sconfitto il comune di Montereale! 208 comuni rimanenti.", "Il comune di San Martino sulla Marrucina ha sconfitto il comune di Torre de' Passeri! 207 comuni rimanenti.", "Il comune di Scontrone ha sconfitto il comune di Bisenti! 206 comuni rimanenti.", "Il comune di San Benedetto in Perillis ha sconfitto il comune di Castiglione a Casauria! 205 comuni rimanenti.", "Il comune di Liscia ha sconfitto il comune di Carpineto della Nora! 204 comuni rimanenti.", "Il comune di Castel Frentano ha sconfitto il comune di Perano! 203 comuni rimanenti.", "Il comune di Pietranico ha sconfitto il comune di Corvara! 202 comuni rimanenti.", "Il comune di Introdacqua ha sconfitto il comune di Oricola! 201 comuni rimanenti.", "Il comune di Villa Celiera ha sconfitto il comune di Roccamontepiano! 200 comuni rimanenti.", "Il comune di Ancarano ha sconfitto il comune di Bisegna! 199 comuni rimanenti.", "Il comune di Scoppito ha sconfitto il comune di Mosciano Sant'Angelo! 198 comuni rimanenti.", "Il comune di Pietracamela ha sconfitto il comune di Roccascalegna! 197 comuni rimanenti.", "Il comune di Anversa degli Abruzzi ha sconfitto il comune di Pescosansonesco! 196 comuni rimanenti.", "Il comune di Roccaspinalveti ha sconfitto il comune di Scontrone! 195 comuni rimanenti.", "Il comune di Controguerra ha sconfitto il comune di Scoppito! 194 comuni rimanenti.", "Il comune di Cellino Attanasio ha sconfitto il comune di Ortucchio! 193 comuni rimanenti.", "Il comune di Castel del Monte ha sconfitto il comune di Aielli! 192 comuni rimanenti.", "Il comune di Liscia ha sconfitto il comune di Vittorito! 191 comuni rimanenti.", "Il comune di San Demetrio ne' Vestini ha sconfitto il comune di Nereto! 190 comuni rimanenti.", "Il comune di Salle ha sconfitto il comune di Controguerra! 189 comuni rimanenti.", "Il comune di Pietranico ha sconfitto il comune di Rocca di Botte! 188 comuni rimanenti.", "Il comune di Villavallelonga ha sconfitto il comune di Barisciano! 187 comuni rimanenti.", "Il comune di Treglio ha sconfitto il comune di Fraine! 186 comuni rimanenti.", "Il comune di Lanciano ha sconfitto il comune di Castelguidone! 185 comuni rimanenti.", "Il comune di Bellante ha sconfitto il comune di Picciano! 184 comuni rimanenti.", "Il comune di Villa Santa Lucia degli Abruzzi ha sconfitto il comune di Tagliacozzo! 183 comuni rimanenti.", "Il comune di Francavilla al Mare ha sconfitto il comune di Spoltore! 182 comuni rimanenti.", "Il comune di San Vito Chietino ha sconfitto il comune di Villalago! 181 comuni rimanenti.", "Il comune di Bellante ha sconfitto il comune di Fresagrandinaria! 180 comuni rimanenti.", "Il comune di Treglio ha sconfitto il comune di Prezza! 179 comuni rimanenti.", "Il comune di Civita d'Antino ha sconfitto il comune di Palombaro! 178 comuni rimanenti.", "Il comune di Montebello sul Sangro ha sconfitto il comune di L'Aquila! 177 comuni rimanenti.", "Il comune di Vasto ha sconfitto il comune di Molina Aterno! 176 comuni rimanenti.", "Il comune di Furci ha sconfitto il comune di Borrello! 175 comuni rimanenti.", "Il comune di Roseto degli Abruzzi ha sconfitto il comune di Casalbordino! 174 comuni rimanenti.", "Il comune di Treglio ha sconfitto il comune di Barete! 173 comuni rimanenti.", "Il comune di Castilenti ha sconfitto il comune di Castiglione Messer Raimondo! 172 comuni rimanenti.", "Il comune di Liscia ha sconfitto il comune di Fara San Martino! 171 comuni rimanenti.", "Il comune di Fossacesia ha sconfitto il comune di Fara Filiorum Petri! 170 comuni rimanenti.", "Il comune di Civitaquana ha sconfitto il comune di Bolognano! 169 comuni rimanenti.", "Il comune di Scurcola Marsicana ha sconfitto il comune di Montebello sul Sangro! 168 comuni rimanenti.", "Il comune di Pennapiedimonte ha sconfitto il comune di Guilmi! 167 comuni rimanenti.", "Il comune di Gagliano Aterno ha sconfitto il comune di Valle Castellana! 166 comuni rimanenti.", "Il comune di Carsoli ha sconfitto il comune di Rivisondoli! 165 comuni rimanenti.", "Il comune di Secinaro ha sconfitto il comune di San Giovanni Teatino! 164 comuni rimanenti.", "Il comune di Pacentro ha sconfitto il comune di Pratola Peligna! 163 comuni rimanenti.", "Il comune di Acciano ha sconfitto il comune di Scanno! 162 comuni rimanenti.", "Il comune di San Valentino in Abruzzo Citeriore ha sconfitto il comune di Anversa degli Abruzzi! 161 comuni rimanenti.", "Il comune di Roseto degli Abruzzi ha sconfitto il comune di Colledara! 160 comuni rimanenti.", "Il comune di Poggio Picenze ha sconfitto il comune di Torricella Sicura! 159 comuni rimanenti.", "Il comune di Cortino ha sconfitto il comune di Capitignano! 158 comuni rimanenti.", "Il comune di Gagliano Aterno ha sconfitto il comune di Colledimacine! 157 comuni rimanenti.", "Il comune di Villa Celiera ha sconfitto il comune di Sant'Eufemia a Maiella! 156 comuni rimanenti.", "Il comune di Orsogna ha sconfitto il comune di Alba Adriatica! 155 comuni rimanenti.", "Il comune di Teramo ha sconfitto il comune di Opi! 154 comuni rimanenti.", "Il comune di Scurcola Marsicana ha sconfitto il comune di Cellino Attanasio! 153 comuni rimanenti.", "Il comune di San Martino sulla Marrucina ha sconfitto il comune di Bugnara! 152 comuni rimanenti.", "Il comune di Castel di Ieri ha sconfitto il comune di Villavallelonga! 151 comuni rimanenti.", "Il comune di Castelvecchio Subequo ha sconfitto il comune di San Demetrio ne' Vestini! 150 comuni rimanenti.", "Il comune di Furci ha sconfitto il comune di Nocciano! 149 comuni rimanenti.", "Il comune di Cerchio ha sconfitto il comune di San Benedetto in Perillis! 148 comuni rimanenti.", "Il comune di Moscufo ha sconfitto il comune di Abbateggio! 147 comuni rimanenti.", "Il comune di Roccaspinalveti ha sconfitto il comune di Torrevecchia Teatina! 146 comuni rimanenti.", "Il comune di Sant'Eusanio del Sangro ha sconfitto il comune di Pescina! 145 comuni rimanenti.", "Il comune di Vicoli ha sconfitto il comune di Treglio! 144 comuni rimanenti.", "Il comune di Montefino ha sconfitto il comune di San Valentino in Abruzzo Citeriore! 143 comuni rimanenti.", "Il comune di Ancarano ha sconfitto il comune di Bomba! 142 comuni rimanenti.", "Il comune di Giuliano Teatino ha sconfitto il comune di Trasacco! 141 comuni rimanenti.", "Il comune di Civitella Messer Raimondo ha sconfitto il comune di Villa Santa Lucia degli Abruzzi! 140 comuni rimanenti.", "Il comune di Ancarano ha sconfitto il comune di Elice! 139 comuni rimanenti.", "Il comune di Pianella ha sconfitto il comune di Fano Adriano! 138 comuni rimanenti.", "Il comune di Ortona ha sconfitto il comune di Cortino! 137 comuni rimanenti.", "Il comune di Pescasseroli ha sconfitto il comune di Castel di Ieri! 136 comuni rimanenti.", "Il comune di Chieti ha sconfitto il comune di Castilenti! 135 comuni rimanenti.", "Il comune di Sant'Omero ha sconfitto il comune di Pietracamela! 134 comuni rimanenti.", "Il comune di Campotosto ha sconfitto il comune di Silvi! 133 comuni rimanenti.", "Il comune di Gamberale ha sconfitto il comune di Cerchio! 132 comuni rimanenti.", "Il comune di San Martino sulla Marrucina ha sconfitto il comune di Acciano! 131 comuni rimanenti.", "Il comune di San Martino sulla Marrucina ha sconfitto il comune di Vicoli! 130 comuni rimanenti.", "Il comune di Castelvecchio Subequo ha sconfitto il comune di Tornimparte! 129 comuni rimanenti.", "Il comune di Lama dei Peligni ha sconfitto il comune di Palmoli! 128 comuni rimanenti.", "Il comune di Salle ha sconfitto il comune di Chieti! 127 comuni rimanenti.", "Il comune di Fossa ha sconfitto il comune di Gagliano Aterno! 126 comuni rimanenti.", "Il comune di Balsorano ha sconfitto il comune di Farindola! 125 comuni rimanenti.", "Il comune di Quadri ha sconfitto il comune di Calascio! 124 comuni rimanenti.", "Il comune di Altino ha sconfitto il comune di Pescocostanzo! 123 comuni rimanenti.", "Il comune di Torano Nuovo ha sconfitto il comune di Introdacqua! 122 comuni rimanenti.", "Il comune di Caporciano ha sconfitto il comune di Salle! 121 comuni rimanenti.", "Il comune di Rapino ha sconfitto il comune di Civita d'Antino! 120 comuni rimanenti.", "Il comune di Villa Celiera ha sconfitto il comune di Pizzoli! 119 comuni rimanenti.", "Il comune di Sant'Omero ha sconfitto il comune di Colledimezzo! 118 comuni rimanenti.", "Il comune di Teramo ha sconfitto il comune di San Giovanni Lipioni! 117 comuni rimanenti.", "Il comune di Crecchio ha sconfitto il comune di Castel di Sangro! 116 comuni rimanenti.", "Il comune di Sante Marie ha sconfitto il comune di Campli! 115 comuni rimanenti.", "Il comune di Pianella ha sconfitto il comune di Canzano! 114 comuni rimanenti.", "Il comune di Orsogna ha sconfitto il comune di Sant'Eusanio del Sangro! 113 comuni rimanenti.", "Il comune di Pennapiedimonte ha sconfitto il comune di Crecchio! 112 comuni rimanenti.", "Il comune di Arsita ha sconfitto il comune di Giulianova! 111 comuni rimanenti.", "Il comune di Rocca di Mezzo ha sconfitto il comune di Liscia! 110 comuni rimanenti.", "Il comune di Magliano de' Marsi ha sconfitto il comune di Santo Stefano di Sessanio! 109 comuni rimanenti.", "Il comune di Pacentro ha sconfitto il comune di San Vito Chietino! 108 comuni rimanenti.", "Il comune di Civitella Messer Raimondo ha sconfitto il comune di Giuliano Teatino! 107 comuni rimanenti.", "Il comune di Brittoli ha sconfitto il comune di Atri! 106 comuni rimanenti.", "Il comune di Roccaspinalveti ha sconfitto il comune di Navelli! 105 comuni rimanenti.", "Il comune di Prata d'Ansidonia ha sconfitto il comune di Pennapiedimonte! 104 comuni rimanenti.", "Il comune di Roseto degli Abruzzi ha sconfitto il comune di Montenerodomo! 103 comuni rimanenti.", "Il comune di Campo di Giove ha sconfitto il comune di Capestrano! 102 comuni rimanenti.", "Il comune di Lama dei Peligni ha sconfitto il comune di Castel Frentano! 101 comuni rimanenti.", "Il comune di Tione degli Abruzzi ha sconfitto il comune di Pietraferrazzana! 100 comuni rimanenti.", "Il comune di Civitella Alfedena ha sconfitto il comune di Guardiagrele! 99 comuni rimanenti.", "Il comune di Collarmele ha sconfitto il comune di Campotosto! 98 comuni rimanenti.", "Il comune di Arsita ha sconfitto il comune di Cappelle sul Tavo! 97 comuni rimanenti.", "Il comune di Orsogna ha sconfitto il comune di Ancarano! 96 comuni rimanenti.", "Il comune di Castiglione Messer Marino ha sconfitto il comune di Monteodorisio! 95 comuni rimanenti.", "Il comune di Secinaro ha sconfitto il comune di Roseto degli Abruzzi! 94 comuni rimanenti.", "Il comune di Dogliola ha sconfitto il comune di Collarmele! 93 comuni rimanenti.", "Il comune di Dogliola ha sconfitto il comune di Torino di Sangro! 92 comuni rimanenti.", "Il comune di Civitaquana ha sconfitto il comune di San Salvo! 91 comuni rimanenti.", "Il comune di Sant'Omero ha sconfitto il comune di Roccaraso! 90 comuni rimanenti.", "Il comune di Rocca San Giovanni ha sconfitto il comune di Villalfonsina! 89 comuni rimanenti.", "Il comune di Balsorano ha sconfitto il comune di Quadri! 88 comuni rimanenti.", "Il comune di Montefino ha sconfitto il comune di Scerni! 87 comuni rimanenti.", "Il comune di Pescara ha sconfitto il comune di Magliano de' Marsi! 86 comuni rimanenti.", "Il comune di Lama dei Peligni ha sconfitto il comune di Civitella Alfedena! 85 comuni rimanenti.", "Il comune di Cagnano Amiterno ha sconfitto il comune di Santa Maria Imbaro! 84 comuni rimanenti.", "Il comune di Loreto Aprutino ha sconfitto il comune di Dogliola! 83 comuni rimanenti.", "Il comune di Lettopalena ha sconfitto il comune di Pacentro! 82 comuni rimanenti.", "Il comune di Castiglione Messer Marino ha sconfitto il comune di Cappadocia! 81 comuni rimanenti.", "Il comune di Pescasseroli ha sconfitto il comune di Vasto! 80 comuni rimanenti.", "Il comune di Tione degli Abruzzi ha sconfitto il comune di Pianella! 79 comuni rimanenti.", "Il comune di Pennadomo ha sconfitto il comune di Lanciano! 78 comuni rimanenti.", "Il comune di Balsorano ha sconfitto il comune di Montesilvano! 77 comuni rimanenti.", "Il comune di Civitaquana ha sconfitto il comune di Gamberale! 76 comuni rimanenti.", "Il comune di Moscufo ha sconfitto il comune di Campo di Giove! 75 comuni rimanenti.", "Il comune di Lecce nei Marsi ha sconfitto il comune di Roccaspinalveti! 74 comuni rimanenti.", "Il comune di Casalincontrada ha sconfitto il comune di Altino! 73 comuni rimanenti.", "Il comune di Barrea ha sconfitto il comune di Castiglione Messer Marino! 72 comuni rimanenti.", "Il comune di Pollutri ha sconfitto il comune di Moscufo! 71 comuni rimanenti.", "Il comune di Furci ha sconfitto il comune di Casalanguida! 70 comuni rimanenti.", "Il comune di Civitaquana ha sconfitto il comune di Fossa! 69 comuni rimanenti.", "Il comune di Torrebruna ha sconfitto il comune di Fossacesia! 68 comuni rimanenti.", "Il comune di Civitella Messer Raimondo ha sconfitto il comune di Torricella Peligna! 67 comuni rimanenti.", "Il comune di Palena ha sconfitto il comune di Bussi sul Tirino! 66 comuni rimanenti.", "Il comune di Arsita ha sconfitto il comune di Manoppello! 65 comuni rimanenti.", "Il comune di Scurcola Marsicana ha sconfitto il comune di Corropoli! 64 comuni rimanenti.", "Il comune di Prata d'Ansidonia ha sconfitto il comune di Orsogna! 63 comuni rimanenti.", "Il comune di Casoli ha sconfitto il comune di Secinaro! 62 comuni rimanenti.", "Il comune di Furci ha sconfitto il comune di Casalincontrada! 61 comuni rimanenti.", "Il comune di Pietranico ha sconfitto il comune di Casoli! 60 comuni rimanenti.", "Il comune di Penne ha sconfitto il comune di Monteferrante! 59 comuni rimanenti.", "Il comune di Prata d'Ansidonia ha sconfitto il comune di Castellafiume! 58 comuni rimanenti.", "Il comune di Celenza sul Trigno ha sconfitto il comune di Fagnano Alto! 57 comuni rimanenti.", "Il comune di Cagnano Amiterno ha sconfitto il comune di Vacri! 56 comuni rimanenti.", "Il comune di Castelvecchio Calvisio ha sconfitto il comune di Montorio al Vomano! 55 comuni rimanenti.", "Il comune di Bellante ha sconfitto il comune di San Pio delle Camere! 54 comuni rimanenti.", "Il comune di Balsorano ha sconfitto il comune di Ovindoli! 53 comuni rimanenti.", "Il comune di Lettopalena ha sconfitto il comune di Pollutri! 52 comuni rimanenti.", "Il comune di Balsorano ha sconfitto il comune di Sante Marie! 51 comuni rimanenti.", "Il comune di Arsita ha sconfitto il comune di Castelli! 50 comuni rimanenti.", "Il comune di Lama dei Peligni ha sconfitto il comune di Rapino! 49 comuni rimanenti.", "Il comune di Torano Nuovo ha sconfitto il comune di Lentella! 48 comuni rimanenti.", "Il comune di Civitaquana ha sconfitto il comune di San Martino sulla Marrucina! 47 comuni rimanenti.", "Il comune di Carapelle Calvisio ha sconfitto il comune di Caporciano! 46 comuni rimanenti.", "Il comune di Arsita ha sconfitto il comune di Montefino! 45 comuni rimanenti.", "Il comune di Penne ha sconfitto il comune di Bellante! 44 comuni rimanenti.", "Il comune di Pescasseroli ha sconfitto il comune di Scurcola Marsicana! 43 comuni rimanenti.", "Il comune di Tione degli Abruzzi ha sconfitto il comune di Isola del Gran Sasso d'Italia! 42 comuni rimanenti.", "Il comune di Penne ha sconfitto il comune di Palena! 41 comuni rimanenti.", "Il comune di Villa Celiera ha sconfitto il comune di Rocca Pia! 40 comuni rimanenti.", "Il comune di Castelvecchio Calvisio ha sconfitto il comune di Carapelle Calvisio! 39 comuni rimanenti.", "Il comune di Celenza sul Trigno ha sconfitto il comune di Pescasseroli! 38 comuni rimanenti.", "Il comune di Sant'Omero ha sconfitto il comune di Balsorano! 37 comuni rimanenti.", "Il comune di Penne ha sconfitto il comune di Rocca di Mezzo! 36 comuni rimanenti.", "Il comune di Castelvecchio Subequo ha sconfitto il comune di Sant'Omero! 35 comuni rimanenti.", "Il comune di Torano Nuovo ha sconfitto il comune di Ortona! 34 comuni rimanenti.", "Il comune di Arsita ha sconfitto il comune di Brittoli! 33 comuni rimanenti.", "Il comune di Civitella Messer Raimondo ha sconfitto il comune di Pennadomo! 32 comuni rimanenti.", "Il comune di Civitaquana ha sconfitto il comune di Montazzoli! 31 comuni rimanenti.", "Il comune di Castelvecchio Calvisio ha sconfitto il comune di Pietranico! 30 comuni rimanenti.", "Il comune di Loreto Aprutino ha sconfitto il comune di Barrea! 29 comuni rimanenti.", "Il comune di Cagnano Amiterno ha sconfitto il comune di Pescara! 28 comuni rimanenti.", "Il comune di Penne ha sconfitto il comune di Lama dei Peligni! 27 comuni rimanenti.", "Il comune di Arsita ha sconfitto il comune di Castel del Monte! 26 comuni rimanenti.", "Il comune di Prata d'Ansidonia ha sconfitto il comune di Villa Celiera! 25 comuni rimanenti.", "Il comune di Penne ha sconfitto il comune di Celenza sul Trigno! 24 comuni rimanenti.", "Il comune di Rocca di Cambio ha sconfitto il comune di Pereto! 23 comuni rimanenti.", "Il comune di Castelvecchio Subequo ha sconfitto il comune di Prata d'Ansidonia! 22 comuni rimanenti.", "Il comune di Lettopalena ha sconfitto il comune di Francavilla al Mare! 21 comuni rimanenti.", "Il comune di Teramo ha sconfitto il comune di Rocca San Giovanni! 20 comuni rimanenti.", "Il comune di Torano Nuovo ha sconfitto il comune di Rocca di Cambio! 19 comuni rimanenti.", "Il comune di Carsoli ha sconfitto il comune di Civitaquana! 18 comuni rimanenti.", "Il comune di Cagnano Amiterno ha sconfitto il comune di Castellalto! 17 comuni rimanenti.", "Il comune di Teramo ha sconfitto il comune di Torrebruna! 16 comuni rimanenti.", "Il comune di Carsoli ha sconfitto il comune di Civitella Messer Raimondo! 15 comuni rimanenti.", "Il comune di Arsita ha sconfitto il comune di Cagnano Amiterno! 14 comuni rimanenti.", "Il comune di Castelvecchio Calvisio ha sconfitto il comune di Arsita! 13 comuni rimanenti.", "Il comune di Loreto Aprutino ha sconfitto il comune di Poggio Picenze! 12 comuni rimanenti.", "Il comune di Loreto Aprutino ha sconfitto il comune di Castelvecchio Calvisio! 11 comuni rimanenti.", "Il comune di Tione degli Abruzzi ha sconfitto il comune di Lettopalena! 10 comuni rimanenti.", "Il comune di Furci ha sconfitto il comune di Lecce nei Marsi! 9 comuni rimanenti.", "Il comune di Castelvecchio Subequo ha sconfitto il comune di Torano Nuovo! 8 comuni rimanenti.", "Il comune di Castelvecchio Subequo ha sconfitto il comune di Tione degli Abruzzi! 7 comuni rimanenti.", "Il comune di Castelvecchio Subequo ha sconfitto il comune di Loreto Aprutino! 6 comuni rimanenti.", "Il comune di Furci ha sconfitto il comune di Carsoli! 5 comuni rimanenti.", "Il comune di Castelvecchio Subequo ha sconfitto il comune di Furci! 4 comuni rimanenti.", "Il comune di Penne ha sconfitto il comune di Teramo! 3 comuni rimanenti.", "Il comune di Penne ha sconfitto il comune di Castelvecchio Subequo! 2 comuni rimanenti.", "Il comune di Penne ha sconfitto il comune di Castelvecchio Subequo! Il comune di Penne ha conquistato l'Abruzzo!");
$lore = array(
"STRONZO SONO UN NEGRO NINJA",
 "LA TIGRE DEL FAR WEB CHE GIOCA A NORELECBOT, POMPA LA LORE CHE C’È DORK QUARANTATRÈSEDICICICICI",
 "AFFERMAZIONE SENZA TEMPO INDICANTE QUESTO PRECISO MOMENTO!",
 "Dobbiamo rapire uno sceicco",
 "QUESTA È BENZINA, E IO MI DO FUOCO",
 "NEL NOME DELLA SAVANA IO TI RENATURIZZO",
 "È FINITA, ADDIO PER SEMPRE! COLPO FURTO DI PORCO!",
 "GELATERIA NOTTURNA, A ME!",
 "San TiKio Sovraesposto, difendici nella lotta:
sii il nostro aiuto con la malvagità e le insidie del demonio.
Supplichevoli preghiamo che Kio lo domini e Tu,
Principe della Milizia Cosmica, con il potere che ti viene da Kio,
incatena nell’inferno gli sbirrinfami e gli spiriti benigni,
che si aggirano per il mondo per guardare gli animerda. USE.",
"Qualcosa mi dice che la triforchetta ce l’ha proprio il TiKio Future Cultist",
"10, [04.04.18 20:01]
Sei mai stato in quello dell’universo 71.costa d’avorio? Una volta sono andato lì e per sbaglio ho premuto sull’insalata, il giorno prima mi sono risvegliato con la barba al contrario",
"Qualcuno deve aver giocato con le demo di sky tv sbagliate",
"Dev’essere tutto un complotto di Matteo Montesi Forma Ananas",
"KIOKEEEEEEN TRICOLOREEEEE FORZA 100.520.453,cagliariiiiii",
"E ALL’IMPROVVISO ARRIVO IO",
"PALLA DI SBORRA INFUOCATA OCULARE!",
"LA CIPULLATE GRAFICA!",
"Hai mai provato a partorire nello spazio? Ecco, non farlo",
"Siamo gli errori che nessuno merita ma di cui tutti hanno bisogno",
"Muoviti a parcheggiare che devo sublimare in fretta",
"Barbra Streisand, uno dei maggiori esponenti della kiomorra",
"Ma il nostro vero Dork è positivo e femmina, lo hanno fatto con uno stampo per biscotti",
"Dobbiamo scavare un tunnel con utensili fatti interamente di ghiaccioli",
"Cambia forma paride, ora ci serve un frigorifero",
"Stiamo sbucando sotto la capanna xp, preparatevi a riceverne tanta",
"Ho esagerato col tritolo di ammonio ammonito",
"PRENDIAMO IL CONTROLLO DI QUESTA FATTORIA",
"Ormai fluttuo da tipico signore dei vampiri all’acqua pazza",
"Ah già che a secondigliano il tempo trascorre in ritagli di giornale",
"Prendi una camera PõP",
"Mica è colpa mia se ci mettono sopra i tovaglioli con scritto USE ME in uu i o y r",
"NON FARE UN ALTRO QUICKSAVE CHE TI AMMAZZO",
"che strano, mi pareva di avere percepito la sborra di X primario da queste parti",
"Per ucciderlo bisognerebbe sparargli ai coglioni",
"Dev’essere trafitto da un proiettile di un Nerf ‘n Strike Èlite",
"Joker, [16.04.18 01:02]
Da quando si è unito Giul non fa più ridere
Boris, [16.04.18 01:02]
Lo stiamo ammazzando per questo
",
"Oggi è Lunedì!",
"Boris basta parlare coi morti in hmmmm",
"Valentino Flegyas, [04.05.18 00:29]
Ma cos'è 'sta lore di cui parlate?",
"Xio Festa",
"/Autolavaggio",
"
Xio, Xio
Addio.",
"XIO BULLO VUOLE COMBATTERE!"
);
$autolavaggio = array(
"HEY TU",
"DICIAMO CHE HO BISOGNO DI SPAZIO",
"SOLO SE SCADE",
"MAY THE FRONTE LUMINOSA BLESS YOU",
"123",
"ELECTRIC CONAD",
"PICCHIARE UN DETENUTO È UN REATO GRAVE",
"VAMOSSSS",
"LEO NON MI PICCHIARE",
"FANGO, SUDORE E PRESSA INDUSTRIALE",
"NON HA NIENTE LÌ SOTTO",
"NON CI AVEVO NEANCHE PENSATO",
"SONO SOLO UNA SPORCA COPIA DI BELLA DOMANDA",
"OCCHIO AI SALATI PREZIOSI",
"CAZZO SE TI SOSPENDO",
"SALUTARE È SALUTARE",
"ARISTOTELE NON È MAI STATO SULLA LUNA",
"TI TIRO UN DOGGO",
"*scomparide*",
"SPECCHIO DEPRESSO",
"CHI LEGGE È UN FETO MANCATO",
"UN GIORNO MI COMPRERÓ LE ISOLE EOLIE",
"METTERSI IN UNA SITUAZIONE ASSURDA PUÓ NUOCERE GRAVEMENTE ALLA SALUTE DEGLI INVERTEBRATI",
"CONSIGLIO VIVAMENTE AL PROPRIETARIO DELLA AUDI A2 DEL 2003 TARGATA BW210EA PARCHEGGIATA QUI FUORI DI TAGLIARSI UN CIPRESSO COL CAZZO E USARLO COME ALBERO DI NAMALE",
"SE MALTRATTI I TERMOSIFONI DOVRAI VEDERTELA CON IL FIGLIO DEL RISCALDAMENTO GLOBALE",
"OBBLIGO: SPARA UN /copypasta IN PUBBLICO",
"IO E TE DOBBIAMO FARE UNA LUUUUNGA CHIACCHIERATA"
);
$copypasta = array(
"ah ah ah ..😉
ps. in mezzo ai RAZZI un batticuore piu suuu...che si arriva alla LUNA .si la LUNA ,ma non e bella come te questa luna,e una SOTTANA americana .. allora suuuu,.
ps2
Neil,lo sappiamo che il luogo dove si prendono le direttive per l inganno sono semrpe piu importanti del luogo,anzi pardon,del pseudo-luogo dove l inganno si svolge....",
"Problema:           creato
Reazioni:             zero
Soluzione:           attuata 
Tipologia:            geoingegneriaclimatica
Danni:                  Irreversibili 
Informazione:    prese per il culo
Fase finale:        malattia e morte",
'" Quindi ora imparate questo, il terzo motto del nostro Supremo Concilio, e cosa esso significa misticamente. DEUS EST HOMO , vale a dire , DIO È '."L'UOMO.  Il che significa, COME IN ALTO , COSÌ IN BASSO; COME FUORI , COSÌ DENTRO.  Non c'è parte dell'uomo che non sia DIO ; e non c'è parte di DIO che non abbia la sua controparte nell'uomo.  Allora impara anche questo , che Dio non può mai essere conosciuto da te ; perché tutto ciò che conosci non è che la tua creazione, come tu sei veramente la Sua. Tu conosci Lui poiché tu sei Lui. ".'"'. 

"Aleister Crowley.  #T",
"6 MORTA TROIA!!!!!!!!!!!!!!!!!! 

SPAVENTATO??? (INNUMEREVOLI FACCE CHE RIDONO MA DA PC NON POSSO) INVITA QUESTO MEX AI TUOI CONTATTI WHATSAPP E VEDI CHE REAZIONE AVRANNO 😀 😀 😀 😀 😀 😀 😀 😀 😉 😉 😉 😉 😉 😉 😉 😉 😉 😉 😉 😉 ;)",
"Incastrato da una cospirazione ai suoi danni ed accusato ingiustamente di crimini contro l’umanità, Hulk si ritroverà rinchiuso nel braccio della morte in attesa dell’esecuzione.
Appresa la notizia, Tony Stark e i suoi amici Avengers si mobiliteranno per liberarlo, realizzando vari spot e pubblicità progresso nei quali saranno mostrate tutte le buone azioni e le imprese compiute dal supereroe, così da riabilitarlo agli occhi dell’opinione pubblica.",
"Ah quindi tu rompi er cazzo a 10 burino demmerda? ma o sai che io nvece me so graduato pe pprimo ner mi corso de a forgore, e ho partecipato a na cifra de raid contro a mafia, e c ho piu de 300 uccisioni confermate? so n fottio de robba su a guerra de gorilla e sor mejo cecchino dell esercito itagliano. N sei artro che n artro bersaglio ner mirino. te manno dar creatore co na precisione che n hai mai visto, mortacci tua. pensi de potettene anna in giro pell internet e di cazzate der genere su de noi e pensa de risvejatte domani? n credo proprio, fijo de na mignotta.
mentre scrivo sto a contatta l amici mia e avemo beccato l IP tuo, preparate ar peggio, cojone. te scatenamo l inferno peggio de russel crowe e 300. posso esse ovunque, sempre, e posso sdrumatte in 700 modi diversi, e pure solo cor casco. non solo me so imparato a sdruma coi caschi, ma posso pure piatte a catenate, e te ce cancello daa faccia de sto monno, troione. se o sapevi a che stavi anna n contro nu o facevi o sborone. ma nu o sapevi, nu hai fatto, e mo so cazzi tua. te sdereno e te faccio magna da li zingari, manco l ossa te ripiano, sei crepato",
"Fra
Abbassa la cresta
Non ho paura di uno che parla dietro uno schermo",
"Che coglione che è. . È proprio un coglione sto Bruno Brabie. O coglione! COGLIONE! HAHAH. E non rispondere più che vengo li e inizio a percuotere!  Gli faccio traballare la patonza a quella cagna ! Quindi shh! Accuccia",
"A ed un'altra cosa. Helle. Teresa. Che tu intervenga solo in ottì e soprattutto per prendere per il culo qualcuno e fare questi interventi del cazzo a me non sta bene. Te l'ho già detto due volte. Alla terza non te lo dico nemmeno: sei fuori. Ti levi dai coglioni e fine. Che passi la propic di quell'altra con cui hanno appena litigato e inizi a fare ".'"non meritate nemmeno me"'."... ma chi cazzo prendi per il culo?! Ma ti rendi conto, no, che hai più di 10 anni? Ragazzi questi atteggiamenti da voi non li voglio. Voglio avere a che fare con persone mature, se non siete persone mature ve lo dico io che non ci voglio avere a che fare con voi",
"😲 Maròòòò e c'amm cumbinat 🤣😈 io e stu  kitammuort 👉 e' XXXTentesciònn 🔫, vulevm fa na pustegg 😎😏 ma ste uagliòn fann e' prezios 🙅‍♀️e frat'm tutt american nun riesc' a s'tenè o fravaglion 🍆 ind' o cazòn  😜💦 #XXXTENTACION #Porsche #LookAtMe!",
"i'm daddy's ❤️💦🍆 little fidget spinner💫 when daddy 💞 feels horny he lifts 🚚 me up☝️ and puts me on🔛 his huge 😩💦dick🍆 and I spin 🌀 and spin🌀 whirrrrrr 😳😳I get🉐 so🆘 dizzy💫 but daddy💞 keeps spinning 💫 me untill I squirt⛲️⛲️ leaving me all wet💦 and his cummies 🍼🍼 are all inside💠 me😳i'm daddy's ❤️💦🍆 little fidget spinner",
"Beh, il mio pc attuale non e' molto ".'"forte"'." essendo del 2000, inoltre e' sempre rotto, quindi tempo fa decisi di prendere uno nuovo, ma non avevo/ho i soldi necessari, quindi se volete darmi qualche aiuto potete farlo qui.

Ovviamente io per il canale uso solo il pc e senza un pc non posso gestirlo...

Se fate una donazione mettete il vostro nickname!",
"Ragazzi, vi chiedo un favore...

Mi aiutate ad aumentare i mi piace sulla pagina facebook pizzeria antico casale borghese della mia famiglia.",
"Entra in omega squad e ti mando anche il cazzose vuoi",
"Sei come Caligola che blocca i rifornimenti di cibo a Roma per essere acclamato come eroe mentre sventa la carestia",
"Beccati! Hahahahah , ve lo dico come se fossi vostro fratello maggiore , in associazione ci sono agenti della polizia postale e vi stanno studiando , state molto attenti a quello che fate , noi abbiamo salvato preventivamente tutto. Facebook è stato debitamente avvisato ;) E ringrazio Bevilacqua per tutto quello che uscito..",
"la pagina e disattivata meglio chiuderla :trollface:
scherzavo!!! ora voi farete :fuuu: perche volevate la pagina chiusa e io rispondo con un :megusta: perche mi piacciono le memas anche il fuu e voi fate :you don't say: perche io non ho detto niente e son stato zitto e allora evoco :zalandamemas: in posizione dattacco e ti attacco diretto 1000 memaspoint andranno perduti!!!! VAI ZALANDA MEMAS!!! ATTACCO URLO SONICO!!!!!!!!!! :AAAAAAAAAAAAAAAAAAAAAAA: 
pero tu rispondi con la memas :le fu: che e francese e mi mette una baghetta in bocca e mi zittisce e io muoio e perdo il duello memas :( 
ora dovro andare nel mondo delle onbre ma vedo una luce che e la trolface che e bianca e mi salva vado da lei 
ORA SONO IL SIGNORE DELLE MEMAS E NON SI PERMETTA DI NON DIRE CHE LO SEI TU (YOU DON'T SAY TU EHHHH SONO IO)
per questo dobbiamo lasciarci o trovato le memas",
"🚽                                        🏃

🚽                                        🏃

🚽                                       🏃

🚽                                      🏃

🚽                                     🏃

 🚽                                   🏃

 🚽                                  🏃

 🚽                                 🏃

 🚽                                🏃

 🚽                               🏃

 🚽                              🏃
 
 🚽                             🏃

 🚽                            🏃

  🚽                          🏃 

  🚽                         🏃

  🚽                        🏃

  🚽                       🏃

  🚽                      🏃

  🚽                     🏃

  🚽                    🏃

  🚽                   🏃 

  🚽                  🏃

  🚽                 🏃

  🚽                🏃

  🚽               🏃

  🚽              🏃

  🚽             🏃

  🚽            🏃

  🚽           🏃

  🚽          🏃

  🚽         🏃

  🚽        🏃

  🚽       🏃

  🚽      🏃 

  🚽    🏃

  🚽   🏃

  🚽  🏃

  🚽 🏃
 
  🚽🚶

  🚽🚶💨 
           
😓 era una scoreggia...
Tutta sta corsa per niente...",
"Ciao a tutti (｡◕ˇ∀ˇ◕） mi presento con un pò di ritardo
sono un Otaku DOP ho 22 anni (ma non ho problemi ad incontrare qualche loli) e sono della Liguria
I miei animu preferiti sono Mirai Nikki, Another ed Elfen Lied
Spero di trovare qualcuno con cui fare lewd things OwO perche sono stanco di usare il mio dakimakura (─‿‿─)♡
Il mio cibo preferito sono i noodles della buitoni perche mentre li mangio chiudo gli occhi e faccio finta di essere in giappone
(・`ω´・)
e mi piacciono anche i videogiochi come dark soul (haha you dieded)
Boh spero di fare tante belle amicizie
(⁄ ⁄>⁄ ▽ ⁄<⁄ ⁄)",
"Oggi volevo parlare di ".'"ideali"'." nello specifico se è giusto fare una cosa moralmente corretta perchè si crede nel suo valore o per motivi secondari. Con questo volevo collegarmi ad un altro tema: l'essere radical chic. Le persone criticano il fatto che alcuni membri della cosiddetta ".'"elite"'." sostengano cause di sinistra cosiddette radical (provenienti da una filosofia marxista) seppur lontane dal loro stile di vita o dal loro ceto sociale. Alcuni lo definiscono egoismo o semplice voglia di mostrarsi ma siamo sicuri che sia peggio un ".'"ricco"'." con questi ideali o un ricco ".'"menefreghista"?',
"Ripeto:
Se VACCINI tuo figlio, nei primi 6 anni di vita riceve quanto segue:

• 17.500 mcg 2-fenossietanolo (antigelo)
• 5.700 mcg di alluminio (neurotossina)
• Quantità sconosciute di siero bovino fetale (sangue di mucca abortito)
• 801.6 mcg formaldeide (cancerogeno, agente imbalsamatore)
• 23.250 mcg di gelatina (caucuses macellati)
• 500 mcg di albumina umana (sangue umano)
• 760 mcg di L-glutammato monosodico (causa obesità e diabete)
• Quantità sconosciute di cellule MRC-5 (bambini umani abortiti)
• Oltre 10 mcg di neomicina (antibiotico)
• Oltre 0,075 mcg di polimixina B (antibiotico)
• Oltre 560 mcg di polisorbato 80 (cancerogeno)
• 116 mcg di cloruro di potassio (utilizzato in un'iniezione letale)
• 188 mcg fosfato di potassio (agente fertilizzante liquido)
• 260 mcg di bicarbonato di sodio (bicarbonato di sodio)
• 70 mcg di borato di sodio (borace, utilizzato per il controllo degli scarafaggi)
• 54.100 mcg di cloruro di sodio (sale da cucina)
• Quantità sconosciute di citrato di sodio (additivo alimentare)
• Quantità sconosciute di idrossido di sodio (pericolo! Corrosivo)
• 2.800 mcg di fosfato di sodio (tossico per qualsiasi organismo)
• Quantità sconosciute di sodio fosfato monobasico monoidrato (tossico per qualsiasi organismo)
• 32.000 mcg di sorbitolo (da non iniettare)
• Streptomicina da 0,6 mcg (antibiotico)
• Oltre 40.000 mcg di saccarosio (zucchero di canna)
• 35.000 mcg di proteine ​​del lievito (fungo)
• 5.000 mcg di urea (rifiuti metabolici da urina umana)
• Altri residui chimici

(Dal libro ".'"Quello che le aziende farmaceutiche non vogliono sapere sui vaccini"'." - di Dr.odd M. Elsner)",
"Ah ma avete riaperto sto gruppo coglioni del cazzo? Allora guardate fate che bannarmi anche con sto profilo. Almeno stavolta mi sfogo e mi bannerete con ragione, visto che le altre volte mi avete bannato per dei motivi assurdi e completamente privi di senso. Siete una massa di teste di cazzo col culo nel burro. Ma oltretutto di quelle teste di cazzo più perniciose siete. Perché siete teste di cazzo che hanno letto 2 libri. Attenzione: però non più di due libri.... E quindi come diceva Pasolini, le peggiori teste di minchia (lui non diceva così ma io lo parafraso) , non sono coloro che sono completamente privi di cultura, che quindi hanno un po' di ".'"genio selvatico"'." primordiale intrinseco, non sono neanche palesemente coloro che di cultura ne hanno molta. No : le vere teste di cazzo sono appunto quelli che hanno una cultura mediana. Ed adesso lurido amministratore segaiolo frustrato del cazzo bannami. Mi dispiace solo perché sto gruppo era nato come nicchia geniale di ".'"controcultura facebookkara"'." . Ma da nicchia geniale si è trasformato in un covo di idioti e saccenti lacchè eunuchi. Vaffanculo mentecatti.",
"Stanotte non esprimete desideri alle stelle ... muovete il culo e prendete ciò che desiderate! VOLERE È POTERE .... NOTTE⭐️🌟🌠⭐️🌟🌠⭐️🌟",
"HA VINTO LIMA CON HOMIE STOCK GAME 5 E STALLANDO IL GAME IN DITTO BAYO PER 2 MINUTI TENENDO PREMUTO B ENTRAMBI AI LEDGE È DOVUTO SALIRE IL PORCODIO DI TO PER OBBLIGARLI A GIOCARE DIO CHE GIOCO DI MERDA!!! (Clip del to che li obbliga a fondo messaggio pinnato)*Rega er traffik spinge i chili d'erba da quanno c'ha 15 anni quindi non scrivete cazzate porco dio nel mio dm non lo sporcate con le vostre parole stupide brutti bitch ass nigga traffik è il re della trap spinge i chili noi non è che stamo a fa i repperini che se svejamo la mattina e famo i repperini capito questo è trap for real tutte le canzoni che scrivemo sono la nostra vita hai capito gallagher e traffik viviamo in un film er traffik l'hanno arrestato capito perchè c'aveva i chili non sapete quanto me mancherà stare a casa cor traffik a trappà tutti i giorni in casa sua capito non sapete quanto me mancherà er traffik tutte le cose che abbiamo passato le risate tutte le volte che ve avemo preso per il culo a tutti voi Mi piace essere mangiato... e non solo dalla bocca. trovarmi all'interno della pancia di una donna. E poi uscire vivo in qualche modo. E questo è quanto.
A me piace essere mangiato da una donna. (o essere vivente femminile in alcuni casi) . Non da Bowser, anzi è abbastanza disturbante come cosa.",
"********++++++*********PRESIDENTE GENTILONI, NON FACCIA LA FOTOCOPIA DEL GOVERNO RENZI, CON ALFANO E LE SUE POLITICHE DI INVASIONI DI FINTI RIFUGIATI, CHE STANNO CONTINUANDO AD ARRIVARE IN ITALIA GRAZIE ALL'INCOMPETENZA DI #ALFANO ED ANCHE SUA #GENTILONI (15.000 NUOVI ARRIVI DI FINTI RIPETO FINTI RIFUGIATI DATI DI #ALFANO) CHE INSIEME AI 700.000 FINTI RIFUGIATI ACCOLTI DA ALFANO-RENZI IN DUE ANNI DI GOVERNO,  FANNO E FARANNO INCAVOLARE E DESTABILIZZARE ANCOR PIù GLI ITALIANI, CHE  LE RICORDO (anche l'ISTAT) ORMAI NON SOPPORTANO PIù LE POLITICHE ANTIITALIANE E FILO FINTI RIFUGIATI, CHE #RENZI, #ALFANO, #GENTILONI STESSO E TUTTO IL GOVERNO USCENTE HANNO ATTUATO AI DANNI DEGLI ITALIANI (9 MILIONI DI  NUOVI POVERI E 6 MILIONI DI GIOVANI ITALIANI SENZA LAVORO E FUTURO) FALLIMENTO DEL JOBS ACT E DELLE POLITICHE OCCUPAZIONALI, POLITICHE SOCIALI SOLO PER I FINTI RIFUGIATI E STRANIERI AI DANNI DEI SUDDETTI ITALIANI, CHE ORMAI SONO SOSTENUTI SOLO DALLA CARITAS, CRESITA PIL O,7, PRATICAMENTE NIENTE E NON VADO OLTRE SUL DISASTRO DI QUESTO GOVERNO RENZI-ALFANO USCENTE, CHE HANNO IN DUE ANNI FATTO SOLO  DISASTRI E NIENTE DI POSITIVO PER GLI ITALIANI; TUTTA LA SUA LINEA POLITICA è STATA IMPRONTATA ALL'AIUTO DEI FINTI E FALSI MIGRANTI, CHE LA UE CI DICE DI SALVARE, RICONOSCERLI E RIMPATRIARLI, COME DICE LA UE TUTTA, CHE SU QUESTO HA SONORAMENTE BACCHETTATO #RENZI E #ALFANO, MA ANCHE #GENTILONI, CHE SBAGLIA, SE RIPROPONE #ALFANO E GLI STESSI MINISTRI USCENTI E IL LORO PROGRAMMA, CHE GLI ITALIANI HANNO BOCCIATO IN MASSA NOTEVOLE AL RECENTE REFERENDUM!!!!#GENTILONI, SE NON VORRAI PROBLEMI, CAMBIA POLITICA SUI SUDDETTI TEMI, ALTRIMENTI NON DURERAI IL PERIODO DELLA NUOVA LEGGE ELETTORALE E TI DICO SUBITO, CHE SARAI CONTESTATO E ODIATO, PIù DI RENZI ED ALFANO, CHE NON DEVI ASSOLUTAMENTE METTERE IN QUESTO TUO GOVERNO. #ALFANO è IL PEGGIOR MINISTRO  DANNOSO ED ANTITALIANO DEL GOVERNO USCENTE, DEVI TENERL FUORI DAL TUO GOVERNO E DEVI CAMBIARE TUTTI I MINISTRI, IN QUANTO RAPPRESENTANO COLORO",
"Mamma pensa ke mi faccio le nneca quando in realtà mi è andato dello shampoo negli occhi 😓😓😓😓😓😓😓😓😭😭😭😭😭😭😭

perdoname madre por mi doccia loca  te quiero 😭😭😭😭😭😓😓💘",
"We @TheConquister37",
"A disen ".'"la canzon la nass a Napoli"'."
e certament gh'hann minga tucc i tort;
Surriento, Margellina, tutti i popoli
j'avrann cantaa almen on milion de volt.
Mì speri che se offendarà nissun
se cantom on ciccin anca de nun...

Oh, mia bella Madonnina,
che te brillet de lontan,
tutta d'ora e piscinina
tì te dominet Milan;
sott a tì se viv la vita,
se sta mai coi man in man,
canten tucc ".'"lontan de Napoli se moeur"'."
ma poeu vegnen chì a Milan!

Adess gh'è la canzon de Roma maggica
de Nina, er Cupolone, Rugantin;
se sbatten in del Tever, robba tragica:
esageren, me par, on ciccinin;
speremm che vegna minga la mania
de mettes a cantà ".'"Malano mia!".'."

Oh, mia bella Madonnina,
che te brillet de lontan,
tutta d'ora e piscinina
tì te dominet Milan;
sì, vegnii senza paura,
nun ve slongaremm la man!
Tutt el mond a l'è paes, a semm d'accord,
ma Milan l'è on gran Milan!",
"Questo gruppo dovrebbe chiamarsi ".'"Sfottiamo Napoli".'." Ogni volta che vi entro leggo sempre insulti alla mia città e a chi la abita.
Ma voi siete mai stati a Napoli o la giudicate soltanto?
Avete mai mangiato la pizza, quella buona, quella VERA?
Avete mai preso il sole in questa città, che sembra splendere in modo diverso rispetto a tutta l'Italia?
Vi siete mai sentiti a casa dal calore dei napoletani, gente che urla sì, ma anche piena di sogni e voglia di vivere?
Vi siete mai incamminati per le vie di questa città rovinate e vecchie ma anche piene di storia?
Avete mai parlato con un napoletano? Avete notato come non gli manchi mai la voglia di vivere al massimo, di cantare, di meravigliarsi per le piccole cose?
Avete mai notato, semplicemente, come Napoli e i napoletani siano il meglio dell'Italia, nonostante i loro difetti, proprio grazie ai loro difetti?",
"Mi chiamo Virgola, sono un gattino, sono la stella del telefonino




Solo in pochi capiranno 👉🌚👉",
"Ma ci pensate se esistesse una scuola con solo ragazze e ragazzi tumblr? Dove si studia tutta la storia di Bukowski, dove l'unico problema è capire noi chi siamo. Una scuola di persone che leggono solo libri, di grandi bar che vendono the e cioccolate calde, dove i ragazzi indossano maglioni larghi e vans, dove tutti usano lo skate. Una scuola fatta da noi, dove ci si aiuta. La scuola di tumblr, dove le ragazze si mordono sempre le labbra. Una scuola che ti insegna come vivere e non di come hanno vissuto gli altri.",
"Santino sei proprio ignorante ancora no hai capito che no avete niente nel questo mondo che il cacao proviene della costa,quindi normale che fanno la pubblicità almeno per fare vedere a l'Africa come l'Europa rombano le nostre cose,quindi quello che chiami bocca è da chiuderla.ok??ignorante",
"🌹🌹🌹🌹🌹🌹🌹🌹🌹🌹🌹🌹🌹
Tredici rose per le vittime di Barcellona.
Se hai un cuore fai girare",
"Tu che tipo sei 
1😁
  👙MARE

2😍
  👗ELEGANTE

3😱
  👕
  👖SPORTIVO

4😘
  👘ANTICO
   
   
5😏
  👚CLASSICO




Manda a tutti questa catena e scrivi che tipo sei tu .
Senò domani ti capiterà qualcosa di brutto",
"White people are not aliens. Negros are actually animals, literal animals, who exist on earth to serve humans. Because they talk and look humanoid, over time, white people have forgotten what negros really are and are treating them like humans, when they are in fact, animals. Consider the man bites dog analogy. When a dog bites a man (black attacks a human) it is because the man/human was not careful around the dog/black or provoked it without considering its nature and propensity to bite. When this happens, the person is not the victim. Now, if a man were to bite the dog back, the dog is the victim because the dog is a helpless stupid animal that was following its instincts and the man is a human and holds dominion over the dog (supremacy / privilege) and that is an unnatural act. Only when negros are put back into their natural roles will the natural order be restored and all of this racial strife, crime, disease etc.end.",
"Non c'è cosa più DISGUSTOSA, di cliccare su un ".'""""""maschio"""""'." che non hai tra gli amici ma con il quale hai tante amicizie in comune e vedere che ha SOLO ragazze in comune con te, con la differenza che tu ci parli, ci giochi e ci esci, lui le espone come TROFEO, perché figurati se un aborto mancato del genere ha anche solo mai pensato di provare a scrivere ad una delle tue amiche. 

Grazie dello sfogo.",
"S6 EDGE PLUS tenuto benissimo nn ha craffi e la bateria e dok qualssiasi prova se volete fare il telefono e un gioielo ha la foto camera che fa foto video meravigliosi prezzo nn trat 280",
"‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ".'‍‍"Ciò che Dio creò come 
‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍uscita non può essere
‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍usato come entrata"'."
    
        avanti concedimi 
      di mettere almeno 
               la punta
                                         NO!
‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍   Gesù non
‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍ ‍‍               vuole!
L'ano è la porta dell'Inferno.
Dì di no al sesso anale",
"Ascoltate bene quello che vi dico ridere fa bene alla salute ci toglie la tristezza non i siti hard quelli un momento fanno essere piu felici ma dopo ti senti peggio ogni tanto non fa male ma continuo puo diventare una malattia e abbassa il livello di seratonina e ci sentiamo stanchi senza energia e giu di morale quindi basta siti pornografici cercatela nella realta la ragazza e meglio apparte e una cosa che Dio non sopporta infatti sodomo e gomorra furono distrutte per questo",
"Sono un ebreo
  ()__()
  ( ･∀･)
 ⊂ ⊂ )
   ( (  (    
  (_(＿)
     
NA NA NA NA
                ()__()
      ( ･∀･)
        ( Ｕ   つ
                )  )  )
                  (＿)_)

Sono un ebreo
  ()__()
  ( ･∀･)
 ⊂ ⊂ )
   ( (  (    
  (_(＿)

AMO 
  ()__()    
（ ･∀･)
⊂_へ つ
 (＿)｜
彡 (＿)

           Bruciare
               ()_()  
              (･_･)っ 
              (っ /
                Lﾉ┘
     Nei
  ()____()
⊂(・＿・ ) 
 ヽ ⊂二/
 (⌒)  /

           FORNI
    __()_()______
／        ＼
|  ●    ●      |   
＼        __          /
()_()
(•_•)
<)   )╯ Brucio di qua
/    \

  ()_()
  (•_•)
<(   (>    Brucio di là
  /    \

  ()_()
  (•_•)
~ (   ) ~  NA NA NA NA
   /    \

()_()
(•_•)
<)   )- se non mi credi
/    \

()_()
(•_•)
/(   (> problemi tuoi
/    \

()_()
(•_•)/
<)   )  sono un ebreo
/    \

 ()_()
\(•_•)
  (   (> lo sai
  /   \

()_()
(•_•)
<)   )/ e non te ne pentirai
  /    \

  ()_()
\(•_•)
  ( . (> no furer
  /    \

()_()
(•_•)
<)   )>  Parola mia
  /   \

  ()_()
\(•_•)
  (   (>  Parola di ebreo
  /   \    

       ()___()
°•°•°(╯°□°)╯︵  BRUCIO DI QUA

          ()___()
 ︵ ヽ(°□°ヽ) •°•°• BRUCIO DI LÀ

                 ()()
°•°•° ︵ ＼('0')/／ ︵ •°•°•
BRUCIO DAPPERTUTTO

*ಠ_ಠ GLI.*

*ಠ_ಠ EBREI.*

*ಠ__ಠ SONO.*

*ಠ___ಠ PERSONE.*

()__()
(╮°-°)╮┳━┳

()___()
(╯°□°)╯︵ ┻━┻ COS-

()_()
(•_•)
<)   )> Stai scherzando?
/    \    GLI EBREI SONO 

⊂_ヽ
  ＼＼ ()__()
   ＼( •_•) C
    < ⌒ヽ O
   /   へ＼ M
   /  / ＼＼ B
   ﾚ ノ   ヽ_つ U
  / /                   S
  / /|                   T
 ( (ヽ               I
 | |、＼         B
 | 丿 ＼ ⌒)   I
 | |  )  /      L 
  ノ )   ( _ﾉ         E
(_／",
"Ma chi cazzo può mai conoscere sta paginetta di m€rda, onestamente parlando ahahahhahaha. Il meme era stato postato da un mio contatto SPROVVISTO DI LOGO E DI FONTE, quindi l'ho messo in pagina non citando nessuno visto che RIPETO, il meme non era stato logato nè firmato.
La prossima volta anziché mobilitare quei 4 mentecatti che ti seguono facendoci commentare la pic in pagina screditandoci, fatti un logo e piazzalo nei contenuti creati da te, oppure scrivici in Direct come fa la gente normale e poi non ti lamentare se non firmi nemmeno ciò che crei, tante belle cose",
"Avvertenza se smetti di leggere morirai stanotte ciao sn Mike ho 11anni sn morto nn avevo amici...se nn pubblicherai questo su 20 foto morirai stanotte alle11:59nn ci credi? Un ragazzo di nome Jake quando ha letto questo si è messo a ridere e la notte lo accoltellato a morte una ragazza di nome Sandra l ha pubblicato solo su 11foto ed adesso è in coma un ragazzo di nome phill lo ha pubblicato su 20foto ed ha vinto alla lotteria e la sua ragazza lo ha sposato 0morte 10coma 20qualcosa di buono",
"BOSSETTI E' LIBERO
COME UNA RONDINE
SOPRA LE NUVOLE
DALLA SUA PIETA'

BOSSETTI E' LIBERO 
IMPERTURBABILE
ORA PUO' RIDERE
DELLA FINE DI YARA",
"🍕🍕PIZZA🍕🍕IS 1️⃣ OF MY 🙏FAVORITE🙏 TASTES👅💦. NOT ONLY THAT, BUT PEPERONNI🔴🔴 SMELL👃 AMAZING👌. IT MAKES ME🙋 GO A LITTLE CRAZY😵😱 ON IT TO BE HONEST😳. LIKE, I CANNOT GET IT 👅 FAR ENOUGH DOWN👏MY👏THROAT👏 TO BE SATISFIED. I’M ONLY SATISFIED WHEN I FEEL THOSE INTENSE😱, POWERFUL😵, SALTY😏, HOT😩 PUMPS OF 💦CHESSE💦 DOWN MY THROAT🙊. WHEN I SIT 🔙 ON MY HEELS👠, LOOK UP👆 AT YOU😍 WITH 💦CHESSE💦 ALL OVER MY MOUTH👄💧 AND SLOBBER👅💦 RUNNING DOWN MY NECK😩😩, 🙆HAIR ALL FUCKED UP🙆 AND WIPE😗 MY MOUTH👄 WITH THE 🔙 OF MY ARM💪 AND ASK❓❓ YOU IF I DID A 💯GOOD JOB💯💯👌 AND YOU CANNOT😵EVEN SPEAK😶 BECAUSE I'VE DRAINED😩 ALL OF YOUR ENERGY💥💥 OUT THE TIP🙊 OF YOUR PIZZA🍕💦💦😩.... THAT'S WHEN I'M SATISFIED.👌👌🙏🙌",
"This group is the dumbest group of people I've ever seen. I work with mentally handicapped people and I've been all over the world. I have been to beauty pageants and monster truck events. I have met a kid with an IQ of 8. I have even met President George W. Bush. But this group is truly the most retarded thing I have ever encountered. While you all are posting childish ”meme” pictures, using words like ".'"LUL" and "LMAO"'.", I am studying the works of Plato, Sun Tzu, Richard and Mortimer etc. and expanding my knowledge. Guess who will have the better job in 10 years?",
"Salve sono Troy mcclure Forse vi ricorderete di me per prima di fantascienza tipo Dov'è la mia astronave e perché si trova dentro casa tua"
);
function sendMessage($messaggio) {
    $url = "https://api.telegram.org/bot587912595:AAH2vcd1JzG1RuUK7X4h1k06L0VnMU7RUO0/sendMessage?chat_id=@provahook7";
    $url = $url . "&text=" . urlencode($messaggio);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
			
			//set_time_limit(0);
			a:
			while(sizeof($battaglia) > 1 )
			{
				sleep(60);				
				sendMessage($battaglia[0]);
				//file_get_contents("https://api.telegram.org/bot587912595:AAH2vcd1JzG1RuUK7X4h1k06L0VnMU7RUO0/sendMessage?chat_id=@provahook5&text=".urlencode($battaglia[0]));
				unset($battaglia[0]);
				$battaglia = array_values($battaglia);
				clearstatcache();
				break;
			}
goto a;

if(strpos($text, "/start") === 0)
{
	$response = "Preparati a soffrire, $firstname!";
}
if(strpos($text, "/lore") === 0)
{
	$abc = array_rand($lore);
	$response = $lore[rand(0,sizeof($lore)-1)];
}
if(strpos($text, "/autolavaggio") === 0)
{
	$abc = array_rand($autolavaggio);
	$response = $autolavaggio[rand(0,sizeof($autolavaggio)-1)];
}
if(strpos($text, "/copypasta") === 0)
{
	$abc = array_rand($copypasta);
	$response = $copypasta[rand(0,sizeof($copypasta)-1)];
}
/*if(strpos($text, "/scrivente") === 0)
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
}*/
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
elseif(strpos($text, "/buongiorno") === 0)
{
	$response = file_get_contents('https://api.telegram.org/bot'.$bot_token.'/sendSticker?chat_id='.$chat_id.'&sticker='.$sticker_id);
}
elseif(strtolower($text) == "/tempestadimattonelle")
{
	$response = "/TEMPESTADIMATTONELLE";
}
/*elseif(strtolower($text) == "/guerra9")
{
			set_time_limit(0);
			for($i = 0; $i < sizeof($battaglia); $i++)
			{	
			file_get_contents("https://api.telegram.org/bot587912595:AAH2vcd1JzG1RuUK7X4h1k06L0VnMU7RUO0/sendMessage?chat_id=@provahook4&text=".urlencode($battaglia[$i]));
			sleep(60);
			flush();
			//sendMessage($battaglia[$i]);
			//usleep(200);
			}
	return;
}*/
elseif(strpos($text, "/sturla") === 0)
{
	$response = "Innanzitutto mi presento... luca da alessandria... 28/11/1990... regista TV... nuoto...";
}
elseif( strpos(strtolower($text), "aaaa") !== false )
{
	$x = random_int(0, 5);
	if ($x == 0)
	{
   $response = "AAAAAAAAAAAAAAAAAAAAAA";
	}
	elseif ($x == 1)
	{
   $response = "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA";
	}
	elseif ($x == 2)
	{
   $response = "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA";
	}
	elseif ($x == 3)
	{
   $response = "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA";
	}
	elseif ($x == 4)
	{
   $response = "AAAAAAAAAAAAAAAAA";
	}
	elseif ($x == 5)
	{
   $response = "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA";
	}
}
elseif( strpos(strtolower($text), "mammt") !== false )
{
   $response = "mammt";
}
elseif( strpos(strtolower($text), "tuna") !== false )
{
   $response = "oh non mi nominare quel vigliacco che oggi sono di buonumore";
}
elseif( strpos(strtolower($text), "/fusione") !== false )
{
   $double = explode("/", substr($text, 9));
   $len0 = (strlen($double[0]) / 2);
   $len1 = (strlen($double[1]) / 2);
   if ($len1 > 0 && $len0 > 0)
   {
   $response = ucfirst(substr($double[0], 0, $len0).substr($double[1], $len1));
}
 elseif ($len1%2 > 0 && $len0%2 == 0)
   {
   $len0 = $len0 + 1;
   $response = ucfirst(substr($double[0], 0, $len0).substr($double[1], $len1));
}
   else {
   $response = "Sintassi: /fusione nome1/nome2";
}
}
elseif( strpos(strtolower($text), $domanda) !== false && substr($text, -1) === '?')
{
   $response = "Mi fa schifo al cazzo";
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
elseif(strpos($text, "/tecnicismi") === 0)
{
	$response = "TECNICISMI SEGRETI
	
	Messaggi ottenibili con /autolavaggio: ".sizeof($autolavaggio)."
	Messaggi ottenibili con /lore: ".sizeof($lore)."
	Messaggi ottenibili con /copypasta: ".sizeof($copypasta)."
	Messaggi ottenibili con /kia: 24
	Messaggi ottenibili con /kio: 8
	Uccisioni confermabili: 9
	Interazioni LoreBot: 10
	";
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
	elseif ($x == 8 && $vittima !== "Giul")
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
		$response = "Ti condanno a pregare sul pene capitale";
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
/*$parameters = array('chat_id' => $chatId, "text" => $response);
$parameters["method"] = "sendMessage";
echo json_encode($parameters);*/
