<?php

echo "=====MENU=======\n";
echo "1- Incluir \n";
echo "2- Alternar \n";
echo "3- Excluir \n";
echo "4- Sair \n";
$opcao = readline("Digite um numero de 1-4: ");

switch($opcao)
{
    case 1:
        echo "Incluir \n";
        break;
    case 2:
        echo "Alternar \n";
        break;
    case 3:
        echo "Excluir \n";
        break;
    case 4:
        echo "Sair \n";
        break;
};
if ($opcao>4){
    echo"Opção invalida";
}
?>