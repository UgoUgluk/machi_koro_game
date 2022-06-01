<?php

namespace UgoUgluk\MachiKoroGame;

class GameTable
{
    public int $bank = 220;
    public int $currentPlayer = 0;
    public array $arTypesOfGame = ['standart', 'plus', 'sharp'];
    public string $typeOfGame = 'standart';
    public array $arPlayers = [];
    public object $Reserve;
    public string $state = 'start';

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

        $this->frontdata = get_object_vars($this);

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
}