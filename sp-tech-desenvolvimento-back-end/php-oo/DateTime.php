<?php 

/**
 * -> P     representação de Período: vem antes de dia, mês, ano e semana
 * Y    anos
 * M    meses
 * D    dias
 * W    semanas
 * 
 * -> T     representação de Tempo: vem antes de hora, minuto, e segundo
 * H    horas
 * M    minutos
 * S    segundos
 */

$data = new DateTime();
echo 'Data e hora agora: ' . $data->format('d-m-Y H:i:s') . PHP_EOL;

// intervalo de 5 anos, 10 meses, 5 dias, 10 horas, 50 minutos e 10 segundos
$intervalo = new DateInterval('P5Y10M5DT10H50M10S');


$data->add($intervalo); // adiciona o intervalor
echo PHP_EOL . 'Acrescentando o intervalo temos: ' . $data->format('d-m-Y H:i:s') . PHP_EOL;

$data = new DateTime();

$data->sub($intervalo); // subtrai  o intervalor
echo PHP_EOL . 'Subtraindo o intervalo temos: ' . $data->format('d-m-Y H:i:s') . PHP_EOL;
