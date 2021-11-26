<?php
    require("Conexao.php");
    
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    //instância de conexão, com abertura da conexão
    $instConexao = new Conexao();
    //pega a conexão para acesso
    $conexao = $instConexao->getConnection();
    if(empty($senha) || is_null($senha))
        header('location:date.phtml');
    else
        $senha = md5($senha);
    
    $sql = "SELECT id FROM Usuario WHERE email = '" . $usuario . "' AND senha = '" . $senha . "';";  
    $result = $conexao->query($sql);
    //echo '<pre>'; print_r($result->fetch_assoc()['id']); echo '</pre>'; exit;
    if($result->fetch_assoc()['id'] >= 1)
    {
        echo "Usuário Cadastrado!";
    }
    else
    {
        echo "Usuário não Cadastrado!";
    }
    

    



?>