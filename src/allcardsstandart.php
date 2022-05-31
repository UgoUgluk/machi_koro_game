<?php

namespace UgoUgluk\MachiKoroGame;

class AllCardsStandart
{
    /*protected array $arCards = [
        1 => ['name' => 'Пшеничное поле', 'price' => 1, 'color' => 'blue', 'description' => 'Получите 1 монету из банка. В ход любого игрока.', 'range' => [1, 1], 'type' => 'field'],
        2 => ['name' => 'Ферма', 'price' => 1, 'color' => 'blue', 'description' => 'Получите 1 монету из банка. В ход любого игрока.', 'range' => [2, 2], 'type' => 'farm'],
        3 => ['name' => 'Пекарня', 'price' => 1, 'color' => 'green', 'description' => 'Получите 1 монету из банка. В свой ход.', 'range' => [2, 3], 'type' => 'shop'],
        4 => ['name' => 'Кафе', 'price' => 2, 'color' => 'red', 'description' => 'Получите 1 монету от игрока, бросившего кубики.', 'range' => [3, 3], 'type' => 'café'],
        5 => ['name' => 'Магазин', 'price' => 2, 'color' => 'green', 'description' => 'Получите 3 монеты из банка. В свой ход.', 'range' => [4, 4], 'type' => 'shop'],
        6 => ['name' => 'Лес', 'price' => 3, 'color' => 'blue', 'description' => 'Получите 1 монету из банка. В ход любого игрока.', 'range' => [5, 5], 'type' => 'resource'],
        7 => ['name' => 'Стадион', 'price' => 6, 'color' => 'purple', 'description' => 'Получите 2 монеты от каждого игрока. В свой ход.', 'range' => [6, 6], 'type' => 'showplace'],
        8 => ['name' => 'Телецентр', 'price' => 7, 'color' => 'purple', 'description' => 'Получите 5 монет у любого игрока на ваш выбор. В свой ход.', 'range' => [6, 6], 'type' => 'showplace'],
        9 => ['name' => 'Деловой центр', 'price' => 8, 'color' => 'purple', 'description' => 'Обменяйте одну вашу постройку, кроме построек с символом <showplace>, с другим игроком. В свой ход.', 'range' => [6, 6], 'type' => 'showplace'],
        10 => ['name' => 'Сыроварня', 'price' => 5, 'color' => 'green', 'description' => 'Получите 3 монеты из банка за каждую вашу постройку с символом <farm>. В свой ход.', 'range' => [7, 7], 'type' => 'factory'],
        11 => ['name' => 'Мебельная фабрика', 'price' => 3, 'color' => 'green', 'description' => 'Получите 3 монеты из банка за каждую вашу постройку с символом <resource>. В свой ход.', 'range' => [8, 8], 'type' => 'factory'],
        12 => ['name' => 'Шахта', 'price' => 6, 'color' => 'blue', 'description' => 'Получите 5 монету из банка. В ход любого игрока.', 'range' => [9, 9], 'type' => 'resource'],
        13 => ['name' => 'Ресторан', 'price' => 3, 'color' => 'red', 'description' => 'Получите 2 монеты от игрока, бросившего кубики.', 'range' => [9, 10], 'type' => 'café'],
        14 => ['name' => 'Яблоневый сад', 'price' => 3, 'color' => 'blue', 'description' => 'Получите 3 монеты из банка. В ход любого игрока.', 'range' => [10, 10], 'type' => 'field'],
        15 => ['name' => 'Овощной рынок', 'price' => 2, 'color' => 'green', 'description' => 'Получите 2 монеты из банка за каждую вашу постройку с символом <field>. В свой ход.', 'range' => [11, 12], 'type' => 'market'],
        16 => ['name' => 'Вокзал', 'price' => 4, 'color' => 'orange', 'description' => 'Вы можете бросить 1 или 2 кубика.', 'range' => [], 'type' => 'showplace'],
        17 => ['name' => 'Торговый центр', 'price' => 10, 'color' => 'orange', 'description' => 'Каждая ваша постройка с символами <café> и <shop> приноситна 1 монету больше.', 'range' => [], 'type' => 'showplace'],
        18 => ['name' => 'Парк аттракционов', 'price' => 16, 'color' => 'orange', 'description' => 'Если вы выбросили дубль, сделайте еще один ход после этого.', 'range' => [], 'type' => 'showplace'],
        19 => ['name' => 'Радиовышка', 'price' => 22, 'color' => 'orange', 'description' => 'Один раз можете перебросить кубики. В свой ход.', 'range' => [], 'type' => 'showplace']
    ];*/
    function __construct()
    {
        $this->arCards = [
            1 => ['name' => 'Пшеничное поле', 'price' => 1, 'color' => 'blue', 'description' => 'Получите 1 монету из банка. В ход любого игрока.', 'range' => [1, 1], 'type' => 'field'],
            2 => ['name' => 'Ферма', 'price' => 1, 'color' => 'blue', 'description' => 'Получите 1 монету из банка. В ход любого игрока.', 'range' => [2, 2], 'type' => 'farm'],
            3 => ['name' => 'Пекарня', 'price' => 1, 'color' => 'green', 'description' => 'Получите 1 монету из банка. В свой ход.', 'range' => [2, 3], 'type' => 'shop'],
            4 => ['name' => 'Кафе', 'price' => 2, 'color' => 'red', 'description' => 'Получите 1 монету от игрока, бросившего кубики.', 'range' => [3, 3], 'type' => 'café'],
            5 => ['name' => 'Магазин', 'price' => 2, 'color' => 'green', 'description' => 'Получите 3 монеты из банка. В свой ход.', 'range' => [4, 4], 'type' => 'shop'],
            6 => ['name' => 'Лес', 'price' => 3, 'color' => 'blue', 'description' => 'Получите 1 монету из банка. В ход любого игрока.', 'range' => [5, 5], 'type' => 'resource'],
            7 => ['name' => 'Стадион', 'price' => 6, 'color' => 'purple', 'description' => 'Получите 2 монеты от каждого игрока. В свой ход.', 'range' => [6, 6], 'type' => 'showplace'],
            8 => ['name' => 'Телецентр', 'price' => 7, 'color' => 'purple', 'description' => 'Получите 5 монет у любого игрока на ваш выбор. В свой ход.', 'range' => [6, 6], 'type' => 'showplace'],
            9 => ['name' => 'Деловой центр', 'price' => 8, 'color' => 'purple', 'description' => 'Обменяйте одну вашу постройку, кроме построек с символом <showplace>, с другим игроком. В свой ход.', 'range' => [6, 6], 'type' => 'showplace'],
            10 => ['name' => 'Сыроварня', 'price' => 5, 'color' => 'green', 'description' => 'Получите 3 монеты из банка за каждую вашу постройку с символом <farm>. В свой ход.', 'range' => [7, 7], 'type' => 'factory'],
            11 => ['name' => 'Мебельная фабрика', 'price' => 3, 'color' => 'green', 'description' => 'Получите 3 монеты из банка за каждую вашу постройку с символом <resource>. В свой ход.', 'range' => [8, 8], 'type' => 'factory'],
            12 => ['name' => 'Шахта', 'price' => 6, 'color' => 'blue', 'description' => 'Получите 5 монету из банка. В ход любого игрока.', 'range' => [9, 9], 'type' => 'resource'],
            13 => ['name' => 'Ресторан', 'price' => 3, 'color' => 'red', 'description' => 'Получите 2 монеты от игрока, бросившего кубики.', 'range' => [9, 10], 'type' => 'café'],
            14 => ['name' => 'Яблоневый сад', 'price' => 3, 'color' => 'blue', 'description' => 'Получите 3 монеты из банка. В ход любого игрока.', 'range' => [10, 10], 'type' => 'field'],
            15 => ['name' => 'Овощной рынок', 'price' => 2, 'color' => 'green', 'description' => 'Получите 2 монеты из банка за каждую вашу постройку с символом <field>. В свой ход.', 'range' => [11, 12], 'type' => 'market'],
            16 => ['name' => 'Вокзал', 'price' => 4, 'color' => 'orange', 'description' => 'Вы можете бросить 1 или 2 кубика.', 'range' => [], 'type' => 'showplace'],
            17 => ['name' => 'Торговый центр', 'price' => 10, 'color' => 'orange', 'description' => 'Каждая ваша постройка с символами <café> и <shop> приноситна 1 монету больше.', 'range' => [], 'type' => 'showplace'],
            18 => ['name' => 'Парк аттракционов', 'price' => 16, 'color' => 'orange', 'description' => 'Если вы выбросили дубль, сделайте еще один ход после этого.', 'range' => [], 'type' => 'showplace'],
            19 => ['name' => 'Радиовышка', 'price' => 22, 'color' => 'orange', 'description' => 'Один раз можете перебросить кубики. В свой ход.', 'range' => [], 'type' => 'showplace']
        ];
    }
    public function getCardByID(int $id = null)
    {
        return $this->arCards[$id];
    }
    public function getAllCards()
    {
        return $this->arCards;
    }
}