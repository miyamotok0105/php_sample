<?php
declare(strict_types=1);


//型のヒントって型を書かないとエラーとかじゃなくて、
//定義してた時にエラーが出るってやつ。

// function sum(int $a, int $b): int {
//     return 5.78;
// }
// print(sum(1, 2));

function sum(int $a, int $b) {
  return 5.78;
}
print(sum(1, 2));
