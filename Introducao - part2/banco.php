<?php

require_once 'funcoes.php';

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

titularLetrasMaiusculas($contasCorrentes['872.346.837-23']);

$contasCorrentes['289.345.738-45'] = sacar($contasCorrentes['289.345.738-45'], 500);

foreach($contasCorrentes as $cpf => $conta){
    exibeMensagem(
        "$cpf {$conta['titular']} {$conta['saldo']}"
    );
}