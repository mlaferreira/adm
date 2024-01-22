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
    <title>TELA DE LOGIN - <?=NAME_SITE;?></title>
    <link rel="stylesheet" href="<?=URL_BASE;?>assets/css/login.css">
</head>
<body>
    <main>
        <h1><i class='bx bxs-lock'></i>Login</h1>
        <div class="main-content">
            
            <form action="<?=URL_BASE;?>login_action.php" method="post" autocomplete="off">
                <?php if(!empty($_SESSION['flash'])):?>
                    <span class="msn-erro"><?=$_SESSION['flash']; unset($_SESSION['flash']);?></span>
                <?php endif;?>
         
                <div class="form-control">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Digite seu email" autocomplete="off" required/>
                </div>
                <div class="form-control">
                    <label for="password">Senha:</label>
                    <input type="password" name="password" id="password" placeholder="Digite sua senha" autocomplete="off" required/>
                </div>
                <div class="form-control">               
                    <input type="submit" name="data_login" value="ENTRAR" class="btn"/>
                </div>
            </form>
            <div class="img-form">
                <img src="<?=URL_BASE;?>assets/imgs/undraw_access_account_re_8spm.svg" alt="imagem ilustrativa">
            </div>
        </div>
        <div class="create-conta">
            <p>Ainda não tem conta ? <a href="<?=URL_BASE;?>signup.php">clique aqui</a></p>
        </div>
    </main>
    

    <script src="<?=URL_BASE;?>assets/js/limparCampos.js"></script>
</body>
</html>