<?php 


$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)) {
    echo ' O nome não pode estar vazio';
    return;
}

if(strlen($nome) < 2) {
    echo 'O nome deve conter no minino 2 caracteres';
    return;
}

if(strlen($nome) > 40) {
    echo 'O nome é muito extenso';
    return;
}


if(!is_numeric($idade)) {
    // echo 'Informe um número para idade';
    echo $idade . " não é valido para idade";
    return;
}



var_dump([
      $nome,
    $idade
]);