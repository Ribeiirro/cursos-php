<?php
session_start();

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if (empty($nome)) {
    $_SESSION['mensagem de erro'] = 'O nome não pode estar vazio';
    header('location: form.php');
    return;
} else if (strlen($nome) < 2) {
    $_SESSION['mensagem de erro'] = 'O nome deve conter no minino 2 caracteres';
    header('location: form.php');
    return;
} else if (strlen($nome) > 40) {
    $_SESSION['mensagem de erro'] = 'O nome é muito extenso';
    header('location: form.php');
    return;
} else if (!is_numeric($idade)) {
    $_SESSION['mensagem de erro'] = $idade . " não é valido para idade";
    header('location: form.php');
    return;
}



var_dump([
    $nome,
    $idade
]);
