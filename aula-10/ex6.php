<?php
function inverterString(string $string) {
    $tamanho = strlen($string);
    $invertida = '';
    $i = $tamanho - 1;

    while ($i >= 0) {
        $invertida .= $string[$i];
        $i--;
    }

    return $invertida;
}
echo inverterString("Tiago")
?>