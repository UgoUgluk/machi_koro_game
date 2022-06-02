<?php

namespace UgoUgluk\MachiKoroGame;

class ReservePlus extends ReserveStandart
{
    function __construct(AllCardsStandart $obCards)
    {
        parent::__construct($obCards);
        foreach ($obCards->getAllCards() as $id => $arCard) {
            if (isset($arCard['range'][0]))
                $this->arCards[$id] = new Card($arCard, 6);
        }
    }
}