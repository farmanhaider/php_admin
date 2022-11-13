<?php
$num=1732;
$t=$num;
$rev=0;
$sum=0;
while($num>1)
{
    $rem=$num%10;
    $rev=($rev*10)+$rem;
    $num=$num/10;
   $sum+=$rem;
}
echo "reverse of".$t."=". $rev."<br>";
echo "sumof ".$t."=". $sum;

?>