<?php
$arquivoBanco = 'db/banco_de_dados.db';
//Conecta ao banco de dados existente
$db = new SQLite3($arquivoBanco);

// Executa uma consulta SQL para ler os dados
$resultado = $db->query("SELECT * FROM usuarios");

// Exibe os resultados
echo "<h2>Lista de Usuários</h2>";
while ($linha = $resultado->fetchArray(SQLITE3_ASSOC)) {
    echo "ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . " - Email: " . $linha['email'] . " - Curso: " . $linha['curso'] . " - Idade: " . $linha['idade'] . "<br>";
}