<?php

echo "バイナリセーフ関数 \n";

$p = 0;
print("入力文字列:　${p} \n");
if (ereg('^[0-9]+$', $p) === False ) {
    print("変数pは数値ではない！\n");
} else {
    print("変数pは数値です！\n");
}
print("==============\n");
$p = "00";
print("入力文字列:　${p} \n");
if (ereg('^[0-9]+$', $p) === False ) {
    print("変数pは数値ではない！\n");
} else {
    print("変数pは数値です！\n");
}
print("==============\n");
$p = "123:hogehoge";
print("入力文字列:　${p} \n");
if (ereg('^[0-9]+$', $p) === False ) {
    print("変数pは数値ではない！\n");
} else {
    print("変数pは数値です！\n");
}

print("==============\n");
$p = "123\0:hogehoge";
print("入力文字列:　${p} \n");
if (ereg('^[0-9]+$', $p) === False ) {
    print("変数pは数値ではない！\n");
} else {
    print("変数pは数値です！\n");
}


print("==============\n");
//http://www.ielove-group.jp/blog/56
$str = "abcdefg";
var_dump($str); // string(7) "abcdefg" と出力される
$str[3] = "\0"; // NULLバイトを代入
var_dump($str); // string(7) "abcefg" と出力される


var_dump(ereg('^[0-9]+$', "123")); // int(1)
var_dump(ereg('^[0-9]+$', "123abc")); // bool(false)
var_dump(ereg('^[0-9]+$', "123\0abc")); // int(1)


?>

