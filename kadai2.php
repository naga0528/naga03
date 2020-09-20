<?php
$name ="永嶋";
if($name =="田中") {
    echo "あなたの名前ではありません";
} else {
    echo "私は永嶋です";
}
echo "\n";

$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i; 
}
echo $total;
echo "\n";

$fruits = array("apple","banana","lemon","grape","strawberry");
for($i = 0; $i < count($fruits); $i++){
    echo "要素は". $fruits[$i];
    echo "\n";
}

//1から100までの間で5の倍数のみ表示する
/*for文の始めの値を定義する*/
$start = 1;
/*for文の終わりの値を定義する*/
$end = 100;

for($i = $start; $i < $end; $i++){ //1から始まり、100より小さい数まで1を足し続ける
//5で割り切れたら{}内を実行する
    if($i % 5 == 0){
/*この条件は$iを5で割った0に等しい＝5で割り切れる数という事である*/        
        echo $i;
        echo "\n";
    }
}