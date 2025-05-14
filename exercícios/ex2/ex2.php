<?php

function volume_caixa() {

    echo "Digite o comprimento da caixa: ";
    $comprimento = floatval(trim(fgets(COMPRIMENTO_DE_CAIXA)));

    echo "Digite a largura da caixa: ";
    $largura = floatval(trim(fgets(LARGURAIN)));

    echo "Digite a altura da caixa: ";
    $altura = floatval(trim(fgets(ALTURA)));

    $volume = $comprimento * $largura * $altura;
    echo "O volume da caixa retangular é: " . number_format($volume, 2) . "\n";
}

?>