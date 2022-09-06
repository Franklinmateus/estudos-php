<?php

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
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

if(500 > $contasCorrentes['289.345.738-45']['saldo']){
    exibeMensagem("Você não pode sacar."); 
}else{
    $contasCorrentes['289.345.738-45']['saldo'] -= 500;
}

if(500 > $contasCorrentes['123.344.555-67']['saldo']){
    exibeMensagem("Você não pode sacar.");
}else{
    $contasCorrentes['123.344.555-67']['saldo'] -= 500;
}


foreach($contasCorrentes as $cpf => $conta){
    exibeMensagem($cpf ." ". $conta['titular'] ." ". $conta['saldo']);
}