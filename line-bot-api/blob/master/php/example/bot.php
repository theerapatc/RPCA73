<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = '5c0af97b3d636f650bbc93ae18ea1c2e';
$access_token  = 'yhntPnTSNbB6KJRu3b9RpcIkMzchaXvkbbiGnCXuGeIIe9ZzqYJoz3S4uaOAU6IsBEWFPuVHzxhOeOBIHWsZHT3Lv8RY5H1yw3aV45/RwuF55pFUOu/WGT0BZMAGRxC0RFqbg4VPsBRh5U/UQPLRzgdB04t89/1O/w1cDnyilFU=';

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
