<?php

  echo "Digite um número: \n";
  $num = intval(readline(''));
  echo "Digite outro número: \n";
  $num2 = intval(readline(''));
  
  
  $soma = $num+$num2;
  $subtracao = $num-$num2;
  $mult = $num*$num2;
  $div = $num/$num2;
  
  
  echo "Resultado dos cálculos: \n","Soma: \n", $soma,"\nSubtração: \n", $subtracao,"\nMultiplicação : \n", $mult,"\nDivisão:  \n", $div;