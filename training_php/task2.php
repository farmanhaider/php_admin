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
    echo "<h1> 1. Wap to display feboniccie series upto 10. </h1>" ;
   echo "<b> feboniccie series upto 10:<b><br><br>" ;
   $num1=0;
   $num2=1;
   $num3=$num1+$num2;
   echo("<b>".$num1." &nbsp;");
   echo("<b>".$num2." &nbsp; ");
   echo("<b>".$num3." &nbsp; ");
    $num4=$num2+$num3;
   echo("<b>".$num4." &nbsp; ");
  for($i=1;$i<7;$i++)
  {

    $num4+=$i;
    echo("<b>".$num4." &nbsp;");
  }
   
 echo "<hr>";
 //-----------------------------------------------Question2--------------------------------------------//
echo "<h1>2.Wap to display all the even numbers from 1 to 50 and find their sum </h1>" ;
 echo"Even number from 1 to 50  :<br>";
 $sum=0;
for($i=1;$i<=50;$i++)
{
    if($i%2==0)
    {  
       
        echo($i."&nbsp;&nbsp;");
        $sum+=$i;
    }
      
}
echo "<br>";
echo("sum of even number from 1 to 50 is :".$sum."&nbsp;&nbsp;");
echo "<hr>";
//-----------------------------------------------Question2--------------------------------------------//
echo "<h1>2.Print  pattern </h1>" ;
echo 'a'."<br>".'b '.'c '."<br>".'d '.'e '.'f '."<br>".'g '.'h '.'i '.'j '."<br>".'k '.'l '.'m '.'n '.'o '."<br>"."<br>"."<br>";

echo" output: <br><br>";
$num=97;
for($i=1;$i<=5;$i++){

    for($j=0;$j<$i;$j++)
    {
        $alp=chr($num);
        echo "$alp"."&nbsp;&nbsp;";
        $num+=1;
        
    }
    echo "<br>";
}
//-----------------------------------------------Question2--------------------------------------------//
echo "<h1>2.Print  pattern </h1>" ;
echo "* "."* "."* "."* "."* "."<br>";
echo "* ". " &nbsp; ". " &nbsp; ". "&nbsp;  &nbsp; &nbsp; ". "*  "."<br>";
echo "* ". "&nbsp;  ". "&nbsp;  ". " &nbsp; &nbsp; &nbsp; ". "*  "."<br>";
echo "* ". "&nbsp; ". "&nbsp; ". "&nbsp;    &nbsp;  &nbsp; ". "*  "."<br>";
echo "* "."* "."* "."* "."* "."<br>";

echo" output: <br><br>";


    for($i = 0; $i <=5; $i++) {
        
        for($j = 0; $j <=5; $j++) {
           
          if($j==0||$j==5){
                echo "* ";
          }
          else{
            if($i==0||$i==5){
                echo "* ";
          }
          else{
            echo"&nbsp; &nbsp;";
          }
     
        }
      
    }
       echo "<br>";

    
       //-----------------------------------------------Question2--------------------------------------------//  
}

$arr=array(1,2,3,14,5,6,17,8,9,10);
$sum=0;
$max=0;
for($i=0;$i<10;$i++)
{
$sum+=$arr[$i];
if($arr[$i]>$max)
{
    $max=$arr[$i];
}
}
echo"largest element in array=".$max."<br>";

echo"sum of all element =".$sum;

//-----------------------------------------------Question2--------------------------------------------//
echo "<h1>2.Multidimentional array </h1>" ;

$arr=[
    "ind"=>["cap"=>"Delhi","ng"=>"Hockey"],
 "usa"=>["cap"=>"Washington","ng"=>"Baseball"],
  "England"=>["cap"=>"London","ng"=>"cricket"]];
  
echo "<body><table border=1> <tr><th>SR.NO</th><th>Country</th><th>Capital</th><th>National game</th></tr>";
$id=1;
foreach($arr as $c=>$v)
{
    echo "<tr><td>$id</td><td>$c</td>";
    foreach($v as $v1){
    echo "<td>$v1</td>";
    }
    echo"</tr>";
    $id++;
}
//-----------------------------------------------Question2--------------------------------------------//
echo "<h1>2.Recursion Function</h1>" ;
function factorial($n)
{
    if($n>=1){
      
    return $n*factorial($n-1);
    }
    else{
        return 1;
    }
}
 
echo "the factorial is",factorial(5);

?>
