<?php

declare(strip_types=1);
class ContaBancaria
{

    //public - private - protected

    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private  string $numeroConta;
    private float $saldo;

    public function __construct(string $banco, string $nomeTitular, string $numeroAgencia, string $numeroConta, float $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function obterSaldo()
    {
        $this->saldo;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
        return 'Depósito de R$' . $valor . 'realizado.';
    }

    public function sacar($valor)
    {
        $this->saldo -= $valor;
        return 'Saque de R$' . $valor . 'realizado.';
    }
}

$conta = new ContaBancaria(
    //Banco
    'Banco do Brasil',
    //Nome usuario
    'Gustavo Fraga',
    //Agencia
    '5464',
    //Numero conta
    '798798789-98',
    //Saldo
    3000.00
);

echo $conta->obterSaldo(); // 0

echo PHP_EOL;

echo $conta->depositar(300.00);

echo PHP_EOL;

echo $conta->obterSaldo(); // 300

echo PHP_EOL;

echo $conta->sacar(150.00);

echo PHP_EOL;

echo $conta->obterSaldo(); // 150