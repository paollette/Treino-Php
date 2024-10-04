<?php

$arquivoBanco = '../db/banco_de_dados';

if (!file_exists($arquivoBanco)) {

    $db = new SQLite3($arquivoBanco);

    $db->exec("CREATE TABLE usuarios (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nome TEXT NOT NULL,
        email TEXT NOT NULL,
        curso TEXT NOT NULL,
        idade TEXT NOT NULL
    )");

    $db->exec("INSERT INTO usuarios (nome, email, curso, idade) VALUES ('Gabriel Kreicher', 'gbkr@exemplo.com', 'TI', '999')");
    $db->exec("INSERT INTO usuarios (nome, email, curso, idade) VALUES ('Juju', 'juju@exemplo.com', 'TUDO', '1000000')");

    echo "Banco de dados e tabela criados com sucesso! =D";

} else {
    echo "O Banco de Dados já existe! =/";
}

$db = new SQLite3($arquivoBanco);

$resultado = $db->query("SELECT * FROM usuarios");

echo"<h2>Lista de Usuários<h2>";
while ($linha = $resultado->fetchArray(SQLITE3_ASSOC)) {
    echo "ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . " - E-mail: " . $linha['email'] . " - Curso: " . $linha['curso'] . " - Idade: " . $linha['idade'];

}

$db->close();
           
?>

