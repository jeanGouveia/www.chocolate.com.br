<?php
    $a = $_POST["numero"];
    /*
    for($i=1;$i<=$a; $i++){
        echo $i."<br>";
    } 
    */
    /*
    $i = 1;
    while($i<=$a){
        echo $i."<br>";
        $i++;
    }
    */
    $i = 0;
    do{
        echo $a."x".$i."=".$a*$i."<br>";
        $i++;
    }while($i<=10)
?>