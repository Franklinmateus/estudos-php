<?php

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

function sacar($conta, $valor){
    if($valor > $conta['saldo']){
        exibeMensagem("Você não pode sacar."); 
    }else{
        $conta['saldo'] -= $valor;
    }

    return $conta;
}

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

$contasCorrentes['289.345.738-45'] = sacar($contasCorrentes['289.345.738-45'], 500);
$contasCorrentes['123.344.555-67'] = sacar($contasCorrentes['123.344.555-67'], 500);


foreach($contasCorrentes as $cpf => $conta){
    exibeMensagem($cpf ." ". $conta['titular'] ." ". $conta['saldo']);
}