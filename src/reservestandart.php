<?php

namespace UgoUgluk\MachiKoroGame;

class ReserveStandart
{
    private array $arCards = [];

    function __construct()
    {
        foreach (AllCards::getAllCards() as $id => $arCard) {
            if (isset($arCard['range'][0]))
                $this->arCards[$id] = new Card($arCard, 6);
        }
    }
}