<?php
    require_once 'connection.php'; 
    $host = 'localhost';
    $db = 'senai_aulaphp';
    $user = 'isabel';
    $pass = '123456';
    $port = 3307;
    $database = new Database($host,$db,$user,$pass,$port);
    $database -> connect();
    $pdo = $database->getConnection();

    /*
    Recuperação de dados do form
    */
    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $senha = $_GET["senha"];

    echo($nome."<br> ".$email."<br> ".$senha."<br> ");

    /*
    Insere os dados no banco
    */

    $stmt = $pdo->prepare("INSERT into usuario(nome,senha,email) values('$nome','$senha','email');");
    $stmt->execute();

    /*
    if($email == "bel06.santos@hotmail.com" && $senha="123456"){
        echo("Logado");
    } else{
        echo("Login ou Senha incorretos");
    }*/
?>