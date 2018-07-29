//g++ match1.cpp -o match1 -std=c++11

#include <regex>
#include <string>
#include <iterator>
#include <list>
#include <iostream>
using namespace std;


// regex normalPattern("\\A[a-z0-9]{1,5}\\Z");
// boost::regex pccPattern("([0-9]+)(\\-| |$)(.*)");

//前方一致後方一致の ^と$で書かないバージョンは？？セキュリティーホールならないバージョンは。
void checkParamNormal(string param){
    //1~5文字のアルファベットと数字
    // cout << typeid(param).name() << endl;
    if (std::regex_match (param, std::regex("^[a-z0-9]{1,5}$") )) {
        cout << "Normal検証OK！ \n" << endl;
    } else {
        cout << "Normal検証NG！ \n" << endl;
    }
    return;
}

//TODO：特殊文字除去はどう書くの？
void checkParamPCc(string param){
    std::regex rex(R"(\w\\\w)");
    // std::regex rex(R"\\\A\\\P{Cc}{1,5}\\\z");
    if (std::regex_match (param, rex )) {
        cout << "PCc検証OK！ \n" << endl;
    } else {
        cout << "PCc検証NG！ \n" << endl;
    }
    return;
}


int main()
{
    cout << "制御文字以外を表す正規表現 \n" << endl;
    std::string param = "11";
    cout << "正常値 \n" << endl;
    cout << "入力文字列:　" << param << " \n" << endl;

    checkParamNormal(param);
    // checkParamPCc(param);
    cout << "============== \n" << endl;
    cout << "5文字以上 \n" << endl;
    param = "aaaaaaa";
    cout << "入力文字列:　" << param << " \n" << endl;
    checkParamNormal(param);
    // checkParamPCc(param);
    cout << "============== \n" << endl;
    cout << "制御文字列 \n" << endl;
    param = "aa\t";
    cout << "入力文字列:　" << param << " \n" << endl;
    checkParamNormal(param);
    // checkParamPCc(param);

    return 0;
}
