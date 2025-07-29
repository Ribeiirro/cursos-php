<?php

/**
 * Crie uma função chamada divisao() que deverá receber dois números. Na função,
 * verifique se algum dos números passados por parâmetro é igual à 0, caso positivo,
 * lance uma exceção.
 * 
 * Em seguida, escreva um algoritmo responsável por executar a função divisao()
 * forçando-a lançar a exceção (passando 0 em algum parâmetro) e realize o
 * tratamento e capture através do Try Catch
 */

function divisao(int $dividendo, int $divisor) {
    if ($dividendo === 0 || $divisor === 0) {
        throw new Exception("Não aceitamos o nº 0!\n");
    }

    return $dividendo / $divisor;
}

$dividendo = 0;
$divisor = 2;

try {
    $resultado = divisao($dividendo, $divisor);
    echo 'O resultado da divisão de ' . $dividendo . ' e ' . $divisor . ' é ' . $resultado;
} catch (Exception $err) {
    echo $err->getMessage();
    die();
}