
<?php
//課題1
$name ="Hinata";

if($name = "Hinata"){
    echo "私は". $name."です";
}else{
    echo "あなたの名前ではありません";
}
?>

<?php
//課題2
$total = 0;

for($i = 0;$i <= 10000;$i++){
    $total += $i;
}

echo $total;
?>

<?php
//課題3
$fruits = array("apple","banana","orange","manngo","grapeFruits");
foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}
?>

<?php
//課題4（バグ修正箇所はコメントにて解説）//
$start = 1;
$end = 100;

for($i = $start;$i <= $end; $i++){
    //line38の"$i < $endでは100まで出力されないため、<=が必要//
    if($i %5==0){
        echo $i;
    //line41の　";"が抜けていたため、単純なerror//
        echo "\n";
    }
}

