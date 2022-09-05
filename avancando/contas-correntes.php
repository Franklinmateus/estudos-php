<?php

$conta1 = [
    'titular' => 'Franklin',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Marlon',
    'saldo' => 2000
];

$conta3 = [
    'titular' =>'Mariana',
    'saldo' => 100
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}