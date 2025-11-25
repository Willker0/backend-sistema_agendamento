<?php
// Página inicial simples, só para testar o servidor rodando

session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Início</title>
</head>
<body>

<h2>Bem-vindo ao Sistema de Agendamento</h2>

<?php if(isset($_SESSION['id'])): ?>
    <p>Você está logado como: <strong><?php echo $_SESSION['nome']; ?></strong></p>
    <a href="dashboard.html">Ir para dashboard</a><br>
    <a href="logout.php">Sair</a>
<?php else: ?>
    <a href="inicio.html">Login</a><br>
    <a href="cadastro.html">Cadastrar Usuário</a>
<?php endif; ?>

</body>
</html>