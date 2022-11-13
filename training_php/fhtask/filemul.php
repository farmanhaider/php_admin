<?php 
error_reporting(0);

  if(isset($_POST['sub'])){
  $tmpname=$_FILES['att']['tmp_name'];
  $name=$_FILES['att']['name'];
  //$ext=pathinfo($name,PATHINFO_EXTENSION);

     if(empty($tmpname))
     {
        $errMsg="Please select a image";

     }
     else{
      //$fn="images-".rand()."-".time().".$ext";
      //if($ext=="jpg"||$ext=="png"){
        $key=0;
        for($i=0;$i<count($tmpname);$i++){
        if(move_uploaded_file($tmpname[$i],"attach/".$name[$i])){
            $key=1;
        }
        if($key==1)
        {
            $succMsg="Uploaded Sucessfully";
        }
      //}
        else{
            $errMsg="Uploading Error";

        }
    }
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
    <style>
     
      section {
        display: flex;
      }

     
   
h1 {
    margin-left: 540px;
}


element.style {
}

legend {
    float: left;
    text-align: center;
    width: 31%;
    margin-left: 123px;
    margin-top: zzz38px;
    /* padding: 0; */
    margin-bottom: 0.5rem;
    font-size: calc(1.275rem + .3vw);
    line-height: inherit;
    margin-bottom: 23px;
}
      div#card {
        /*margin-left: 91px;*/
        margin-top: 38px;
    
      }
      div#card {
    margin-left: 440px;
}
.alert-d{
  color:red;

}
.alert-d1{
  color:green;

}
      div#card {
        box-shadow: 10px 20px 30px 7px;
        width: 431px;
        padding-left: 20px;
        border-radius: 20px;
       /* margin: 20px;*/
       
      }

      div#card {
       
    height: auto;
}
      

      

button {
    border-radius: 16px;
    color: #ffff;
    background-color: cornflowerblue;
}

legend {
    padding-left: 163px;
    /* border: solid grey; */
}

button {
    border: none;
}

button {
    margin-left: 7px;
    width: 364px;
    margin-top: 14px;
}

button {
    height: 38px;
}

fieldset {}

tr {
    padding: 38px;
    width: 219px;
}


      .navbar {
        color: azure;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
    
legend {
    /* padding-left: 118px; */
    border-radius: 29px 10px 29px 11px;
    color: white;
    background: cornflowerblue;
    /* border: solid grey; */
    box-shadow: 2px 1px 19px -1px;
    margin-top: 12px;
    width: 41px;
    margin-left: 92px;
    padding-left: 15px;
    padding-bottom: 3px;
}
legend {
    float: left;
    width: 41%;
    /* padding: 0; */
    margin-bottom: 0.5rem;
    font-size: calc(1.275rem + .3vw);
    line-height: inherit;
}
input[type="submit"] {
    border: none;
    background: cornflowerblue;
    color: white;
    width: 196px;
    margin-left: 106px;
    height: 41px;
    border: radius: ;
    border-radius: 42px;
}
.alert{
  color:red;
  padding: 32px;
    padding-left: 136px;
    box-shadow: 4px 9px 10px -8px;
    width: 262px;
}
.alert1{
  color:green;
   padding: 32px;
    padding-left: 136px;
    box-shadow: 4px 9px 10px -8px;
    width: 262px;
}
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

element.style {
}
div#card{
height:300px;
}
p {
    margin: 20px;
    margin-left: 91px;}
      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, 0.1);
        border: solid rgba(0, 0, 0, 0.15);
        border-width: 1px 0;
        box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
          inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -0.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .modal-content.rounded-4.shadow {
        padding: 26px;
      }
      button#btn {
        background: cornflowerblue;
        color: white;
      }
 input#name {
        /* padding-left: 60px; */
        text-align: center;
        width: 387px;
        border-radius: 16px;
        height: 33px;
        /* margin-left: 11px; */
      }
      input[type="file"] {
    background: cornflowerblue;
    margin: 20px;
    margin-left: 10px;
    height: 44px;
    font-size: 20px;
    color: floralwhite;
    border-radius: 0px 10px;
}

input[type="button"] {
    background-color: red;
}

input[type="file-upload-button"] {
    background: black;
}

input::file-selector-button {
    background-color:#ff0707;
color:white;
  border:none;
    border-radius:8px;
    height:60px;
    text-align:center;
}
      input#age {
        /* padding-left: 60px; */
        text-align: center;
        width: 387px;
        border-radius: 16px;
        height: 33px;
        /* margin-left: 11px; */
      }
       input#city {
        /* padding-left: 60px; */
        text-align: center;
        width: 387px;
        border-radius: 16px;
        height: 33px;
        /* margin-left: 11px; */
      }
        input#pwd {
        /* padding-left: 60px; */
        text-align: center;
        width: 387px;
        border-radius: 16px;
        height: 33px;
        /* margin-left: 11px; */
      }
.mb-3 {
    margin-top: 1px;
    margin-bottom: 15px;
}
      input#email {
        /* padding-left: 60px; */
        text-align: center;
        width: 387px;

        border-radius: 16px;
        height: 33px;
        /* margin-left: 11px; */
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="modals.css" rel="stylesheet" />
  </head>
  <body>
   <h1>Admin pannel</h1>
 <div id="card">
    <form method="post" enctype="multipart/form-data">
       
        <legend>upload File</legend>
       

        <input type="file" name="att[]"  multiple />
     
      </label><br>
        <input type="submit"  name='sub' value="UPLOAD">
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
    </form>
      </div>
     
      

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

