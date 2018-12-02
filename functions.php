<?php
function sm($chatID, $text)
{
  global $api;

  $args = [
    'chat_id' => $chatID,
    'text' => $text,
    'parse_mode' => 'HTML'
  ];

  return (new HttpRequest("post", "https://api.telegram.org/bot".$api."/sendmessage", $args))->getResponse();
}