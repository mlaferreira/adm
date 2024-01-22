<?php
require 'config.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16"  href="assets/favicons/favicon-16x16.png">   
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title><?=NAME_SITE;?></title>
    <link rel="stylesheet" href="<?=URL_BASE;?>assets/css/login.css">
</head>
<body>
    <main>
        <h1><i class='bx bxs-user-plus'></i>Criar conta</h1>
        <div class="main-content">
            <form action="<?=URL_BASE;?>signup_action.php" method="post" autocomplete="off">

                <?php if(!empty($_SESSION['flash'])):?>
                    <span class="msn-erro"><?=$_SESSION['flash']; unset($_SESSION['flash']);?></span>
                <?php endif;?>

                <div class="form-control">
                    <label for="password">Nome Completo</label>
                    <input type="text" name="name" id="name" placeholder="Digite seu Nome Completo" autocomplete="off" required/>
                </div>
                <div class="form-control">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Digite seu email" autocomplete="off" required/>
                </div>
                <div class="form-control">
                    <label for="password">Senha:</label>
                    <input type="password" name="password" id="password" placeholder="Digite sua Senha" autocomplete="off" required/>
                </div>
                <div class="form-control">
                    <label for="date">Data de Nasc.</label>
                    <input type="date" name="birthdate" id="date" required/>
                </div>
                <div class="form-control">               
                    <input type="submit" name="btn" value="ENTRAR" class="btn"/>
                </div>
            </form>
            <div class="img-form">
                <img src="<?=URL_BASE;?>assets/imgs/undraw_savings_re_eq4w.svg" alt="imagem ilustrativa">
            </div>
        </div>
        <div class="create-conta">
            <p>Já tem conta ? <a href="<?=URL_BASE;?>login.php">clique aqui</a></p>
        </div>
    </main>
    <script src="<?=URL_BASE;?>assets/js/limparCampos.js"></script>
</body>
</html>