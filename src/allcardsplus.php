<?php

namespace UgoUgluk\MachiKoroGame;

class AllCardsPlus extends AllCardsStandart
{
    function __construct()
    {
        parent::__construct();
        $this->arCards = $this->arCards + [
            20 => ['name' => 'Мэрия', 'price' => 0, 'color' => 'orange', 'description' => 'Если перед началом строительства у вас 0 монет, возьмите 1 монету из банка.', 'range' => [], 'type' => 'showplace'],
            21 => ['name' => 'Порт', 'price' => 2, 'color' => 'orange', 'description' => 'Если сумма на кубиках 10 или больше, вы можете добавить 2 к сумме. В свой ход.', 'range' => [], 'type' => 'showplace'],
            22 => ['name' => 'Аэропорт', 'price' => 30, 'color' => 'orange', 'description' => 'Если вы ничего не построили в свой ход, возьмите 10  монет из банка.', 'range' => [], 'type' => 'showplace'],
            23 => ['name' => 'Суши-бар', 'price' => 2, 'color' => 'red', 'description' => 'Получите 3 монеты от игрока, бросившего кубики, если у вас есть "Порт".', 'range' => [1, 1], 'type' => 'café'],
            24 => ['name' => 'Цветник', 'price' => 2, 'color' => 'blue', 'description' => 'Получите 1 монету из банка. В ход любого игрока.', 'range' => [4, 4], 'type' => 'field'],
            25 => ['name' => 'Цветочный магазин', 'price' => 1, 'color' => 'green', 'description' => 'Получите 1 монету из банка за каждый ваш "Цветник". В свой ход.', 'range' => [6, 6], 'type' => 'shop'],
            26 => ['name' => 'Пиццерия', 'price' => 1, 'color' => 'red', 'description' => 'Получите 1 монету от игрока, бросившего кубики.', 'range' => [7, 7], 'type' => 'café'],
            27 => ['name' => 'Издательство', 'price' => 5, 'color' => 'purple', 'description' => 'Получите 1 монету от каждого игрока за каждую его постройку с символами  <café> или <shop>. В свой ход.', 'range' => [7, 7], 'type' => 'showplace'],
            28 => ['name' => 'Баркас', 'price' => 2, 'color' => 'blue', 'description' => 'Получите 3 монеты из банка, если у вас есть "Порт". В ход любого игрока.', 'range' => [8, 8], 'type' => 'sheep'],
            29 => ['name' => 'Пиццерия', 'price' => 1, 'color' => 'red', 'description' => 'Получите 1 монету от игрока, бросившего кубики.', 'range' => [8, 8], 'type' => 'café'],
            30 => ['name' => 'Налоговая', 'price' => 4, 'color' => 'purple', 'description' => 'Получите половину (округляя вниз) монет каждого игрока у которого 10 или больше монет. В свой ход.', 'range' => [8, 9], 'type' => 'showplace'],
            31 => ['name' => 'Продуктовый склад', 'price' => 2, 'color' => 'green', 'description' => 'Получите 2 монеты из банка за каждую вашу постройку с символом <café>. В свой ход.', 'range' => [12, 13], 'type' => 'factory'],
            32 => ['name' => 'Траулер', 'price' => 5, 'color' => 'blue', 'description' => 'Активный игрок бросает два кубика. Если у вас есть "Порт" возьмите столько монет из банка, сколько выпало на кубиках. В ход любого игрока.', 'range' => [12, 14], 'type' => 'sheep'],
        ];
    }
}