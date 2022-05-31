<?php

require __DIR__ . '/vendor/autoload.php';

use UgoUgluk\MachiKoroGame\GameTable;
use UgoUgluk\MachiKoroGame\AllCardsPlus;
use Kint\Kint;

session_start();

//debug on/off
Kint::$enabled_mode = true;
d(microtime());

$arCards = new AllCardsPlus();
d($arCards);
d($arCards->getAllCards());

//if (!isset($_SESSION['GameTable'])) {
$GameTable = new GameTable(['Ваня', 'Катя', 'Миша'], 'plus');
d('init');
/*} else {
    $GameTable = unserialize($_SESSION['GameTable']);
    d('session');
}*/


//check win
$GameTable->checkAttraction();

//roll dice
$roll = $GameTable->getRoll();
//check roll cards

//buy card


//change player

//repeat








//save state
$_SESSION['GameTable'] = serialize($GameTable);


d($GameTable, $roll);
d(microtime());