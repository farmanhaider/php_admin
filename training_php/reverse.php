
<?php 
error_reporting(0);
if(isset($_POST['sub'])){
    $num=$_POST['num'];
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
    margin: 13px;
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
        <h2>reverse of number</h2>
        <div id='main'>
        <input type="text" placeholder="Enter The Number " name="num" value="<?=$t;?>"> 
        <input type="text" placeholder="Reverse of number" name="rev" value="<?=$rev;?>" />
        <input type="text" placeholder="sum of number" name="sum"  value="<?= $sum?>" />

       
        <input type="submit" name="sub" value="submit">



</div>
</div>
</div>
</body>
</html>