using System;
using System.Text.RegularExpressions;

//mcs match1.cs
//mono match1.exe


//javaとc#はちょっとずつしか変更点ないのね
//1. namaspaceとかimport usingの部分
//2. console.writeとprintln
//3. String.formatとString.FormatはFが大文字小文字。埋め込み部分がjavaは%s形式でC#は{0}
//4. 正規表現はRegex関数のC#とmatchs関数のjava

namespace Match
{
    class Match1
    {
        static void Main(string[] args)
        {
            Console.WriteLine("制御文字以外を表す正規表現 \n");
            String param = "11";
            Console.WriteLine("正常値 \n");
            Console.WriteLine(String.Format("入力文字列:　{0} \n", param));
            checkParamNormal(param);
            checkParamPCc(param);
            Console.WriteLine("============== \n");
            Console.WriteLine("5文字以上 \n");
            param = "aaaaaaa";
            Console.WriteLine("5文字以上 \n");
            Console.WriteLine(String.Format("入力文字列:　{0} \n", param));
            checkParamNormal(param);
            checkParamPCc(param);
            Console.WriteLine("============== \n");
            Console.WriteLine("制御文字列 \n");
            param = "aa\t";
            Console.WriteLine(String.Format("入力文字列:　{0} \n", param));
            checkParamNormal(param);
            checkParamPCc(param);
            Console.WriteLine("============== \n");

        }

        private static void checkParamNormal(String param){
            //1~5文字のアルファベットと数字
            if (Regex.IsMatch(param, "\\A[a-z0-9]{1,5}\\Z")) {
                Console.WriteLine("Normal検証OK！ \n");
            } else {
                Console.WriteLine("Normal検証NG！ \n");
            }
        }

        private static void checkParamPCc(String param) {
            if (Regex.IsMatch(param, "\\A\\P{Cc}{1,5}\\z")){
                Console.WriteLine("PCc検証OK！ \n");
            } else {
                Console.WriteLine("PCc検証NG！ \n");
            }

        }


    }
}