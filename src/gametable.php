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
    private string $state = 'start';

    private function setTypeOfGame(string $type)
    {
        if (in_array($type, $this->arTypesOfGame)) {
            $this->typeOfGame = $type;
        } else {
            $this->typeOfGame = $this->arTypesOfGame[0];
        }
    }

    function __construct(array $arPlayers, string $type = '')
    {
        //check game type
        $this->setTypeOfGame($type);

        //create players and his start cards
        foreach ($arPlayers as $name) {
            $this->arPlayers[] = new ($this->getCurrentGameClass('Player'))($name, new ($this->getCurrentGameClass('AllCards')));
        }

        //create reserv of cards
        $this->Reserve = new ($this->getCurrentGameClass('Reserve'))(new ($this->getCurrentGameClass('AllCards')));
    }

    function getCurrentGameClass(string $Classname = '')
    {
        $Classname = __NAMESPACE__ . '\\' . $Classname . ucfirst($this->typeOfGame);
        return $Classname;
    }

    function nextStep()
    {
        switch ($this->state) {
            case 'start': {
                    $this->state = 'roll';
                    return 'go roll';
                }
            case 'roll': {
                    $this->state = 'calc';
                    return 'go calc';
                }
            case 'calc': {
                    $this->state = 'buy';
                    return 'go buy';
                }
            case 'buy': {
                    $this->state = 'check';
                    return 'go check win';
                }
            case 'check': {
                    if ($this->currentPlayer < count($this->arPlayers))
                        $this->currentPlayer++;
                    else
                        $this->currentPlayer = 0;

                    $this->state = 'start';
                    return 'go next player';
                }
        }
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

    function getPlayers()
    {
        return $this->arPlayers;
    }
}