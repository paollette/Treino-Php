<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<h2>Login</h2>
    <form action="../formulario/php/verifica_login.php" method="get">
        <label for="nome">Login:</label><br>
        <input type="email" id="login" name="login" placeholder="e-mail" required><br><br>

        <label for="password">Senha:</label><br>
        <input type="password" id="senha" name="senha" placeholder="senha" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>