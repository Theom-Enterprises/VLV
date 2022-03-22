<?php

$vars['NAME1'] = 'Joker';
$vars['NAME2'] = 'Ass';
$vars['NAME3'] = 'King';
$vars['SEHENSWÜRDIGKEIT1'] = 'Die größte Rutsche der Welt';
$vars['SEHENSWÜRDIGKEIT2'] = 'Ein schwebender Swimmingpool';
$vars['SEHENSWÜRDIGKEIT3'] = 'Pool-Tisch im Pool #Poolception';
$vars['ZEITEN1'] = '15.5 - 10.9 2-24 Uhr';
$vars['ZEITEN2'] = '11.6 - 10.11 2-24 Uhr';
$vars['ZEITEN3'] = 'Rund um die Uhr 365 Tage im Jahr';

$template = file_get_contents('template.html');

foreach($vars as $key => $value){
    $template = str_replace("###$key###", $value, $template);
}

echo $template;