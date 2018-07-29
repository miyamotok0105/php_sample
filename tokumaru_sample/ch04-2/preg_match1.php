<?php

echo "制御文字以外を表す正規表現 \n";

function checkParamNormal($param) {
    //1~5文字のアルファベットと数字
    if (preg_match('/\A[a-z0-9]{1,5}\z/ui', $param) === 1) {
        print("Normal検証OK！\n");
    } else {
        print("Normal検証NG！\n");
    }
}

function checkParamPosix($param) {
    //1~5文字の制御文字以外
    if (preg_match('/\A[[:^cntrl:]]{1,5}\z/u', $param) === 1) {
        print("Posix検証OK！\n");
    } else {
        print("Posix検証NG！\n");
    }
}


$s = 11;
print("正常値\n");
print("入力文字列:　${s} \n");
checkParamNormal($s);
checkParamPosix($s);
print("==============\n");
print("5文字以上\n");
$s = "aaaaaaa";
print("入力文字列:　${s} \n");
checkParamNormal($s);
checkParamPosix($s);
print("==============\n");
print("制御文字列\n");
$s = "aa\t";
print("入力文字列:　${s} \n");
checkParamNormal($s);
checkParamPosix($s);
print("==============\n");


?>

