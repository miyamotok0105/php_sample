

p "制御文字以外を表す正規表現 \n";

#!~演算子は、マッチしなかったときにtrueを、マッチしたときにfalseを返す

def checkParamNormal(param)
    #1~5文字のアルファベットと数字
    if param !~ /\A[a-z0-9]{1,5}\Z/ then
        print("Normal検証NG！\n");
    else
        puts "Normal検証OK！\n";
    end
end

def checkParamPCc(param)
    if param !~ /\A\P{Cc}{1,5}\z/ then
        print("PCc検証NG！\n");
    else
        puts "PCc検証OK！\n";
    end
end

s = 11;
print "正常値\n";
print "入力文字列:　#{s} \n";

puts s.class
#マッチしたかどうか返す
p s !~ /\A[a-z0-9]{1,5}\z/
#これはマッチした位置を返す
p s =~ /\A[a-z0-9]{1,5}\z/
s = s.to_s
puts s.class

checkParamNormal(s);
checkParamPCc(s);
print "==============\n";
print "5文字以上\n";
s = "aaaaaaa";
print "入力文字列:　#{s} \n";
checkParamNormal($s);
checkParamPCc($s);
print "==============\n";
print "制御文字列\n";
s = "aa\t";
print "入力文字列:　#{s} \n";
checkParamNormal($s);
checkParamPCc($s);
print "==============\n";


