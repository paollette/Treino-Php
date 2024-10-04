<?php

 require_once 'db.php'; 
    $host = 'localhost';
    $db = 'escola_sql';
    $user = 'paolla';
    $pass = '123456';
    $port = 3307;
    $database = new Database($host,$db,$user,$pass,$port);
    $database -> connect();
    $pdo = $database->getConnection();

    /* Recuperação de dados do form */
    
    $nome = $_GET["nome"];
    $idade = $_GET["idade"];
    $email = $_GET["email"];
    $curso = $_GET["curso"];

    /* Inserir os dados no banco */

    $stmt = $pdo->prepare("INSERT INTO escola_sql.alunos(email, idade, senha, curso) values('$nome', '$idade', '$email', '$curso');");
    $stmt->execute();

?>

<body>
<?php
// Verifica se os dados foram enviados via GET
if (isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['mensagem'])) {
    // Captura os dados enviados pelo formulário
    $nome = htmlspecialchars($_GET['nome']);
    $email = htmlspecialchars($_GET['email']);
    $mensagem = htmlspecialchars($_GET['mensagem']);

    // Exibe os dados capturados
    echo "<h2>Informações Recebidas:</h2>";
    echo "<p><strong>Nome:</strong> " . $nome . "</p>";
    echo "<p><strong>E-mail:</strong> " . $email . "</p>";
    echo "<p><strong>Mensagem:</strong> " . $mensagem . "</p>";
    // Verifica se a variável $pdo, que deve ser uma instância de PDO, está definida e é válida
    // Prepara uma consulta SQL para selecionar as colunas 'id' e 'nome' da tabela 'usuario'
    $stmt = $pdo->prepare("insert into senai_ta_aulaphp.mensagens(nome, email, mensagem) 
values('$nome', '$email', '$mensagem');");
    
    // Executa a consulta preparada
    $stmt->execute();
} else {
    echo "Nenhum dado foi enviado.";
}
?>
</body>