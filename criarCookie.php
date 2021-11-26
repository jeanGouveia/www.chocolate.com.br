<html>
    <head>
        <title> 
            Cookie 
        </title>
    </head>
    <body onload="ler()">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

        <form action="escreveCookie.php" method="POST" >
            <p>
                Digite a informação do Cookie: <input type="text" size="10" name="valor" ><br>
            </p>
            <?php
                $valor = 
                // Criando Cookies
                $nome = "masterdaweb";
                $valor = "Cookie Criado com Sucesso";
                $expira = time() + 3600;
                setcookie($nome, $valor, $expira);
            ?>
            <p>
                <input type="submit" value="Enviar">
            </p>
        </form>
    <body>
    <script>
     function ler()
        {
        console.log("alua");
            var settings =
                {
                    "async": true,
                    "crossDomain": true,
                    "url": "http://dev.adm.ativo.com/corridavirtual/escrevecookie?nr_peito=500&id_evento=4028&nr_documento=01506459021",
                    "method": "GET",
                    "headers": {
                        "Content-Type": "application/x-www-form-urlencoded"                            
                    }
                };
                $.ajax(settings).done(function (response) {                        
                    console.log(response);
                });
        }
 </script>
</html>


