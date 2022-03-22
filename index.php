<?php

require_once 'vendor/autoload.php';

use Theom\Vlv\Hotel;

$hotels[] = new Hotel('Joker', 'Die größte Rutsche der Welt', '15.5 - 10.9 2-24 Uhr');
$hotels[] = new Hotel('Ass', 'Ein schwebender Swimmingpool', '11.6 - 10.11 2-24 Uhr');
$hotels[] = new Hotel('King', 'Pool-Tisch im Pool #Poolception', 'Rund um die Uhr 365 Tage im Jahr');

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$template = $twig->load('main.html');
echo $template->render([
    'hotels' => $hotels,
]);