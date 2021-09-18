<?php

//ここで必要なモジュールを読み込んでる。
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
    print($class_name."\n");
});

$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('FOO_') ."\n";

$class2 = new ConcreteClass2;
$class2->printOut();
echo $class2->prefixValue('FOO_') ."\n";



