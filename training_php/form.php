
<?php 
error_reporting(0);
if(isset($_POST['sub'])){
    $no1=$_POST['t1'];
    $no2=$_POST['t2'];
    $operator=$_POST['op'];
switch ($operator){
        case "ADD":
          $res= $no1+$no2 ;
            break;

        case "SUB":
            $res= $no1 - $no2;
            break;

        case "MUL":
             $res= $no1 * $no2;;
            break;
        case "DIV":
             $res= $no1 / $no2;;
             break;
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
}



form {
    box-shadow: 10px 20px 20px -11px;
    height: 229px;
    text-align: center;
    margin-top: 178px;
}

input[type="submit"] {
    margin: 19px;
    color: white  ;
      background: cornflowerblue;
}
        </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" placeholder="enter the first Number" name="t1" value="<?= $no1;?>"/><br>
        <input type="text" placeholder="enter the second Number" name="t2" value="<?= $no2;?>"/><br>
         <input type="text" placeholder="Result" name="res" value= "<?= $res;?>"/><br>
         <label for="op">select oprations:</label>

<select  name="op">
     <option selected="selected">select</option>
  <option value="ADD" >ADD</option>
  <option value="SUB" >SUB</option>
  <option value="MUL" >MUL</option>
  <option value="DIV" >DIV</option>
</select>
<br>
         <input type="submit" name="sub" value="submit"> 
</body>
</html>