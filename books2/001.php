<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
</head>
<body>

    <?php 
    // 厳密な型チェックモードに設定する
    // declare(strict_types=1);
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
    echo (int)$int_value;
    echo intval($int_value);

    echo floatval($int_value);
    echo doubleval($int_value);
    


    
    // echo $combined3;

    // comment
    /** comment */
    if(true) {

    }
    ?>

    
    <?php phpinfo(2); 
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
