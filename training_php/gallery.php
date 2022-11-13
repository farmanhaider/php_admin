<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            padding:5px;
            border-radius:10px;
            box-shadow:5px 1px 7px 3px;
        }
        </style>

</head>
<body>
    <h1>Sports Gallery</h1>
    <div>
        <?php
        $gr=scandir("images");
        foreach($gr as $d){
            if($d!=".."&&$d!=".")
            {
              ?>
              <img src="images/<?=$d;?>" width="200" height="200"/>
              <?php 
            }
        }
        ?>
        </div>
</body>
</html>