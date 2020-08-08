<?php
declare(strict_types=1);

// Factory Methodパターン
// ファクトリーを抽象化して、オブジェクト生成する。
// 条件分岐が必要ない。

spl_autoload_register(function ($class_name) {
  include $class_name . '.php';
  print($class_name."\n");
});


$fujitsu = new FujitsuFactory();
$fujitsu->start();

$nec = new NecFactory();
$nec->start();

