<?php
session_start();

if(isset($_POST['username']) && isset($_POST['password'])) {
    // Verificar se o nome de usuário e senha são válidos 
    if($_POST['username'] === 'igor' && $_POST['password'] === '1234') {
        // Definir uma variável de sessão para o usuário autenticado . Esse comportamento é stateful porque depende do estado da variável de sessão para determinar o fluxo do programa. 
        $_SESSION['usuario_autenticado'] = true;
        // Redirecionar para a página do usuário
        header('Location: usuario.php');
        exit;
    } else {
        // Se o nome de usuário e senha não forem válidos, mostrar uma mensagem de erro
        $erro = 'Nome de usuário ou senha incorretos.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página de Login</title>
</head>
<body>
    <h1>Página de Login</h1>
    <?php if(isset($erro)) { ?>
        <p><?php echo $erro; ?></p>
    <?php } ?>
    <form method="post">
        <div>
            <label for="username">Nome de usuário:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>
