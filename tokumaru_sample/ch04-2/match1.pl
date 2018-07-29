
print "制御文字以外を表す正規表現 \n";

#perlのパターンマッチは下のように順番が逆だと動作しない！！！
#print(/\A[a-z0-9]{1,5}\Z/m =~ $s);


sub checkParamNormal($param) {
    #1~5文字のアルファベットと数字
    if ($param =~ /\A[a-z0-9]{1,5}\Z/) {
        print("Normal検証OK！\n");
    } else {
        print("Normal検証NG！\n");
    }
}

sub checkParamPCc($param){
    if ($param =~ /\A\P{Cc}{1,5}\z/u) {
        print("PCc検証OK！\n");
    } else {
        print("PCc検証NG！\n");
    }
}

$s = 11;
print "正常値\n";
print "入力文字列:　${s} \n";

&checkParamNormal($s);
&checkParamPCc($s);
print "==============\n";
print "5文字以上\n";
$s = "aaaaaaa";
print "入力文字列:　${s} \n";
&checkParamNormal($s);
&checkParamPCc($s);
print "==============\n";
print "制御文字列\n";
$s = "aa\t";
print "入力文字列:　${s} \n";
&checkParamNormal($s);
&checkParamPCc($s);
print "==============\n";


