<?php
    $a = $_POST["numero"];
    
    if($a>=7){
            echo "Aprovado!";
    }elseif($a>=5){
        echo "Está de recuperação!";
    }else{
        echo "Reprovado!";
    }       
?>