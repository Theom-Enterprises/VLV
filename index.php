<?php

$vars['NAME1'] = 'Joker';
$vars['NAME2'] = 'Ass';
$vars['NAME3'] = 'King';
$vars['SEHENSWÜRDIGKEIT1'] = 'Die größte Rutsche der Welt';
$vars['SEHENSWÜRDIGKEIT2'] = 'Ein schwebender Swimmingpool';
$vars['SEHENSWÜRDIGKEIT3'] = 'Pool-Tisch im Pool #Poolception';
$vars['ZEITEN1'] = <<<ZEITEN1
15.5 - 10.9 2-24 Uhr
ZEITEN1;
$vars['ZEITEN2'] = <<<ZEITEN2
11.6 - 10.11 2-24 Uhr
ZEITEN2;
$vars['ZEITEN3'] = <<<ZEITEN3
0-24 Uhr 365 Tage im Jahr
ZEITEN3;

$template = file_get_contents('template.html');

foreach ($vars as $key => $value) {
    $template = str_replace("###$key###", $value, $template);
}

echo $template;