<?php
// Gera hash a partir de uma senha enviada por GET ou POST
// Exemplo: hash.php?senha=1234

$senha = $_GET['senha'] ?? $_POST['senha'] ?? '';

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gerar Hash</title>
</head>
<body>

<h2>Gerador de Hash de Senhas</h2>

<form method="GET">
    <input type="text" name="senha" placeholder="Digite uma senha">
    <button type="submit">Gerar</button>
</form>

<?php
if ($senha) {
    echo "<p><strong>Senha digitada:</strong> $senha</p>";
    echo "<p><strong>Hash gerado:</strong></p>";
    echo "<textarea rows='3' cols='60'>" . password_hash($senha, PASSWORD_DEFAULT) . "</textarea>";
}
?>

</body>
</html>