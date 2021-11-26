<?php

function calcuarMedia($valor1, $valor2, $valor3){
    return ($valor1 + $valor2 + $valor3)/3;
}

function calculaSoma($valor1, $valor2, $valor3){
    return ($valor1 + $valor2 + $valor3);
}

function verificaMaior($valor1, $valor2){
    if($valor1>$valor2){
        return $valor1;
    }else{
        return $valor2;
    }
}

function verificaMenor($valor1, $valor2){
    if($valor1<$valor2){
        return $valor1;
    }else{
        return $valor2;
    }
}

function calculaSalario($valor1){
    return (($valor1 * 0.38) + ($valor1 * 1.2) )* 0.85;
}

function diasDias($valor){
    return date('d') - $valor;
}
function

?>