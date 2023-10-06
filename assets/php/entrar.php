<?php

include('../php/conecta.php');

$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$senha = md5($_POST['senha']);

$sql = 'SELECT * FROM cadastro WHERE email=:email AND senha=:senha';
$result = $pdo->prepare($sql);
$result->execute(['email' => $email, 'senha' => $senha]);
$user = $result->fetch();

if(!empty($user)) {
    session_start();

    $_SESSION['id'] = $user['id'];
    $_SESSION['nome'] = $user['nome'];
    $_SESSION['email'] = $user['email'];
    header('Location:../../index.php');
} else {
    echo 'Usuario não cadastrado!';
}
?>