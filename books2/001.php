<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
</head>
<body>
<?php
    //declare(strict_types=1);
    // 厳密な型チェックモードに設定する
    ?>

    <?php if (date("H") >= 6 and date("H") <= 11) : ?>
    <!--6時～11時のメッセージ-->
    <p>おはようございます。</p>
    <p>今日も一日頑張りましょう。</p>
    <?php elseif (date("H") >= 12 and date("H") <= 17) : ?>
    <!--12時～17時のメッセージ-->
    <p>こんにちは。</p>
    <p>今日は良い天気です。</p>
    <?php else : ?>
    <!--それ以外（18時～5時）のメッセージ-->
    <p>こんばんは。</p>
    <p>今日もお疲れさまでした。</p>
    <?php endif; ?>

    <?php
    $a = 'aa';
    echo '<h3>'.$a.'</h3>';
    echo '<h3>',$a,'</h3>';

    print '<h3>'.$a.'</h3>';

    var_dump($a);
    echo 'true:  ' . true  . PHP_EOL;
    echo 'false: ' . false . PHP_EOL;

    $string_true  = 'true';
    $string_false = 'false';

    echo 'be true ?  : ' . (bool)$string_true  . PHP_EOL;
    echo 'be false ? : ' . (bool)$string_false . PHP_EOL;

    echo 'NULL: ';
    echo NULL;
    echo PHP_EOL;

    echo 'NULL + NULL:';
    echo NULL + NULL;
    echo PHP_EOL;

    echo 'NULL + 2:';
    echo null + 2;
    echo PHP_EOL;

    echo 'NULL . NULL:';
    echo NULL . NULL;
    echo PHP_EOL;

    $combined_value = "hoge";
    $combined2 = '{$combined_value} \n';
    $combined2 .= "{$combined_value}\"";
    echo $combined2;

    $here_doc = <<< DOC
        hoge
        hoge
        hoge
    DOC;
    echo $here_doc;


    $int_value = 0;
    $str_value = "";
    
    $arr_value = array();
    $arr_value = [1,3,4];
    $arr_value[0] = 2;
    $arr_value['event'] = 'aaaa';
    $arr_value = [[1,2],[3,4]];
    //配列に追加
    $arr_value[] = 5;
    $arr_value[][] = 6;
    $arr_value[][][] = [7,8];
    $arr_value[1][1] = 44;
    
    // $arr_value = [
    //     'name' => 'yamada',
    //     'age' => 30
    // ];


    echo (int)$int_value;
    echo intval($int_value);

    echo (float)$int_value;
    echo (double)$int_value;
    echo floatval($int_value);
    echo doubleval($int_value);
    
    echo (string)$str_value;
    echo strval($str_value);

    echo (bool)$str_value;
    echo boolval($str_value);


    echo (array)($arr_value);

    echo '<br>';
    echo (bool)'true'; //true
    echo (bool)'false'; //true
    echo (bool)''; //false
    echo (bool)0; //false
    echo (bool)1; //true 値、大きさがあるかないかって意味
    echo (bool)-1; //true
    echo (bool)null; //false
    // echo (object)($arr_value);


    echo '<br>';
    //preタグで囲むと改行されてみやすい
    echo "<pre>";
    var_dump($arr_value);
    echo "</pre>";

    echo "<pre>";
    print_r($arr_value);
    echo "</pre>";
    echo $arr_value['event'];

    echo count($arr_value);
    // echo count(null);//error
    // echo count('');//error
    // echo count('111');//error
    
    $arr_value = [1, 'yamada'];
    list($id, $name) = $arr_value; //list関数による配列のスカラー変数への変換
    echo $id, $name;
    // $var = null;

    //定数
    define('TAX', 0.8);
    echo TAX;

    //マジック定数
    echo __LINE__;
    // echo __FILE__;
    // echo __DIR__;
    // echo __FUNCTION__;

    echo '<br>';
    //++が前につくか後ろにつくかで動きが変わる
    echo $int_value = 1;
    echo ++$int_value;
    echo $int_value++;
    echo $int_value;

    //array_mergeか+を使って配列を結合
    //+はインデックスを上書きするので怖い。
    $arr_value1 = [[1,2],[3,4]];
    $arr_value2 = [[5,6],[7,8]];
    print_r($arr_value2+$arr_value1);
    echo '<br>';
    print_r(array_merge($arr_value2, $arr_value1));
    echo "<pre>";
    print_r(array_merge($arr_value2, $arr_value1));
    echo "</pre>";
    
    
    echo '<br>';
    // ...はphp7.4以上の機能
    // 
    // $arr0 = 'red';
    // $arr1 = [&$arr0, 'green', 'blue'];
    // $arr2 = ['white', ...$arr1, 'black'];
    // print_r($arr2);

    //bc-mathを使うと丸め誤差が
    // echo bcadd((0.1 + 0.7) * 10);
    echo bcadd(0.1 + 0.7, 2);
    // echo $combined3;

    //intは値型だけど&をつけるとリファレンス型(参照型)になる
    $greeting1 = "hello";
    $greeting2 = &$greeting1; //2は1を参照.1を変えると2も変わる
    $greeting1 = "world";
    echo $greeting1;
    echo "<br>";
    echo $greeting2;

    //比較演算子
    //緩やかな比較：あまり使わない
    //==
    //厳密な比較：データ型も等しい
    //===
    //
    //!=
    //!===

    //浮動小数点比較

    //asb() < 0.01

    //小数点一桁までで比較
    //bccomp($a, $d, 1);

    echo "<br>";
    //宇宙船演算子
    //並び替えとかソートで使う
    $a = 85;
    echo $a <=> 85;
    echo $a <=> 70;
    echo $a <=> 99;

    //三項演算子、null合体演算子
    echo "<br>";
    echo $a > 0 ? 0 : $a;
    $a = null;
    echo $a ?? 'aaa';

    echo "<br> ==";
    $a = 85;
    echo $a > 0 && 10 > $a ? 0 : $a;
    echo $a > 0 || 10 > $a ? 0 : $a;
    $a = 85;
    echo ($a > 0 and 10 > $a) ? 0 : $a;
    echo ($a > 0 || 10 > $a) ? 0 : $a;

    
    // empty    is_null 
    //     ==null  ===null  isset   array_key_exists
    // ϕ |   T   |   T   |   F   |   F   
    // null |   T   |   T   |   F   |   T   
    // "" |   T   |   F   |   T   |   T   
    // [] |   T   |   F   |   T   |   T
    // 0 |   T   |   F   |   T   |   T      
    // false |   T   |   F   |   T   |   T   
    // true |   F   |   F   |   T   |   T   
    // 1 |   F   |   F   |   T   |   T   
    // \0 |   F   |   F   |   T   |   T   
    //https://stackoverflow.com/questions/8236354/php-is-null-when-empty

    //ビット演算子

    //ゲームでフラグが多いときに使えそう
    //https://lambdalisue.hatenablog.com/entry/2013/12/22/041347
    //画像処理、暗号処理、Base64のエンコードとデコードを実装する際
    //https://stackoverflow.com/questions/2096916/real-world-use-cases-of-bitwise-operators

    //

    // comment
    /** comment */

    //
    if(true) {

    }
    if(true === true) {
    } elseif(true === true) {
    } else {}

    //if(is_numeric($hoge)) {
    //if(is_numeric($hoge)) {
    //if(isset($hoge)) {
    
    //個人的なアンチパターン
    //if($num) { //1だったのでtrueとかはわかんなくなる気が.0だったらどうだっけ？って
    //if($str) { //文字も
    //if(count($arr)) { //
    
    //暗黙的変換に注意
    //型大事!!!!!

    //$aが文字か数字か配列かオブジェクトかで振る舞いが変わる
    //$a = []と$a = [1,2]で結果が変わる
    //$a = '0'と$a = '1'で結果が変わる
    //if(!$a)

    //緩やかな比較演算子は型が違っても比較できる
    //if($a == '')

    //if(empty($a))

    //issetは逆で同じis_null

    //switch文
    //break忘れるとバグるよ

    //ネスト分岐アンチパターン
    //ネストしすぎないで、早期リターンする
    //https://qiita.com/pakkun/items/9bef9132f168ba0befd7

    //exit; //終了コードを返さない
    //exit(0) //成功
    //exit(1) //1または0以外の数字はエラー
    //die('hoge'); //エラーメッセージを表示して終了

    // //配列を先頭から順に処理
    // foreach (配列 as 値変数) {
    //     繰り返す処理;
    // }
    
    // //連想配列を先頭から順に処理
    // foreach (連想配列 as キー変数 => 値変数) {
    //     繰り返す処理;
    // }
    // foreach ($arr as $a) {
        
    // }

    $list = ["apple", "lemon", "banana"];

    foreach ( $list as $key=> $value ) {
        echo "({$key}){$value}" . PHP_EOL ;
        if($key === 1 ){
            break;
        }
    }

    //foreach中に配列を変更したい時はリファレンス渡しを使う
    //&$valueで
    //foreachの中の$valueと、外の$valueは変数のスコープが違うのに、外の変数に影響する。
    $array = array(1, 2, 3);
    foreach ($array as &$value) {
        // do nothing.
    }
    unset($value); //必須！！！
    $value = 10;
    var_dump($array);

    //for文
    //普通の構文
    // for($i = 0; $i < 3; $i++){
    //     echo "({$key}){$value}" . PHP_EOL ;
    //     if($key === 1 ){
    //         break;
    //     }
    // }

    //count関数も使える
    // for ( $i = 0; $i < count($array); ++$i){
    //     doit($array[$i]);
    // }

    //多重ループを避ける
    //２重くらいなら良いが、４重とかになるのであれば分けるのも考える

    //ruby
    // (1..3).each do |i|
    //     (1..3).each do |j|
    //         p [i, j]
    //     end
    // end

    // (1..3).to_a.repeated_permutation(2) do |i, j|
    //     p [i, j]
    // end

    // (1..3).to_a.repeated_permutation(3) do |i, j, k|
    //     p [i, j, k]
    // end
    //https://nekotheshadow.hatenablog.com/entry/2015/07/24/224500



    ?>

    
    <?php
    //endifを使った方がhtmlとphpの混在する中では見やすい
        $hour = date('H');
        if(5<= $hour && $hour < 10):
    ?>
        <p>おはようございます</p>
    <?php else:?>
        <p>こんばんは。</p>
    <?php endif;?>

    <?php
    //endforeach
        $array = array(1,2,3,4,5);
        foreach($array as $value):
    ?>
    <p>value：
        <?php echo $value?>
    </p>
    <?php endforeach;?>


    <?php 
        $name_global = '';
        //引数に&をつけるとリファレンス渡し
        //?stringの?はnull許容型
        function greeting(string &$name): ?string {
            $message = 'Hello, '. $name. '!'; // 処理
            $name = 'tom';
            //グローバル変数
            global $name_global;
            $message = null;
            return $message; // 結果を返す
        }
        $name = 'sum';
        // $message = greeting('Tom');
        $message = greeting($name);
        echo $message; // 'Hello, Tom!'
        echo $name; // 'Hello, Tom!'



    //phpinfo(2); 
        echo '<?php または <?=のPHPタグを使用可能';
    ?>
    <p> PHP コンパイルオプションと拡張機能、
        PHP のバージョン、 
        サーバー情報と環境（モジュールとしてコンパイルされた場合）、
        PHP の環境、OS バージョン情報、
        パス、
        構成オプションのマスター およびローカルの値、
        HTTP ヘッダ、
        PHP License </p>

        PSR Coding Style Guide
        
        クラス名 はUpperCamelCaseのような アッパーキャメルケース で定義しなければなりません。
        クラス定数 は UPPER_SNAKE_CASE のような アッパースネークケース
        メソッド名 はcamelCaseのような キャメルケース
        変数　変数名やプロパティ名に関しては得に決まりは無いため、キャメルケース、アッパーキャメルケース、スネークケースのどれを利用しても良いですが、ある程度一貫性があった方が良いということが書かれています。
        インデントは半角スペース4つ、タブ禁止


        <?php phpinfo(2); 
            include "file.php";
        ?>
        


</body>
</html>
