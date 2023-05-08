<?php
    echo "Type a value: "; 
    $value = readline();

    for ($i=1; $i < $value; $i++) { 
       if($i%2==0){echo "$i \n";}
    }

