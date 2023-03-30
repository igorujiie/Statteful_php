<?php
session_start();

// Verificar se o usuário está autenticado t
if(!isset($_SESSION['usuario_autenticado']) || $_SESSION['usuario_autenticado'] !== true) {
    // Se não estiver autenticado, redirecionar para a página de login
    header('Location: login.php');
    exit;
}

// Se o usuário estiver autenticado, mostrar a página do usuário
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página do Usuário</title>
</head>
<body >
    <h1>Página do Usuário</h1>
    <p>Olá, usuário!</p>
    <p>Esta é a sua página de usuário.</p>
    <form method="post">
        <button type="submit" name="logout">Logout</button>
    </form>
</body>
</html>

<?php
// Se o usuário clicar no botão de logout, destruir a sessão e redirecionar para a página de login
if(isset($_POST['logout'])) {
    session_destroy();
    header('Location: login.php');
    exit;
}
?>
