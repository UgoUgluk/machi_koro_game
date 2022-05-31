<?php

namespace UgoUgluk\MachiKoroGame;

class ReservePlus extends ReserveStandart
{
    function __construct()
    {
        parent::__construct();
        $arCards = new AllCardsPlus();
        foreach ($arCards->getAllCards() as $id => $arCard) {
            if (isset($arCard['range'][0]))
                $this->arCards[$id] = new Card($arCard, 6);
        }
    }
}