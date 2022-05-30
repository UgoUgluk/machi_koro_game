<?php
class AllCards
{
    protected static array $arCards = [
        1 => ['name' => 'Пшеничное поле', 'price' => 1, 'color' => 'blue', 'description' => 'Получите 1 монету из банка. В ход любого игрока.', 'extended' => 'standart', 'range' => [1, 1], 'type' => 'field'],
        2 => ['name' => 'Ферма', 'price' => 1, 'color' => 'blue', 'description' => 'Получите 1 монету из банка. В ход любого игрока.', 'extended' => 'standart', 'range' => [2, 2], 'type' => 'farm'],
        3 => ['name' => 'Пекарня', 'price' => 1, 'color' => 'green', 'description' => 'Получите 1 монету из банка. В свой ход.', 'extended' => 'standart', 'range' => [2, 3], 'type' => 'shop'],
        4 => ['name' => 'Кафе', 'price' => 2, 'color' => 'red', 'description' => 'Получите 1 монету от игрока, бросившего кубики.', 'extended' => 'standart', 'range' => [3, 3], 'type' => 'café'],
        5 => ['name' => 'Магазин', 'price' => 2, 'color' => 'green', 'description' => 'Получите 3 монеты из банка. В свой ход.', 'extended' => 'standart', 'range' => [4, 4], 'type' => 'shop'],
        6 => ['name' => 'Лес', 'price' => 3, 'color' => 'blue', 'description' => 'Получите 1 монету из банка. В ход любого игрока.', 'extended' => 'standart', 'range' => [5, 5], 'type' => 'resource'],
        7 => ['name' => 'Стадион', 'price' => 6, 'color' => 'purple', 'description' => 'Получите 2 монеты от каждого игрока. В свой ход.', 'extended' => 'standart', 'range' => [6, 6], 'type' => 'showplace'],
        8 => ['name' => 'Телецентр', 'price' => 7, 'color' => 'purple', 'description' => 'Получите 5 монет у любого игрока на ваш выбор. В свой ход.', 'extended' => 'standart', 'range' => [6, 6], 'type' => 'showplace'],
        9 => ['name' => 'Деловой центр', 'price' => 8, 'color' => 'purple', 'description' => 'Обменяйте одну вашу постройку, кроме построек с символом <showplace>, с другим игроком. В свой ход.', 'extended' => 'standart', 'range' => [6, 6], 'type' => 'showplace'],
        10 => ['name' => 'Сыроварня', 'price' => 5, 'color' => 'green', 'description' => 'Получите 3 монеты из банка за каждую вашу постройку с символом <farm>. В свой ход.', 'extended' => 'standart', 'range' => [7, 7], 'type' => 'factory'],
        11 => ['name' => 'Мебельная фабрика', 'price' => 3, 'color' => 'green', 'description' => 'Получите 3 монеты из банка за каждую вашу постройку с символом <resource>. В свой ход.', 'extended' => 'standart', 'range' => [8, 8], 'type' => 'factory'],
        12 => ['name' => 'Шахта', 'price' => 6, 'color' => 'blue', 'description' => 'Получите 5 монету из банка. В ход любого игрока.', 'extended' => 'standart', 'range' => [9, 9], 'type' => 'resource'],
        13 => ['name' => 'Ресторан', 'price' => 3, 'color' => 'red', 'description' => 'Получите 2 монеты от игрока, бросившего кубики.', 'extended' => 'standart', 'range' => [9, 10], 'type' => 'café'],
        14 => ['name' => 'Яблоневый сад', 'price' => 3, 'color' => 'blue', 'description' => 'Получите 3 монеты из банка. В ход любого игрока.', 'extended' => 'standart', 'range' => [10, 10], 'type' => 'field'],
        15 => ['name' => 'Овощной рынок', 'price' => 2, 'color' => 'green', 'description' => 'Получите 2 монеты из банка за каждую вашу постройку с символом <field>. В свой ход.', 'extended' => 'standart', 'range' => [11, 12], 'type' => 'market'],
        16 => ['name' => 'Вокзал', 'price' => 4, 'color' => 'orange', 'description' => 'Вы можете бросить 1 или 2 кубика.', 'extended' => 'standart', 'range' => [], 'type' => 'showplace'],
        17 => ['name' => 'Торговый центр', 'price' => 10, 'color' => 'orange', 'description' => 'Каждая ваша постройка с символами <café> и <shop> приноситна 1 монету больше.', 'extended' => 'standart', 'range' => [], 'type' => 'showplace'],
        18 => ['name' => 'Парк аттракционов', 'price' => 16, 'color' => 'orange', 'description' => 'Если вы выбросили дубль, сделайте еще один ход после этого.', 'extended' => 'standart', 'range' => [], 'type' => 'showplace'],
        19 => ['name' => 'Радиовышка', 'price' => 22, 'color' => 'orange', 'description' => 'Один раз можете перебросить кубики. В свой ход.', 'extended' => 'standart', 'range' => [], 'type' => 'showplace'],
        20 => ['name' => 'Мэрия', 'price' => 0, 'color' => 'orange', 'description' => 'Если перед началом строительства у вас 0 монет, возьмите 1 монету из банка.', 'extended' => 'plus', 'range' => [], 'type' => 'showplace'],
        21 => ['name' => 'Порт', 'price' => 2, 'color' => 'orange', 'description' => 'Если сумма на кубиках 10 или больше, вы можете добавить 2 к сумме. В свой ход.', 'extended' => 'plus', 'range' => [], 'type' => 'showplace'],
        22 => ['name' => 'Аэропорт', 'price' => 30, 'color' => 'orange', 'description' => 'Если вы ничего не построили в свой ход, возьмите 10  монет из банка.', 'extended' => 'plus', 'range' => [], 'type' => 'showplace'],
        23 => ['name' => 'Суши-бар', 'price' => 2, 'color' => 'red', 'description' => 'Получите 3 монеты от игрока, бросившего кубики, если у вас есть "Порт".', 'extended' => 'plus', 'range' => [1, 1], 'type' => 'café'],
        24 => ['name' => 'Цветник', 'price' => 2, 'color' => 'blue', 'description' => 'Получите 1 монету из банка. В ход любого игрока.', 'extended' => 'plus', 'range' => [4, 4], 'type' => 'field'],
        25 => ['name' => 'Цветочный магазин', 'price' => 1, 'color' => 'green', 'description' => 'Получите 1 монету из банка за каждый ваш "Цветник". В свой ход.', 'extended' => 'plus', 'range' => [6, 6], 'type' => 'shop'],
        26 => ['name' => 'Пиццерия', 'price' => 1, 'color' => 'red', 'description' => 'Получите 1 монету от игрока, бросившего кубики.', 'extended' => 'plus', 'range' => [7, 7], 'type' => 'café'],
        27 => ['name' => 'Издательство', 'price' => 5, 'color' => 'purple', 'description' => 'Получите 1 монету от каждого игрока за каждую его постройку с символами  <café> или <shop>. В свой ход.', 'extended' => 'plus', 'range' => [7, 7], 'type' => 'showplace'],
        28 => ['name' => 'Баркас', 'price' => 2, 'color' => 'blue', 'description' => 'Получите 3 монеты из банка, если у вас есть "Порт". В ход любого игрока.', 'extended' => 'plus', 'range' => [8, 8], 'type' => 'sheep'],
        29 => ['name' => 'Пиццерия', 'price' => 1, 'color' => 'red', 'description' => 'Получите 1 монету от игрока, бросившего кубики.', 'extended' => 'plus', 'range' => [8, 8], 'type' => 'café'],
        30 => ['name' => 'Налоговая', 'price' => 4, 'color' => 'purple', 'description' => 'Получите половину (округляя вниз) монет каждого игрока у которого 10 или больше монет. В свой ход.', 'extended' => 'plus', 'range' => [8, 9], 'type' => 'showplace'],
        31 => ['name' => 'Продуктовый склад', 'price' => 2, 'color' => 'green', 'description' => 'Получите 2 монеты из банка за каждую вашу постройку с символом <café>. В свой ход.', 'extended' => 'plus', 'range' => [12, 13], 'type' => 'factory'],
        32 => ['name' => 'Траулер', 'price' => 5, 'color' => 'blue', 'description' => 'Активный игрок бросает два кубика. Если у вас есть "Порт" возьмите столько монет из банка, сколько выпало на кубиках. В ход любого игрока.', 'extended' => 'plus', 'range' => [12, 14], 'type' => 'sheep'],
    ];
    public static function getCardByID(int $id = null)
    {
        return self::$arCards[$id];
    }
    public static function getAllCards()
    {
        return self::$arCards;
    }
}

class Card
{
    protected bool $enable = true;
    protected int $count = 1;

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

class Player
{
    protected string $name = '';
    protected int $money = 3;
    protected array $arCards = [];

    function __construct(string $typeOfGame, string $name)
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

        if ($typeOfGame == 'plus') {
            $this->arCards[20] = new Card(AllCards::getCardByID(20), 1); //стартовая мерия
        }

        //даем имя
        $this->name = $name;
    }
}

class Reserve
{
    protected array $arCards = [];

    function __construct(string $typeOfGame)
    {
        $arAllCards = AllCards::getAllCards();
        foreach ($arAllCards as $id => $arCard) {
            if ($arCard['extended'] == 'standart' && isset($arCard['range'][0]))
                $this->arCards[$id] = new Card($arCard, 6);
        }
        if ($typeOfGame == 'plus') {
            foreach ($arAllCards as $id => $arCard) {
                if ($arCard['extended'] == 'plus' && $arCard['range'][0])
                    $this->arCards[$id] = new Card($arCard, 6);
            }
        }
    }
}


class GameTable
{
    protected int $bank = 220;
    protected int $currentPlayer = 0;
    protected array $arTypesOfGame = ['standart', 'plus', 'sharp'];
    protected string $typeOfGame = 'standart';
    protected array $arPlayers = [];
    protected object $Reserve;

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
            $this->arPlayers[] = new Player($this->typeOfGame, $name);
        }

        //генерируем резерв
        $this->Reserve = new Reserve($this->typeOfGame);
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


session_start();

if (!isset($_SESSION['GameTable'])) {
    $GameTable = new GameTable('standart', ['Ваня', 'Катя', 'Миша']);
    echo 'init';
} else {
    $GameTable = unserialize($_SESSION['GameTable']);
    echo 'session';
}

echo '<pre>';
print_r($GameTable);
echo '</pre>';

//check win
$GameTable->checkAttraction();

//roll dice
$roll = $GameTable->getRoll();
//check roll cards
print_r($roll);
//buy card


//change player

//repeat


//save state
$_SESSION['GameTable'] = serialize($GameTable);