<html>
    <head>
        <title> 
            Formulário 
        </title>
    </head>
    <body>
        <form action="funcoesAuxiliar.php" method="POST">
            <p>
                Qual operação você quer efetuar? <br>
                <input type="radio" name="funcao" value="media"> Média
                <input type="radio" name="funcao" value="soma"> Soma
                <input type="radio" name="funcao" value="maior"> Maior
                <input type="radio" name="funcao" value="menor"> Menor
            </p>
<!--
            <p>
                Deixe seus dados para contato: <br>
                Valor de a: <input type="text" size="10" name="txt_a" ><br>
                Valor de b: <input type="text" size="10" name="txt_b" ><br>
                Valor de c: <input type="text" size="10" name="txt_c" ><br>
            </p>
-->
            <p>
                <input type="submit" value="Enviar">
            </p>
        </form>
    <body>
</html>