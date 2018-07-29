//javac Match1.java
//java Match1

import static java.lang.System.out;

class  Match1{
    public static void main(String args[]){

        System.out.println("制御文字以外を表す正規表現 \n");

        String param = "11";
        out.println("正常値\n");
        out.println(String.format("入力文字列:　%s \n", param));

        checkParamNormal(param);
        checkParamPCc(param);
        out.println("==============\n");
        out.println("5文字以上\n");
        param = "aaaaaaa";
        out.println(String.format("入力文字列:　%s \n", param));

        checkParamNormal(param);
        checkParamPCc(param);
        out.println("==============\n");
        out.println("制御文字列\n");
        param = "aa\t";
        out.println(String.format("入力文字列:　%s \n", param));

        checkParamNormal(param);
        checkParamPCc(param);
        out.println("==============\n");
    }



    //引数に渡した正規表現とこの文字列が一致する場合はtrue、それ以外の場合はfalse
    private static void checkParamNormal(String param){
        //1~5文字のアルファベットと数字
        if (param.matches("\\A[a-z0-9]{1,5}\\Z") == true) {
            out.println("Normal検証OK！\n");
        } else {
            out.println("Normal検証NG！\n");
        }
    }

    private static void checkParamPCc(String param) {
        if (param.matches("\\A\\P{Cc}{1,5}\\z") == true) {
            out.println("PCc検証OK！\n");
        } else {
            out.println("PCc検証NG！\n");
        }

    }

}

