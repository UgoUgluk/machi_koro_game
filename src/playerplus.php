<?php

namespace UgoUgluk\MachiKoroGame;

class PlayerPlus extends PlayerStandart
{
    function __construct(string $name)
    {
        parent::__construct($name);
        $this->arCards[20] = new Card(AllCards::getCardByID(20), 1); //стартовая мерия
    }
}