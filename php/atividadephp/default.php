<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
        $host = 'atividadephp';
        $db = 'senai-corrida';
        $user = 'isabel';
        $pass = '123456';
        $port = 3307; 
        require_once 'php/connection.php';
        $database = new Database($host, $db, $user, $pass, $port);
        $database->connect();
        $pdo = $database->getConnection();
    ?>
</head>
<body>
<?php
    if ($pdo) {
        try {
            $stmt = $pdo->prepare("SELECT id, nome FROM usuario");
            
            $stmt->execute();
            
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            if ($resultados) {
                foreach ($resultados as $row) {
                    echo "ID: " . $row['id'] . " = Nome: " . $row['nome'] . "<br>";
                }
            } else {
                echo "Nenhum registro encontrado.<br>";
            }
        } catch (PDOException $e) {
            echo "Erro ao consultar o banco de dados: " . $e->getMessage() . "<br>";
        }
    }
?>
</body>
</html>