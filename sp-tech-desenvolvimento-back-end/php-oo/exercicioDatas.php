<?php
/**
 * Cire uma data com a classe DateTime com a data e hora atuais. Em seguida,
 * subtraia 5 dias, 10 horas e 50 minutos dessa data e exiba o resultado no
 * seguinte formato:
 * dia/mês/ano - hora:minuto:segundo
 */

$data = new DateTime(); // criação da data
$intervalo = new DateInterval('P5DT10H50M'); // criação do intervalo que será subtraído

$data->sub($intervalo); // subtraindo o intervalo da data

echo $data->format('d/m/Y - H:i:s'); // exibindo o resultado;

/**
 * É possível encadear os métodos da clase DateTime da seguinte forma:
 * `echo $data->sub($intervalo)->format('d/m/T - H:i:s');`
 * Dessa maneira, em uma única linha é realizado a subtração do intervalo e já
 * é mostrado o resultado formatado.
 */