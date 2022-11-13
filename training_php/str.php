<?php
    
    for($i = 0; $i < 5; $i++) {
        for($j = 1; $j < 5 - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for($k = 0; $k <= $i; $k++) {
            echo "*";
        }
        echo "<br>";
    }
        
?>