<?php 
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
                if($funcao == "media"):
            ?>
            <p>
                Digite os valores para calcular a média: <br>
                Valor de a: <input type="text" size="10" name="txt_a" ><br>
                Valor de b: <input type="text" size="10" name="txt_b" ><br>
                Valor de c: <input type="text" size="10" name="txt_c" ><br>
            </p>
            <?php
                
                endif;
                if($funcao == "soma"){
            ?>
            <p>
                Digite os valores para calcular a soma: <br>
                Valor de a: <input type="text" size="10" name="txt_a" ><br>
                Valor de b: <input type="text" size="10" name="txt_b" ><br>
                Valor de c: <input type="text" size="10" name="txt_c" ><br>
            </p>
            <?php
                }
                if($funcao == "maior"){
            ?>
            <p>
                Digite os valores para calcular o maior: <br>
                Valor de a: <input type="text" size="10" name="txt_a" ><br>
                Valor de b: <input type="text" size="10" name="txt_b" ><br>
            </p>
            <?php
                }
                if($funcao == "menor"){
            ?>
            <p>
                Digite os valores para calcular o menor: <br>
                Valor de a: <input type="text" size="10" name="txt_a" ><br>
                Valor de b: <input type="text" size="10" name="txt_b" ><br>
            </p>
            <?php
                }
            ?>
            <p>
                <input type="hidden" name="funcao" value="<?php echo $funcao ?>">
                <input type="submit" value="Enviar">
            </p>
        </form>
    <body>
</html>
