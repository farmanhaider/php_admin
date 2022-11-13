<head>
  <style>
   
   
    h1 {
    background: cadetblue;
    color: #3f51b5;
    border-radius: 6px;
    text-align: center;
    /* box-shadow: -30px 27px 7px -27px; */
}
h3{
    border-radius: 10px;
    background-color: indianred;
    text-align: center;
}
body {
    backgound: red;
    background-color: #0e2020;
    color: white;
}
  </style>
</head>
<?php
echo "<hr>";
//-----------------------------------------------Question1--------------------------------------------//
    echo "<h1>1.Swap Two number:</h1>" ;
    echo "<hr>";
echo "<h3>i.WAP to swap two  number  using third variable</h3>" ;
$a=10;
$b=20;
  echo "<h4>Before Swapping the a and b values are:</h4>" ;
  echo  "<p> a= $a b=  $b </p>";
  $temp=$a;
  $a=$b;
  $b=$temp;
  echo "<h4>After  Swapping the a and b values are:</h4>" ;
  echo  "<p> a= $a b= $b</p>";
echo "<hr>";

echo "<h3>ii.WAP to swap two  number  without  using third variable</h3>" ;
$a=30;
$b=60;
  echo "<h4>Before Swapping the a and b values are:</h4>" ;
  echo  "<p> a= $a b=  $b </p>";
  echo "<h4>After  Swapping the a and b values are:</h4>" ;
  $a=$a+$b;
  $b=$a-$b;
  $a=$a-$b;
  echo  "<p> a= $a b= $b</p>";
  echo "<hr>";
echo "<h3>iii.WAP to swap two  number using in one line or expression</h3>" ;
$a=70;
$b=60;
  echo "<h4>Before Swapping the a and b values are:</h4>" ;
  echo  "<p> a= $a b=  $b </p>";
  echo "<h4>After  Swapping the a and b values are:</h4>" ;
  $a=($a+$b)-($b=$a); //(b=a) (b=70)  a=(a+b)-(b=a)=(70+60)-(70)= (130)-70 a=60

  echo  "<p> a= $a b= $b</p>";
echo "<hr>";

//-----------------------------------------------Question2--------------------------------------------//
echo "<h1>2.WAP to assign 4 digit number in variable , reverse it and also find the sum of digit of number:</h1>" ;

$number=7861;
$temp=$number;
$num1 =$number%10; //786.1 $num=1
//echo($num1);
$number=$number/10;  //$number=786.1
//echo($number);
$num2 =$number%10;  //$num2=786.1%10= 78.6 $num=6
//echo($num2);
$number=$number/10; //$number=78.6
//echo($number);
$num3 =$number%10;  //$num3=78.6%10 = 7.8 $num=8
//echo($num3);
$number=$number/10; //$number=7.8
//echo($number);
$num4 =$number%10; //$num4=7.8%10 = $num=7
//echo($num4);
$number=$number/10;//$number=0.7861
//echo($number);
$res=$num1 . $num2 . $num3 .$num4; //1687
echo("<h4>Reverse of digit: $temp = $res<h4>");
$sum=$num1 + $num2 + $num3 +$num4;
echo("<h4>Sum of digit: $temp = $sum </h4>");
echo("<hr>");

//-----------------------------------------------Question3--------------------------------------------//
echo "<h1>3.Wap to assign 5 subject marks in 5 variables and find the total, percentage and grade</h1>" ;
$math=70;
$English=80;
$chemistry=93;
$physics=70;
$computer=80;
echo("<h3>Marks of 5 Subjects are:</h3>");
echo("Maths=".$math .'<br>'.'English='. $English .'<br>'.'Chemistry='. $chemistry .'<br>'.'Physics='. $physics.'<br>' .'Computer='. $computer);

$total=($math+$English+ $chemistry+ $physics+ $computer);
echo("<br>");echo("<br>");
echo("<b>Total of 5 Subjects are:$total</b>");
$percentage=($total/500)*100;

echo("<br>");
echo("<b>Percentage:$percentage%.</b>");
echo("<br>");
if($percentage >=85){
echo("<b>Grade:A</b>");
}
elseif($percentage >= 75 && $percentage < 85){
  echo("<b>Grade:B</b>");
}
elseif($percentage >= 65 && $percentage < 75){
  echo("<b>Grade:C</b>");

}
elseif($percentage >= 40 && $percentage < 65){
  echo("<b>Grade:D</b>");

}
else
{
  echo("<b>Grade:fail</b>");
}
echo("<hr>");
//-----------------------------------------------Question4--------------------------------------------//
echo "<h1>4.Wap to assign Principal, rate and time and find Simple Interest ?</h1>";
$principle=50000;
$time=3;
$rate= 3.5;
echo("<b>Given:</b><br>");
echo("<b>Principle amount:$principle RS</b><br>");
echo("<b>Time:$time year </b><br>");
echo("<b>rate of intrest:$rate%</b><br>");
$SI=($principle*$time*$rate)/100;
echo("<b>Simple Intrest:$SI RS</b>");
echo("<hr>");
//-----------------------------------------------Question5--------------------------------------------//
echo "<h1>5.Wap to assign 3 variables and find the largest one </h1>";
$a=90;
$b=100;
$c=70;

echo("<b> a=$a <br> b=$b <br> c=$c <br><br></b> ");

if($a>$b&&$a>$c)
{
  echo("<b>a is largest number</b> ");
}
 else if($b>$a&&$b>$c)
 {
  echo("<b>b: is largset number</b> ");
 }
 else{
  echo("<b>c: is larest number</b> ");
 }
 echo("<hr>");
?>
