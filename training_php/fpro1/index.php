<?php
  error_reporting(0);
  extract($_POST);
  if(isset($sub)){
  
    if(is_dir("user/$email")){
        $fo=fopen("user/$email/details.txt","r");
        fgets($fo);
        $pass=trim(fgets($fo));//in 2nd line there is password
       
        if(empty($email)){
          $errMsg="Enter email and password";
        }
      elseif($pwd==$pass){
           session_start();
          $_SESSION['uid']=$email;
          header("location:account.php");
          $succMsg="Login Sucessfull";
        }
        else {
            $errMsg="Enter correct password";
        }
    }
    else {
        $errMsg="Enter correct Email";
    }
  }
?>

   
<!DOCTYPE html>
<html lang="en">
<head>
  

   <link rel="stylesheet" href="index.css">
</head>
<body>
       <h1>Admin pannel</h1>
        <?php 
        if($errMsg!=''){
        ?>
      <div class="alert"><?= $errMsg;?></div>
     
        <?php 
        
        }
        if($succMsg!=''){
        ?>
      <div class="alert1"><?= $succMsg;?></div>
     
        <?php 
        
        }
        ?>
       <form id="form1" method="post">
    <div id="card">
        <legend>Login Form</legend>
        <input
          type="email"
          id="email"
          name="email";
          placeholder="Enter thr email@john"
        /><br /><br />
        <input
          type="text"
          id="pwd"
           name="pwd";
          placeholder="Enter thr password"
        /><br /><br />
        <input type="submit"  name='sub' value="Login">
        <p>Create account? <a href="  regis.php">Signup</a></p>
        <?php 
        if($errMsg!=''){
        ?>
        <?php 
        }
    ?>
    </form></div>
</body>
</html>