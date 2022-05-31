<?php

namespace UgoUgluk\MachiKoroGame;

class PlayerPlus extends PlayerStandart
{
    function __construct(string $name, AllCardsStandart $obCards)
    {
        parent::__construct($name, $obCards);
        $this->arCards[20] = new Card($obCards->getCardByID(20), 1); //стартовая мерия
    }
}