

<?php 

    $x = 10;
    $y = 5.5;
    $z = 2.787;
    $soma = $x + $y + $z;
    echo "$soma \n";#18.287
    $soma = $x + (int)$y + (int)$z;
    echo "$soma \n";#17
    $soma = (int)( $x + $y + $z);
    echo $soma;#18
    
