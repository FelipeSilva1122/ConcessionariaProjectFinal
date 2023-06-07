<?php
session_start();

// Limpa as variáveis de sessão do login
unset($_SESSION['nome_login']);
unset($_SESSION['senha_login']);

// Destrói a sessão atual
session_destroy();

// Redireciona o usuário para a página de login
header("Location: index.php");
exit;
?>
