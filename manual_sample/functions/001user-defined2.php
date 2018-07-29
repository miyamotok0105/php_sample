<?php


print("===========\n");
print("例2 条件つきの関数\n");

//関数の定義と呼び出しはどちらが先でも良い。


$makefoo = true;

/* ここでは関数foo()はまだ定義されていないので
   コールすることはできません。
   しかし関数 bar()はコールできます。 */

bar();

if ($makefoo) {
    function foo()
    {
        echo "I don't exist until program execution reaches me.\n";
    }
}

/* ここでは $makefooがtrueと評価されているため
   安全にfoo()をコールすることができます。 */

if ($makefoo) foo();

function bar()
{
    echo "I exist immediately upon program start.\n";
}




?>

