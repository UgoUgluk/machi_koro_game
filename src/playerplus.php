<?php

namespace UgoUgluk\MachiKoroGame;

class PlayerPlus extends PlayerStandart
{
    function __construct(string $name)
    {
        parent::__construct($name);
        $arCards = new AllCardsPlus();
        $this->arCards[20] = new Card($arCards->getCardByID(20), 1); //стартовая мерия
    }
}