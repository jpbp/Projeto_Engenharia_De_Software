
<?php
// é basicamente o sair do site  
session_start(); // pega a seção para poder verificar se o usuario não esta autenticado
session_destroy(); // destroi a sessao que foi utilizada 
header('Location: login.php'); // volta para tela de login
exit();

?>