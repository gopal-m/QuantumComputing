<?php
spl_autoload_register(function ($class) {
    $out = str_replace(' ', DIRECTORY_SEPARATOR, ucwords(str_replace('_', ' ', $class)));
    $out .= '.php';
    include $out;
});

$base = new Exercise_Base();

$number =  $base->getUserInput("Please enter the exercise number which you want to run, e.g. 1.1.1");
$asArray = explode('.', $number);
$toCreate = 'Exercise_Chapter' . $asArray[0] . '_' . 'Ex' . str_replace('.', '', $number);

$exercise = new $toCreate();
$exercise->run();