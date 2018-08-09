<?php



require "vendor/autoload.php";

$access_token = 'uv576+0eEdHpjEij7yScWHCDR97d5Gq9PjALN7ADEtQKt/oq2Xhto92KvwV5wgD3n17+g1fLcvgexO3U+vXH+UKmzd4moejn2cd8/AMC71QrKVi0ZvE5FOSDl6nZd/P+zlcQzjvrtUEpRYvEFSVjPAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '9cb2bf030df5f3541fb89a2fc91855f3';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







