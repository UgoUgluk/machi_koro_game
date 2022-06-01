<?php

require __DIR__ . '/vendor/autoload.php';

use UgoUgluk\MachiKoroGame\GameTable;
use Kint\Kint;

session_start();

//debug on/off
Kint::$enabled_mode = false;

ob_start();

d(microtime());

//unset($_SESSION['GameTable']); //new game

if (!isset($_SESSION['GameTable'])) {
    $GameTable = new GameTable(['Ваня', 'Катя', 'Миша'], 'plus');
    d('init');
} else {
    $GameTable = unserialize($_SESSION['GameTable']);
    d('session');
}


//check win
$GameTable->checkAttraction();

//roll dice
$roll = $GameTable->getRoll();
//check roll cards

//buy card


//change player

//repeat


//out
include __DIR__ . '/front/app.php';





//save state
$_SESSION['GameTable'] = serialize($GameTable);


!d($GameTable, $roll);
d(microtime());


$out = ob_get_contents();
ob_end_clean();

$json['result'] = $out;
$json['error'] = 'ok';

echo json_encode($json);