<?php

namespace UgoUgluk\MachiKoroGame;

class GameTable
{
    private int $bank = 220;
    private int $currentPlayer = 0;
    private array $arTypesOfGame = ['standart', 'plus', 'sharp'];
    private string $typeOfGame = 'standart';
    private array $arPlayers = [];
    private object $Reserve;

    private function setTypeOfGame(string $type)
    {
        if (in_array($type, $this->arTypesOfGame)) {
            $this->typeOfGame = $type;
        } else {
            $this->typeOfGame = 'standart';
        }
    }

    function __construct(string $type, array $arPlayers)
    {
        //проверяем и устанавливаем тип игры
        $this->setTypeOfGame($type);

        //создаем игроков
        foreach ($arPlayers as $name) {
            $this->arPlayers[] = new ($this->getCurrentGameClass('Player'))($name);
        }

        //генерируем резерв
        $this->Reserve = new ($this->getCurrentGameClass('Reserve'));
    }

    function getRoll(bool $double = false)
    {
        if ($double)
            return rand(1, 12);
        else
            return rand(1, 6);
    }

    function checkAttraction()
    {
        return false;
    }

    function getCurrentGameClass(string $Classname = '')
    {
        $Classname = __NAMESPACE__ . '\\' . $Classname . ucfirst($this->typeOfGame);
        return $Classname;
    }
}