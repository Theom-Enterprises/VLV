<?php

use TYPO3Fluid\Fluid\View\TemplateView;

require_once('vendor/autoload.php');

use Theom\Vlv\Hotel;

$hotels[] = new Hotel('Joker', 5, 'Die größte Rutsche der Welt', '15.5 - 10.9 2-24 Uhr');
$hotels[] = new Hotel('Ass', 3, 'Ein schwebender Swimmingpool', '11.6 - 10.11 2-24 Uhr');
$hotels[] = new Hotel('King', 4, 'Pool-Tisch im Pool #Poolception', 'Rund um die Uhr 365 Tage im Jahr');

$view = new TemplateView();
$paths = $view->getTemplatePaths();
$paths->setTemplatePathAndFilename('templates/main.html');
$view->assignMultiple(
    ['hotels' => $hotels]
);
$output = $view->render();

echo $output;