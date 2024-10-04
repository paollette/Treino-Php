<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    
<nav>

<div id="titulo">
<h2>Cadastro e consulta de alunos</h2>
</div>

    <form action="cadastro.php" method="post">
    

    <div id="formulario">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" placeholder="Insira o nome" required><br><br>

        <label for="idade">Idade:</label><br>
        <input type="int" id="idade" name="idade" placeholder="Idade" required><br><br>

        <label for="email">Email:</label><br>
        <input type="e-mail" id="email" name="email" placeholder="E-mail" required><br><br>

        <label for="curso">Curso:</label><br>
        <input type="text" id="curso" name="curso" placeholder="Curso" required><br><br>
    </div>
    
    <div id="botoes">
        <input type="submit" value="Cadastrar">
    </div>

    </form>
</nav>

<div class="imagem">
        <a href="https://www.youtube.com/watch?v=ELv6IPkML2s"></a>
        <img src="../imgs/garibaldo.jpg">
</div>


<section class="tabela">
<div class="tabela-container">
            <h2>Alunos Cadastrados</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Idade</th>
                        <th>Curso</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Consulta SQL para buscar os alunos cadastrados
                    $stmt = $pdo->prepare("SELECT nome, email, idade, curso FROM escola_sql.alunos");
                    $stmt->execute();

                    // Verifica se há registros retornados
                    if ($stmt->rowCount() > 0) {
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>
                                    <td>" . htmlspecialchars($row['nome']) . "</td>
                                    <td>" . htmlspecialchars($row['email']) . "</td>
                                    <td>" . htmlspecialchars($row['idade']) . "</td>
                                    <td>" . htmlspecialchars($row['curso']) . "</td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>Nenhum aluno cadastrado</td></tr>";
                    }
                    ?>
                
                </tbody>
            </table>
            
     <div id="botoes">
        <input type="submit" value="Deletar">
    </div>
</div>
    

</section>

</body>

</html>