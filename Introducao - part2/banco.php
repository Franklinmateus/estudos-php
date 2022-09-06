<?php

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valor) : array
{
    if($valor > $conta['saldo']){
        exibeMensagem("Você não pode sacar."); 
    }else{
        $conta['saldo'] -= $valor;
    }

    return $conta;
}

function depositar(array $conta, float $valor){
    if($valor > 0){
        $conta['saldo'] += $valor;
    }else{
        exibeMensagem("error");
    }
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

$contasCorrentes['872.346.837-23'] = depositar($contasCorrentes['872.346.837-23'], -1100);


foreach($contasCorrentes as $cpf => $conta){
    exibeMensagem($cpf ." ". $conta['titular'] ." ". $conta['saldo']);
}