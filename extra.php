<html>
    <head>
        <title> 
            Estamos estudando Formulário 
        </title>
    </head>
    <body>
        <form action = "">
            <p>
                <b> Digite seu e-mail: <input type="email" name="txt_e-mail" size="30" ></b>
                <input type="submit" value="Enviar" name="btn_Enviar">
            </p>
            <p>
                Qual o curso você gostaria de aprender <br>
                <input type="radio" name="curso" value="logica"> Lógica de Programação
                <input type="radio" name="curso" value="logica"> Java
                <input type="radio" name="curso" value="logica"> MySql
                <input type="radio" name="curso" value="logica"> Criando uma loja virtual
                <input type="radio" name="curso" value="logica"> Delphi
            </p>
            <p>
                Qual a melhor linguagem de programação<br>
                <select name="melhorCurso" size="1">
                        <option value="Delphi">Delphi</option>
                        <option value="Delphi">Java</option>
                        <option value="Delphi">VBNet</option>
                        <option value="Delphi">PHP</option>
                        <option value="Delphi">C#</option>
                        <option value="Delphi">C</option>
                </select>
            </p>
            <p>
                Digite o seu comentário no espaçõ abaixo: <br>
                <textarea name="comentarios" rows="6" cols="42" ></textarea>
            </p>
            <p>
                Deixe seus dados para contato<br>
                Nome: <input type="text" size="35" maxlength="200" name="nome" ><br><br>
                Fone: <input type="number" size="35" maxlength="200" name="fone" ><br><br>
                E-mail: <input type="email" size="35" maxlength="200" name="e-mail" ><br><br>
                Senha: <input type="password" size="35" maxlength="200" name="senha" ><br><br>
            </p>
            <p>
                <input type="checkbox" name="noticias" value="not">Desejo receber notícias das novidades<br>
            </p>
            <P>
                <input type="submit" value="enviar dados">
                <input type="reset" value="limpar o formulário">
            </P>
        </form>
    <body>
</html>