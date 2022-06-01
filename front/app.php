<?php
require __DIR__ . '/../vendor/autoload.php';

//twig
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader, [
    //'cache' => __DIR__ . '/cache',
    'debug' => true,
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());


echo $twig->render('layout.html.twig', ['data' => $GameTable]);


/*foreach ($GameTable->getPlayers() as $Player) {
    include __DIR__ . '/player.php';
}
include __DIR__ . '/reserve.php';
include __DIR__ . '/control.php';
include __DIR__ . '/notice.php';*/