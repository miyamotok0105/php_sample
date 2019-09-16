<?php

//ここで必要なモジュールを読み込んでる。
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
    print($class_name."\n");
});

$obj  = new MyClass1();
$obj2 = new MyClass2();
