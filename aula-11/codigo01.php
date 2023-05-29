<?php
    require_once"loja.php";
      
    $estoque = new Loja;
    

    $estoque->adicionar("Bola", 100);
    $estoque->adicionar("Meia", 50);
    $estoque->adicionar("Vibrador", 150);
    $estoque->adicionar("Bola", 40);
    echo "Número de cada item que tenho \n";
    foreach($estoque->item as $key => $value){
        echo "o produto $key possuí em estoque $value peças \n";
    }
      
?>