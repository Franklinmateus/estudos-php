<?php

$contasCorrentes = [
    '872.346.837-23' => [
        'titular' => 'Franklin',
        'saldo' => 1000
    ], 
    '289.345.738-45' => [
        'titular' => 'Marlon',
        'saldo' => 2000
    ], 
    '123.344.555-67' => [
        'titular' =>'Mariana',
        'saldo' => 100
    ]
];

$contasCorrentes['888.344.555-68'] = [
    'titular' => 'Ana',
    'saldo' => 0
];

foreach($contasCorrentes as $cpf => $conta){
    echo $cpf ." ". $conta['titular'] . PHP_EOL;
}