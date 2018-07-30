//swift match1.swift

import Foundation

print("制御文字以外を表す正規表現 \n")

let normalPattern = "\\A[a-z0-9]{1,5}\\Z"
let pccPattern = "\\A\\P{Cc}{1,5}\\z"

extension String {
    func matches(pattern: String) throws -> Bool {
        let re = try NSRegularExpression(pattern: pattern)
        let matches = re.matches(in: self, range: NSMakeRange(0, count))
        if matches.count > 0 {
            return true
        }
        else {
            return false
        }
    }
}

func checkParamNormal(param: String) {
    do {
        if try param.matches(pattern: normalPattern)
        {
            print("Normal検証OK！\n")
        } else {
            print("Normal検証NG！\n")
        }
    }
    catch {
        print("error")
    }
}

func checkParamPCc(param: String) {
    do {
        if try param.matches(pattern: pccPattern)
        {
            print("PCc検証OK！\n")
        } else {
            print("PCc検証NG！\n")
        }
    }
    catch {
        print("error")
    }
}


var param = "11"
print("正常値\n")
print("入力文字列:　\(param) \n")
checkParamNormal(param: param)
checkParamPCc(param: param)
print("==============\n")

param = "aaaaaaa"
print("5文字以上\n")
print("入力文字列:　\(param) \n")
checkParamNormal(param: param)
checkParamPCc(param: param)
print("==============\n")
param = "aa\t"
print("制御文字列\n")
print("入力文字列:　\(param) \n")
checkParamNormal(param: param)
checkParamPCc(param: param)



