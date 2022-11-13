
<?php 
error_reporting(0);
extract($_POST);

if(isset($sub)){
    
      if(file_exists($email.".txt")){
        $f=fopen($email.".txt","r");
        $data=fread($f,filesize($email.".txt"));
      }
      else{
       $fo=fopen($email.".txt","w");
       fwrite($fo,"Email:.$email\n");
        fwrite($fo,"Name:.$name\n");
         fwrite($fo,"Age:.$age\n");
          fwrite($fo,"city:.$city\n");
        echo "user created";
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
        <p>Email:</p><input type="text" placeholder="enter email " name="email" value="<?=$email;?>"> <br>
       <p>Name:</p> <input type="text" placeholder="enter you name" name="name" value="<?=$name;?>"><br>
       <p>Age:</p> <input type="text" placeholder="enter your age" name="age" value="<?=$age;?>"><br>
       <p>City:</p><input type="text" placeholder=" enter your city" name="city"value="<?=$city;?>"><br>
        <input type="submit" name="sub" value="submit"><br>
<textarea>
   <?=@$data;?> 
</textarea>


</div>
</div>
</div>
</body>
</html>