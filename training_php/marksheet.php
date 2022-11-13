
<?php 
error_reporting(0);
if(isset($_POST['sub'])){
    $eng=$_POST['eng'];
    $math=$_POST['math'];
    $Sci=$_POST['Sci'];
$total="";
$percentage="";
$grade="";
    $total=($eng+$math+ $Sci);
    $percentage=(($total/300)*100)."%";
    if($percentage >=85){
   $grade="A";
    }
    elseif($percentage >= 75 && $percentage < 85){

       $grade="B";
    }
    elseif($percentage >= 65 && $percentage < 75){
  
      $grade="C";

    }
    elseif($percentage >= 40 && $percentage < 65){
  
      $grade="D";

    }
    else
    {
 
      $grade="fail";
    }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        input[type="text"] {
    margin: 13px;
    text-align: center;
    border-radius: 20px;
    height: 22px;
}h2 {
    /* margin-top: 14px; */
    padding-top: 12px;
    color:white;
}
sub:hover{
    background:purple;

}
p {
    color: #293a9a;
    FONT-WEIGHT: BOLDER;
    FONT-SIZE: 16PX;
}
input[type="submit"]:hover{
    padding-top:20px;
    
}
        form {
    box-shadow: 7px 20px 52px 21px;
    height: auto;
    width: 390px;
    text-align: center;
    margin-top: 26px;
    margin-left: 480px;
    border-radius: 51px;
    background: #009688;
}
        input[type="text"] {
   margin: -12px;
    text-align: center;
}
div#main {
    border: 42px solid blue;
    border-radius: 51px;
}
.error{
                color:red;
                font-weight: bold;
                font-size: 14px;
            }
form {
    box-shadow: 7px 20px 52px 21px;
    height: auto;
    width: 390px;
    text-align: center;
    margin-top: 26px;
    margin-left: 480px;
     border-radius: 51px;
}

input[type="submit"] {
    margin: 19px;
    color: white  ;
      background: cornflowerblue;
      border-radius: 50%;
    padding: 25px;
}
        </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="main1">
   
    
        <div id="card2">
    <form method="post">
        <h2>File Form</h2>
        <div id='main'>
        <p>English:</p><input type="text" placeholder="English " name="eng" value="<?=$eng;?>"> <br>
       <p>Math:</p> <input type="text" placeholder="Math" name="math"value="<?=$math;?>" /><br>
       <p>Science:</p> <input type="text" placeholder="Science" name="Sci" value="<?=$Sci;?>"/><br>
       <p>Total</p><input type="text" placeholder=" Total" name="Total" value="<?=$total;?>" /><br>
       <p>Percentage</p><input type="text" placeholder=" Percentage" name="Per" value="<?=$percentage;?>"/><br>
      <p>Grade:</p> <input type="text" placeholder=" Grade" name="grade" value="<?=$grade;?>" /><br>
        <input type="submit" name="sub" value="submit">



</div>
</div>
</div>
</body>
</html>