<?php
declare(strict_types=1);
// 簡易的なファクトリー。staticを使ったファクトリー。
// factory自体は１個のパターン。

spl_autoload_register(function ($class_name) {
  include $class_name . '.php';
  print($class_name."\n");
});

$necPc = Factory::create("nec");
// print($necPc->start());

var_dump($necPc->start());


