<?php 
include "localFuncoes.php";
    $funcao = $_POST["funcao"];
?>
<html>
    <head>
        <title> 
            Formulário 
        </title>
    </head>
    <body>
        <form action="funcoes1.php" method="POST">
            <?php
                if($funcao == "nic"){
                    echo "Nome: " . $_POST["nome"] . "<br>";
                    echo "Idade: " . $_POST["idade"] . "<br>";
                    echo "Cargo: " . $_POST["cargo"];
                }
                if($funcao == "salariob"){
                    echo "O salario bruto do camarada é: R$ " . $_POST["salario"] . ",00";
                }
                if($funcao == "salariol"){
                    echo "O salario liquido do camarada é: R$ " . calculaSalario($_POST["salario"]).",00";
                }
            ?>
            
        </form>
    <body>
</html>
