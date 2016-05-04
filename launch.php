<?php

set_time_limit(0);

require_once 'Elemental.php';

define('BOT_TOKEN', '224886858:AAHXceukVK93JMOQDCq61IBkbFCL9U60kGs');

$bot = new PollBot(BOT_TOKEN, 'PollBotChat');
$bot->runLongpoll();
