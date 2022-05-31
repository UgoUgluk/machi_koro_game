<?php

namespace UgoUgluk\MachiKoroGame;

class PlayerStandart
{
    protected string $name = '';
    protected int $money = 3;
    protected array $arCards = [];

    function __construct(string $name, AllCardsStandart $obCards)
    {
        //стартовые карты
        $this->arCards[1] = new Card($obCards->getCardByID(1), 1); //стартовое пшеничное поле 
        $this->arCards[2] = new Card($obCards->getCardByID(3), 1); //стартовая пекарня
        //достопримечательности
        for ($i = 16; $i <= 19; $i++) {
            $Card = new Card($obCards->getCardByID($i), 1);
            $Card->disable();
            $this->arCards[$i] =  $Card;
        }
        //даем имя
        $this->name = $name;
    }
}