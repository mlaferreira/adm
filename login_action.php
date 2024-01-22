<?php
require 'config.php';
require 'models/Auth.php';

$email      = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password   = filter_input(INPUT_POST, 'password');

if ($email && $password) {
    $auth = new Auth($pdo, URL_BASE);

    if ($auth->validateLogin($email, $password)) {
        header("Location: " . URL_BASE);
        exit;
    } else {
        $_SESSION['flash'] = 'E-mail e/ou Senha errados.';
        header("Location: " . URL_BASE . "login.php");
        exit;
    }
} else {
    $_SESSION['flash'] = 'E-mail e/ou Senha inválidos.';
    header("Location: " . URL_BASE . "login.php");
    exit;
}


