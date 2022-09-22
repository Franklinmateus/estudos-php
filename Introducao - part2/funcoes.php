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

function depositar(array $conta, float $valor)
{
    if($valor > 0){
        $conta['saldo'] += $valor;
    }else{
        exibeMensagem("error");
    }
}

function titularLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}
