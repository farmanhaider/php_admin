<?php 
error_reporting(0);
  extract($_POST);
    $tmpname=$_FILES['att']['tmp_name'];
  $name=$_FILES['att']['name'];
  $ext=pathinfo($name,PATHINFO_EXTENSION);
  $errname="";
    $erremail="";
    $errpass="";   
    $errgender= "";
    $errage= "";
    $errcity= "";
    $errimage="";
        if(isset($sub)){
          if(empty($fname))
          {
           $errname='<div class="error">Name Cannot be Empty </div>';
          }
          else if(!(preg_match("/^[a-zA-Z ]+$/",$fname))){
            $errname='<div class="error">Enter valid name </div>';
       
          }
          else {
           
            }
            if(empty($email))
          {
           $erremail='<div class="error">email Cannot be Empty </div>';
          }
          else if(!(preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/",$email))){
            $erremail='<div class="error">Enter valid email </div>';
       
          }
          else {
           
            }
  if(empty($pwd))
   {
    $errpass='<div class="error">Password Cannot be Empty </div>';
   }
   else if(!(preg_match("/^(?=.*[A-Z]).{8,24}$/",$pwd))){
     $errpass='<div class="error">Password must be atleast 8 characters </div>';

   }
   else {
        
     }

     if(empty($gender)){
      $errgender= '<div class="error">You must select a gender</div>';
     } 
     else {
           
          }
          if(empty($age)){
            $errage= '<div class="error">Age Cannot be Empty</div>';
           } 
           else {
                 
                }
                if(empty($city)){
                  $errcity= '<div class="error">City Cannot be Empty</div>';
                 } 
                 else {
                       
                      }


          if(empty($att))
          {
             $errimage='<div class="error">Please select a image</div>';
          }
else{

}
            if(empty($email))
            {
              
            }
            else if(is_dir("user/$email")){
            $errMsg="User already registered";
          }
         
        else{
          mkdir("user/$email");
            $fn="images-".rand()."-".time().".$ext";
            file_put_contents("user/$email/details.txt","$fname\n$pwd\n$gender\n$age\n$city\n$fn");
         
          if($ext=="jpg"||$ext=="png"){
            if(move_uploaded_file($tmpname,"user/$email/$fn")){
                $succMsg="Uploaded Sucessfully";
            }
          }
            else{
                $errMsg="Uploading Error";

            }
            $succMsg="$email.user Registred Sucessfully click on login";//redirection
        }
           
        }
              
              
            
       
        

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.104.2" />
    <title>Modals · Bootstrap v5.2</title>

    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.2/examples/modals/"
    />

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="signup.js"></script>
    <link rel="stylesheet" href="regis.css">
    <!-- Custom styles for this template -->
    <link href="modals.css" rel="stylesheet" />
  </head>
  <body>
   <h1>Admin pannel</h1>
    <form method="post"  enctype="multipart/form-data">
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
 <div id="card">
   
        <legend>Register Form</legend>
        <input
        id="name"
          type="text"
          name="fname"
          placeholder="Enter thr fullname"
        /><?= $errname;?><br /><br />
        <input
        id="email"
          type="email"
          name="email"
          placeholder="Enter thr email@john"
        /><?= $erremail;?><br /><br />
        <input
          id="pwd"
          type="text"
          name="pwd"
          placeholder="Enter thr password"
        /><?= $errpass;?><br /><br />
        <label>
            <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Gender</label>
    <input type="radio"  name="gender" value="male"> Male 
    <input type="radio"  name="gender" value="female"> Female 
    <?= $errgender;?></div>
<input
 id ="age"
          type="text"
          name="age"
          placeholder="Enter thr age"
        /> <?= $errage;?><br /><br />
<input
 id="city"
          type="text"
          name="city"
          placeholder="Enter thr city"
        /> <?= $errcity;?><br /><br />
      Upload Image:
       

        <input type="file" name="att" value=<?= $tmpname;?> >
     
      </label> <?= $errimage;?><br>
       
        <input type="checkbox" name="remember_me" id="remember_me">
        Remember me 
      </label><br>
        <input type="submit"  name='sub'>
        
        <p> Already have account? <a href="index.php">Login</a></p>
        
    </form>
      </div>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

