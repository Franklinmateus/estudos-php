<?php

$peso = 50;
$altura = 1.80;
$imc = $peso/$altura**2;

if($imc < 18.5){
    echo "Classificação: Magreza! Seu IMC é: $imc";
}elseif($imc >= 18.5 && $imc <= 24.9){
    echo "Classificação: Peso Normal! Seu IMC é: $imc";
}elseif($imc >= 25 && $imc <= 29.9){
    echo "Classificação: Sobrepeso! Seu IMC é: $imc";
}elseif($imc >= 30 && $imc <= 34.9){
    echo "Classificação: Obesidade I! Seu IMC é: $imc";
}