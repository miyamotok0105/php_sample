
/*
http://www.ielove-group.jp/blog/56

gcc binary_safe.c -o binary_safe

*/

#include <stdio.h>
#include <stdlib.h>

int main(void) {

    printf("こんにちは\n");
    printf("こんにちは\n");


    char str[] = "abcdefg";
    printf("%s", str); // abcdefg と出力される
    printf("\n");

    str[3] = '\0'; // NULLバイトを代入
    printf("%s", str); // abc と出力される
    printf("\n");


    printf("end!\n");

    return (0);

}
