<?php

namespace UgoUgluk\MachiKoroGame;

class Card
{
    public bool $enable = true;
    public int $count = 1;

    function __construct(array $arParams, int $count = 1)
    {
        foreach ($arParams as $key => $value) {
            $this->{$key} = $value;
        }
        if ($count > 1 && $count < 7)
            $this->count = $count;
    }
    public function addOne()
    {
        $this->count++;
    }
    public function addDeleteOne()
    {
        $this->count--;
    }
    public function enable()
    {
        $this->enable = true;
    }
    public function disable()
    {
        $this->enable = false;
    }
}