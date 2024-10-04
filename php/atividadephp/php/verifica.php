<?php 
    $host = 'localhost';
    $db = 'senai_ta_aulaphp';
    $user = 'gabriel';
    $pass = '123456';
    $port = 3307; // Porta MySQL correta
    require_once 'connection.php';
    $database = new Database($host, $db, $user, $pass, $port);
    $database->connect();

    $pdo = $database->getConnection();
     $login = htmlspecialchars($_GET['login']);
     $senha = htmlspecialchars($_GET['senha']);
     
    if ($pdo) {
        $stmt = $pdo->prepare("select * from senai_ta_aulaphp.usuario where nome = '$login' and  senha = '$senha'");
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($resultados) {
            Echo("Logado!");
        } else {
            Echo("Não logado!");
        }
     }

?>