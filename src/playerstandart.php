<?php

namespace UgoUgluk\MachiKoroGame;

class PlayerStandart
{
    private string $name = '';
    private int $money = 3;
    private array $arCards = [];

    function __construct(string $name)
    {
        //стартовые карты
        $this->arCards[1] = new Card(AllCards::getCardByID(1), 1); //стартовое пшеничное поле 
        $this->arCards[2] = new Card(AllCards::getCardByID(2), 1); //стартовая ферма
        //достопримечательности
        for ($i = 16; $i <= 19; $i++) {
            $Card = new Card(AllCards::getCardByID($i), 1);
            $Card->disable();
            $this->arCards[$i] =  $Card;
        }
        //даем имя
        $this->name = $name;
    }
}