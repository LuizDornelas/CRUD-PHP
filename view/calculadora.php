<?php
    $valor1 = $_GET["num1"];
    $valor2 = $_GET["num2"];
    $operacao = $_GET["operacao"];

    if($operacao == "soma"){
        $result = $valor1 + $valor2;
        echo "O resultado da soma entre $valor1 e $valor2 é igual a '$result'";
    }
    elseif($operacao == "subtracao"){
        $result = $valor1 - $valor2;
        echo "O resultado da subtração entre $valor1 e $valor2 é igual a '$result'";
    }
    elseif($operacao == "divisao"){
        if($valor2 == 0){
            echo "Não existe divisão por zero!";
        }
        else{
            $result = $valor1 / $valor2;
            echo "O resultado da divisão entre $valor1 e $valor2 é igual a '$result'";
        }        
    }
    else{
        $result = $valor1 * $valor2;
        echo "O resultado da subtração entre $valor1 e $valor2 é igual a '$result'";
    }
?>