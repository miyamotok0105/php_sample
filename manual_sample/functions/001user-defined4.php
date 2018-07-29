<?php


print("===========\n");
print("例4 再帰的な関数\n");

function recursion($a)
{
    if ($a < 20) {
        echo "$a\n";
        recursion($a + 1);
    }
}

recursion(1);

//関数の再起呼び出しはできるが、多すぎるとスタックが破壊される。

?>

