<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = '9cb2bf030df5f3541fb89a2fc91855f3';
$access_token  = 'uv576+0eEdHpjEij7yScWHCDR97d5Gq9PjALN7ADEtQKt/oq2Xhto92KvwV5wgD3n17+g1fLcvgexO3U+vXH+UKmzd4moejn2cd8/AMC71QrKVi0ZvE5FOSDl6nZd/P+zlcQzjvrtUEpRYvEFSVjPAdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
