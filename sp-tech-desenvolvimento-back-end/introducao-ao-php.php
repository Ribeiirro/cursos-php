<?php

$categorias = [];
$categorias = 'Infantil';
$categorias = 'adolescente';
$categorias = 'adulto';
$categorias = 'idoso';

$nome = 'Eduardo';
$idade = 20;

if ($idade >= 6 && $idade <= 12) {
    for($i = 0; $i <= count($categoria); $i++)
    {
        if($categorias[$i] == 'Infantail') {
            echo "O nadador " . $nome. "compote na categoria " . $categorias[$i];
        }
    }
} else if ($idade >= 13 && $idade <= 18) {
} else {
}
