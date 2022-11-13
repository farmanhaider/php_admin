
<?php 
error_reporting(0);
if(isset($_POST['sub'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $hobby=$_POST['hobbie'];
    $gender=$_POST['gender'];
    $comment=$_POST['c'];
    $errname="";
    $erremail="";
    $errpass="";
    $errhobby="";
    $errgender="";
    $errcomment="";
   if(empty($name))
   {
    $errname='<div class="error">Name Cannot be Empty </div>';
   }
   else if(!(preg_match("/^[a-zA-Z ]+$/",$name))){
     $errname='<div class="error">Enter valid name </div>';

   }
   else {
        echo $name ."<br/>";
     }
   if(empty($email))
   {
    $erremail='<div class="error">Email Cannot be Empty </div>';
   }
   else if(!(preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/",$email))){
     $erremail='<div class="error">Enter valid email </div>';

   }
   else {
        echo $email ."<br/>";
     }  
    if(empty($pass))
   {
    $errpass='<div class="error">Password Cannot be Empty </div>';
   }
   else if(!(preg_match("/^(?=.*[A-Z]).{8,24}$/",$pass))){
     $errpass='<div class="error">Password must be atleast 8 characters </div>';

   }
   else {
        echo $pass ."<br/>";
     }
     if(empty($gender)){
 $errgender= '<div class="error">You must select a gender</div>';
} 
else {
        echo $gender ."<br/>";
     }

if(empty($hobby)){
 $errhobby= '<div class="error">You must select a hobbie</div>';
}
else {
        echo $hobby ."<br/>";
     }
     if(empty($comment)){
        $errcomment= '<div class="error"> message shoul not be empty</div>';
     }
        else if(!(preg_match(" /^[a-zA-Z ]{0,10}+$/ ",$comment))){

 $errcomment= '<div class="error"> message limit is only 20 character </div>';
} 

else {
        echo $comment ."<br/>";
     }  
}
$arr=[]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
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
   <div id="card1">
    <table border=2px>
        <th>Sr.no</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Gender</th>
        <th>Hobbies</th>
        <th>Comment</th>

</table>
        <div id="card2">
    <form method="post">
        <div id='main'>
        <input type="text" placeholder="enter the name" name="name"> <?= $errname;?><br>
        <input type="text" placeholder="enter the Email" name="email" /><?= $erremail;?><br>
        <input type="text" placeholder="enter the password" name="password" /><?= $errpass;?><br>
         <label for="gender">Select Gender:</label>
<input type="radio" name="gender" value="Male" >Male
  <input type="radio" name="gender" value="Female">Female
  <?= $errgender;?><br>
<br>
   <label for="hobbie">Select Hobbies:</label><br>
  <input type="radio" name="hobbie" value="Singing" >Singing<br>
  <input type="radio" name="hobbie" value="Reading Books">Reading Books<br>
  <input type="radio" name="hobbie" value="Playing cricket" >Playing cricket<br>
<?= $errhobby;?>
<br><br>
<label for="comment">Comment:</label><br>
<textarea  name="c"></textarea> <?= $errcomment;?><br>


         <input type="submit" name="sub" value="submit">



</div>
</div>
</div>
</body>
</html>