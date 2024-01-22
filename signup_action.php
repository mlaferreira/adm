<?php
/**if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o método de requisição é POST

    // Pega e filtra os dados do formulário
    $data_login = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    // Exibe os dados filtrados
    echo '<pre>';
    var_dump($data_login['email']);
    var_dump($data_login['password']);
    echo '</pre>';
}**/

require 'config.php';
require 'models/Auth.php';




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o método de requisição é POST

    // Pega os dados do formulário em um array associativo
    $camposSignup   = $_POST;
    $name           = $camposSignup['name'];
    $email          = $camposSignup['email'];
    $password       = $camposSignup['password'];
    $birthdate      = $camposSignup['birthdate'];

    // Exibe os dados para fins de teste
    //var_dump($camposSignup);
   

    // Verifica se todos os campos obrigatórios estão preenchidos
    if (empty($name) || empty($email) ||empty($password) ||empty($birthdate)){
        $_SESSION['flash'] = "Por favor, preencha todos os campos obrigatórios.";
        header("Location: ".URL_BASE."signup.php");
        exit;
    }
    
    // Converte os campos 'name' e 'email' para minúsculas
    $name   = strtolower($name);
    $email = strtolower($email);

    // Remove caracteres especiais dos campos 'name', 'email' e 'password'
    $name       = preg_replace('/[^a-zA-Z0-9\s]/', '', $name);
    $email      = preg_replace('/[^a-z0-9@.]/', '', $email);
    $password   = preg_replace('/[^a-zA-Z0-9]/', '', $password);

    // Verifica se a senha tem pelo menos 6 caracteres e contém pelo menos uma letra
if (strlen($password) < 6 || !preg_match('/[a-zA-Z]/', $password)) {
    $_SESSION['flash'] = 'Sua senha deve ter pelo menos 6 caracteres e conter pelo menos uma letra.';
    header("Location: ".URL_BASE."signup.php");
    exit;
}
// Verifica o formato da data de nascimento
$birthdate = explode('-', $birthdate);

if (count($birthdate) == 3 && is_numeric($birthdate[0]) && is_numeric($birthdate[1]) && is_numeric($birthdate[2]) && checkdate($birthdate[1], $birthdate[2], $birthdate[0])) {
    // Data de nascimento válida
    $birthdate = $birthdate[0].'-'.$birthdate[1].'-'.$birthdate[2];

    // Calcula a idade com base na data de nascimento
    $dataNascimento = new DateTime($birthdate);
    $dataAtual = new DateTime();
    $idade = $dataAtual->diff($dataNascimento)->y;

    // Verifica se a idade está dentro do intervalo permitido (0 a 100 anos)
    if ($idade < 0 || $idade > 100) {
        $_SESSION['flash'] = "Sua idade deve estar entre 0 e 100 anos.";
        header("Location: ".URL_BASE."signup.php");
        exit;
    }
} else {
    // Data de nascimento inválida
    $_SESSION['flash'] = "Sua Data de Nascimento está inválida.";
    header("Location: ".URL_BASE."signup.php");
    exit;
}

    // Restante do seu código aqui...
    $auth = new Auth($pdo, URL_BASE);
    if($auth->emailExists($email) === false){
       $auth->registerUser($name, $email, $password, $birthdate);
       header("Location: ".URL_BASE."perfil.php");
       exit;
    }else{
        $_SESSION['flash'] = 'E-mail já existe.';
        header("Location: ".URL_BASE."signup.php");
        exit;
    }
}

