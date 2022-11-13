<?php
if(file_exists("farman.txt")){
    $fo=fopen("farman.txt","r");
    $data=fread($fo,filesize("farman.txt"));
    echo $data;
}
else{
   $fo=fo_open("farman.txt","w");
    fwrite($fo,"this farman file");
    echo "file created";  
}

?>