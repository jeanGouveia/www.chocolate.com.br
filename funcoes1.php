<?php
include "localFuncoes.php";

    $funcao = $_POST["funcao"];
    if($funcao == "media"){
        echo "A média é: ". calcuarMedia($_POST["txt_a"], $_POST["txt_b"], $c = $_POST["txt_c"]);    

    }
    if($funcao == "soma"){
        echo "A soma é: ". calculaSoma($_POST["txt_a"], $_POST["txt_b"], $c = $_POST["txt_c"]);    

    }
    if($funcao == "maior"){
        echo "O maior é: ". verificaMaior($_POST["txt_a"], $_POST["txt_b"]);    
    }
    if($funcao == "menor"){
        echo "O menor é: ". verificaMenor($_POST["txt_a"], $_POST["txt_b"]);    
    }
    
?>