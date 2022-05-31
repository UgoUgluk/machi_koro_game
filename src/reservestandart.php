<?php

namespace UgoUgluk\MachiKoroGame;

class ReserveStandart
{
    protected array $arCards = [];

    function __construct(AllCardsStandart $obCards)
    {
        foreach ($obCards->getAllCards() as $id => $arCard) {
            if (isset($arCard['range'][0]))
                $this->arCards[$id] = new Card($arCard, 6);
        }
    }
}