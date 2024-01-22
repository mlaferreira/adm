<?php
    require 'config.php';
    require 'models/Auth.php';

    $auth = new Auth($pdo, URL_BASE);
    $userInfo = $auth->checkToken();

    $firstName = current(explode(' ', $userInfo->name));

    $imagePath = 'assets/imgs/'.$userInfo->cover;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" type="image/png" sizes="16x16"  href="<?=URL_BASE?>assets/favicons/favicon-16x16.png">
    <title><?=NAME_SITE;?></title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?=URL_BASE;?>assets/css/main.css">
</head>
<body>    
   <header>
      <div class="container">
            <div class="logo">
                <a href="<?=URL_BASE;?>">
                    <h1>si-escalas</h1>
                    <p>Controle é Seu</p>            
                </a>
            </div>
            <nav>
                <ul class="header-esq">
                    <li><a href="<?=URL_BASE;?>" class="active">home</a></li>
                    <li><a href="<?=URL_BASE;?>create-escala.php">criar escala</a></li>
                    <li><a href="">criar meta</a></li>
                </ul>
                <div class="name-user">
                    <p><a href="<?=URL_BASE;?>perfil.php"><?=$firstName;?></a></p>
                </div>

                <div class="header-dir">
                    <a href="<?=URL_BASE;?>logout.php" class="btn-logout">sair <i class='bx bx-log-in-circle'></i></a>
                </div>
            </nav>
            <div class="menu-mobily">
                <div class="menu-icon">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        
      </div>

   </header>
  
   <main>
       <div class="container">
            <div class="create-grid">
               <div class="create-esq">
                    <img src="assets/imgs/undraw_metrics_re_6g90.svg" alt="">
               </div>
               <div class="create-dir">
               <h2>criando a meta</h2>
                    <form action="">
                        <input type="text" placeholder="Digite o mês" />
                          <div class="inputs">
                             <input type="text" placeholder="Valor da meta" />
                            <input type="submit" class="btn-create" value="criar meta">
                          </div>
                               
                    </form>
               </div>
            </div>
       </div>
   </main>

   <footer>
        <div class="container">
            <div class="logo">
                <a href="<?=URL_BASE;?>">
                    <h1>si-escalas</h1>
                    <p>Controle é Seu</p>            
                </a>
            </div>
            <div class="copyright">
                <p>criado pela <a href="https://www.3mcweb.com.br" target="_blank">3mcweb</a></p>
            </div>
       </div>
   </footer>
    
</body>
</html>