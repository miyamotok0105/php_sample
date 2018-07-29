<?php

echo "制御文字以外を表す正規表現 \n";
mb_regex_encoding('UTF-8');

function checkParamNormal($param) {
    //1~5文字のアルファベットと数字
    if (mb_ereg('\A[a-z0-9]{1,5}\z', $param) === 1) {
        print("Normal検証OK！\n");
    } else {
        print("Normal検証NG！\n");
    }
}

function checkParamMbEreg($param) {
    //1~5文字の制御文字以外
    if (mb_ereg('\A[[:^cntrl:]]{1,5}\z', $param) === 1) {
        print("MbEreg検証OK！\n");
    } else {
        print("MbEreg検証NG！\n");
    }
}


$s = 11;
print("正常値\n");
print("入力文字列:　${s} \n");
checkParamNormal($s);
checkParamMbEreg($s);
print("==============\n");
print("5文字以上\n");
$s = "aaaaaaa";
print("入力文字列:　${s} \n");
checkParamNormal($s);
checkParamMbEreg($s);
print("==============\n");
print("制御文字列\n");
$s = "aa\t";
print("入力文字列:　${s} \n");
checkParamNormal($s);
checkParamMbEreg($s);
print("==============\n");


?>

