<?php
require 'Usuario.class.php';

session_start();

$usuario = new Usuario();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $senha = trim($_POST["senha"]);

    if (!empty($email) && !empty($senha)) {
        $user = $usuario->chkPass($email, $senha);
        
        if ($user) {
            $_SESSION['usuario'] = $user['nome'];
            $_SESSION['email'] = $user['email'];
            header("Location: dashboard.php");
            exit();
        } else {
            $erro = "E-mail ou senha incorretos!";
        }
    } else {
        $erro = "Todos os campos são obrigatórios!";
    }
}
?>

