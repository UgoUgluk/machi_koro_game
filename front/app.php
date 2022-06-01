<?php
require __DIR__ . '/../vendor/autoload.php';

//twig
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader, [
    //'cache' => __DIR__ . '/cache',
]);


echo $twig->render('layout.html.twig', ['players' => [['title' => 'variables1', 'text' => 'here1'], ['title' => 'variables2', 'text' => 'here2'], ['title' => 'variables3', 'text' => 'here3']]]);


/*foreach ($GameTable->getPlayers() as $Player) {
    include __DIR__ . '/player.php';
}
include __DIR__ . '/reserve.php';
include __DIR__ . '/control.php';
include __DIR__ . '/notice.php';*/