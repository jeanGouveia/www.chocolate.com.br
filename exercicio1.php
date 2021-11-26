<html>
    <head>
        <title> 
            Exercício1 
        </title>
    </head>
    <body>
        <form action="exercicio1Auxiliar.php" method="POST">

            <p>
                Entre com os dados do funcionário: <br>
                Nome: <input type="text" size="30" name="nome" ><br>
                Idade: <input type="text" size="10" name="idade" ><br>
                Cargo: <input type="text" size="30" name="cargo" ><br>
                Salário Bruto: <input type="text" size="10" name="salario" ><br>
            </p>
            <p>
                Qual dado você quer imprimir? <br>
                <input type="radio" name="funcao" value="nic"> Nome, Idade e Cargo
                <input type="radio" name="funcao" value="salariob"> Salário Bruto
                <input type="radio" name="funcao" value="salariol"> Salário Liquido
            </p>
            <p>
                <input type="submit" value="Enviar">
            </p>
        </form>
    <body>
</html>