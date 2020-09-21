<?php
//課題１
function sum($a){
    $result=$a * 2;
    echo $result;
}

sum(4);
echo "\n";

//課題２
function f($a,$b){
    return $a + $b;
}
$result =f(1,2);
echo $result;

echo "\n";

//課題３
function a_array($arr){
    $result = 1;
    foreach($arr as $array){
        $result *= $array;
    }
    return $result;
}
echo a_array(array(1,3,5,7,9));
echo "\n";

//課題４
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
    if($max_number < $a){
        $max_number = $a;
    }
 }
 
 return $max_number;
 }
 echo max_array(array(1,2,3,4,9));
 echo "\n";
 
 //課題５
 //sprit_tads
 $text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

// <p> と <a> は許可します
echo strip_tags($text, '<p><a>');
echo "\n";

//array_push
$stack = array("orange", "banana");
array_push($stack, "apple", "lemon");
print_r($stack);
echo "\n";

//array_merge
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "blue", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
echo "\n";

//time,mktime
$nextWeek = time() + (7 * 24 * 60 * 60);
                   // 7 日 * 24 時間 * 60 分 * 60 秒
echo 'Now:       '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
// あるいは strtotime() を使用します
echo 'Next Week: '. date('Y-m-d', strtotime('+1 week')) ."\n";
echo "\n";

// デフォルトのタイムゾーンを設定します。PHP 5.1 以降で使用可能です
date_default_timezone_set('UTC');

// 出力: July 1, 2020 is on a Wendneday
echo "July 1, 2020 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2020));

// 出力例: 2020-04-05T01:02:03+00:00
echo date('c', mktime(1, 2, 3, 4, 5, 2020));
echo "\n";

//date
// 使用するデフォルトのタイムゾーンを指定します。PHP 5.1 以降で使用可能です。
date_default_timezone_set('UTC');

echo date("l");
echo "\n";

echo date('l jS \of F Y h:i:s A');
echo "\n";

echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2020));
echo "\n";
/* 書式指定パラメータに、定数を使用します。 */

echo date(DATE_RFC2822);
echo "\n";

echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2020));
echo "\n";
 