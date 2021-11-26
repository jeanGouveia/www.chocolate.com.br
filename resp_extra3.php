<?php
    $a = $_POST["nomeVariavel_a"];
    
    if($a >= 7){
        echo "Passou direto!";
    }else if($a>=5){
        echo "Esta de reculperação!";
    }else
        echo "Repetiu de ano!";
        

?>