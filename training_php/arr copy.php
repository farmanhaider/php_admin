<?php

$car=["speed"=>230,"color"=>"Red","name"=>"BMW"];

foreach($car as $i=>$v){
    echo $v." is in index ".$i."<br>";
} 

function multiply($a ,$b)
{
    return $a*$b;
}

$mul=multiply(2,3);
echo "axb=".$mul."<br>";

function add(&$a ,&$b)
{
    return $a+$b;
}
$x=2;
$y=3;
$add1=add($x,$y);
echo $add1;



?>

