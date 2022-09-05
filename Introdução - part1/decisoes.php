<?php

$idade = 14;
$numPessoas = 1;

if($idade >= 18){
    echo "Pode entrar, você tem $idade anos";
}elseif($idade >=16 && $numPessoas > 1){
    echo "Pode entrar, você tem $idade anos e está acompanhado";
}else{
    echo "Não pode entrar, você só tem $idade anos";
}
