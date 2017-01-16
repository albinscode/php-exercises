<?php

function my_autoloader($class) {
    echo "class before $class\n";
    // We remove the level 0 namespace 'Exercise'
    $class = str_replace('Exercise\\', '', $class);
    // We replace backslashes by slashes
    $class = str_replace('\\', '/', $class);
    echo "class after $class\n";
    include './' . $class . '.php';
}

spl_autoload_register('my_autoloader');

use Exercise\Test as Test;
use Exercise\Sub\Test as SubTest;

$test = new Test();
$test = $test->test();

$test2 = new SubTest();
$test2->test();
