<?php

$contasCorrentes = [
    872346837 => [
        'titular' => 'Franklin',
        'saldo' => 1000
    ], 
    289345738 => [
        'titular' => 'Marlon',
        'saldo' => 2000
    ], 
    123344555 => [
        'titular' =>'Mariana',
        'saldo' => 100
    ]
    ];

foreach($contasCorrentes as $cpf => $conta){
    echo $cpf . PHP_EOL;
    echo $conta['titular'] . PHP_EOL;
}