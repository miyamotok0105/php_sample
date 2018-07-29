import scala.util.matching.Regex

//scala match1.scala

println("制御文字以外を表す正規表現 \n");

val normalPattern = "\\A[a-z0-9]{1,5}\\Z".r
val pccPattern = "\\A\\P{Cc}{1,5}\\z".r

def checkParamNormal(param: String){
    //1~5文字のアルファベットと数字
    param match {
      case normalPattern() => println("Normal検証OK！\n")
      case _ => println("Normal検証NG！\n")
    }
}

def checkParamPCc(param: String) {
    param match {
        case pccPattern() => println("PCc検証OK！\n")
        case _ => println("PCc検証NG！\n")
    }
}

var param = "11"
println("正常値\n")
println(s"入力文字列:　$param \n")
checkParamNormal(param)
checkParamPCc(param)
println("==============\n")
param = "aaaaaaa"
println("5文字以上\n")
println(s"入力文字列:　$param \n")
checkParamNormal(param)
checkParamPCc(param)
println("==============\n")
param = "aa\t"
println("制御文字列\n")
println(s"入力文字列:　$param \n")
checkParamNormal(param)
checkParamPCc(param)



