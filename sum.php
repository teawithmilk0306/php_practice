<!DOCTYPE HTML>
<?php

function sum($max){
    $result = 0;
     for($i = 1; $i <= $max; $i++){
     $result += $i;
         
     }
     return $result;
}

echo sum(100). "\n"; 


$string = "ABCDEF". "\n";
echo strlen($string);

$array = array(2,5,9,7,3,1,8,6,4);
asort($array);
print_r($array);

arsort($array);
print_r($array);


//課題１
function nibai($a){
return $a*2;

}
echo nibai(4). "\n";
echo nibai(2.5). "\n";

//課題２
function add($a, $b){
 return $a + $b;
}
echo add($a=2, $b=4). "\n";


//課題３
function kakeru($arr){
    $result = 1;
    foreach($arr as $a){
        $result *= $a;
    }
    echo $result;
}
 
echo kakeru(array(1,3,5,7,9)). "\n";

//課題４
function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
     if($max_number < $a){
         $max_number = $a;
     } 
    }
    return $max_number;
}
//$a = 0;//変数 $a に数値「0」を代入している
//$b = array(1,3,5,7,9);//変数 $b に配列を代入している
//$c = "mojiretu";//変数 $c に文字列を代入している
echo max_array(array(8,7,20,3,1,-1)). "\n";
echo max_array(array(4,8,10,2)). "\n";

//課題５
// 「strip_tags」ビルトイン関数の用途、指定した文字列からHTMLタグを取り除く関数
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";
// <p> と <a> は許可します
echo strip_tags($text, '<p><a>');



// 「array_push」ビルトイン関数の用途、配列の最後に要素を追加できる
$fruits = ['apple', 'orange', 'melon'];
array_push($fruits, 'banana', 'pineapple');
print_r($fruits);

// 「array_merge」ビルトイン関数の用途、配列の要素の最後にひとつまたは複数の配列を結合する
$items1 = ['item1', 'item2', 'item3'];
$items2 = ['item4', 'item5'];
$items3 = ['item6', 'item7'];
 //配列を結合する
$item_merge = array_merge($items1, $items2, $items3);
 print_r($item_merge);

// 「time, mktime」ビルトイン関数の用途
//PHPで現在時刻をUnixタイムスタンプの形で取得する際に「time」関数を使う。Unixタイムスタンプとは1970年1月1日 00:00:00 GMTからの秒数。
echo time(). "\n"; // 1560307049
//指定した時刻をUnixタイムスタンプの形で取得するには[mktime]関数を使う。「mktime」関数の引数の順序は「時、分、杪、月、日、年」。
echo mktime(44, 17, 20, 2, 26, 2022). "\n"; // => 1560339936
echo date('Y-m-d H:i:s(l)', mktime(15, 17, 20, 3, 6, 1985)). "\n";

// 「date」ビルトイン関数の用途、現在時刻を文字列として取得する。
echo date('Y-m-d H:i:s');

?>