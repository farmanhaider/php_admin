<?php 
  session_start();
  $sid=$_SESSION['uid'];
  if(empty($sid)){
    header("location:index.php");
  }
  //find the user image path 
  $fo=fopen("user/$sid/details.txt","r");
  
 fgets($fo);fgets($fo);fgets($fo);fgets($fo); fgets($fo); 
  $path=trim(fgets($fo));


  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    body {
    justify-content: center;
    align-items: center;
    box-shadow: 4px 2px 11px 1px;
    margin-top: 172px;
    text-align: center;
    border-radius: 0px 79px;
    background: #ffffffff;
    opacity: 134.5;
    color: #000000;
    height: 430px;
}

a {
    text-decoration: none;
    background: #012f54;
    color: white;
    padding: 7px;
    margin-top: 126px;
    border-radius: 92px;
    width: 200px;
    height: 50px;
}

img {
    /* box-shadow: 10px 20px 30px 0px; */
    /* background: #e91e63; */
    /* border-radius: 56%; */
    width: 195px;
    height: 188px;
}
h4 {
    text-align: justify;
    margin-left: 528px;
    BORDER: 1PX SOLID;
    border: none;
    WIDTH: 167PX;
    padding-left: 29px;
    background-color: #040404;
    border-radius: 41px;
    color: white;
}
h2 {
    color: white;
    border-radius: 0px 2px 119px 112px;
    box-shadow: -2px 1px 30px -10px;
    width: 1090px;
    margin-left: 54px;
    margin-top: 10px;
    background: #141111;
}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Welcome <b><?= $sid;?></b> </h2>
    <img src="user/<?= "$sid/$path"?>" width="200" height="200"/> <br/>
    <div id="detail">
    <h4> Name:<?php 
    
    $fo=fopen("user/$sid/details.txt","r"); echo fgets($fo);
    
        
    ?>
    </h4> 
    <h4> Gender:<?php 
    
    $fo=fopen("user/$sid/details.txt","r"); 
    fgets($fo);
    fgets($fo);
    echo fgets($fo);
    
        
    ?>
    </h4> 
    <h4> Age:<?php 
    
    $fo=fopen("user/$sid/details.txt","r"); 
    fgets($fo);
    fgets($fo);
    fgets($fo);
    echo fgets($fo);     
    ?>
    </h4> 
    <h4> City:<?php 
    
    $fo=fopen("user/$sid/details.txt","r"); 
    fgets($fo);
    fgets($fo);
    fgets($fo);
    fgets($fo);
   
    echo fgets($fo)
    
        
    ?>
    </h4> 
    
</div>
    
    

    <a href="logout.php"> Logout </a>

</body>
</html>