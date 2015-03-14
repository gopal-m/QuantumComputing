<?php
spl_autoload_register(function ($class) {
    $out = str_replace(' ', DIRECTORY_SEPARATOR, ucwords(str_replace('_', ' ', $class)));
    $out .= '.php';
    include $out;
});


$number =  $_GET["number"];
$asArray = explode('.', $number);
$toCreate = 'Exercise_Chapter' . $asArray[0] . '_' . 'Ex' . str_replace('.', '', $number);

$exercise = new $toCreate();
$exercise->run();