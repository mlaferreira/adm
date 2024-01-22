
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
                    <li><a href="<?=URL_BASE;?>create-meta.php">criar meta</a></li>
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
   <section class="hero">
    <div class="container">
        <div class="hero-esq">
            <h2>Controle e Eficiência ao Seu Alcance</h2>
            <p>A solução ideal para otimizar o controle de escalas de serviço. 
                Simplifique a gestão do tempo, ganhe flexibilidade total e promova eficiência em suas operações.</p>

            <a href="<?=URL_BASE;?>create-escala.php" class="btn-hero">criar escala</a>
        </div>
        <div class="hero-dir">
            <p><i class='bx bx-stopwatch'></i></p>
        </div>
    </div>

   </section>
   <main>
   
       <div class="container">        
       <section class="send-edit-escala">
            <h2>editando a escala</h2>
            
            
            <div class="send-content">
            <img src="assets/imgs/undraw_target_re_fi8j.svg" alt="">
            <form action="">
                <select name="" id="" >
                    <option value="">selecione a operação</option>
                    <option value="">pernambuco seguro</option>
                    <option value="">patrula escolar</option>
                    <option value="">forum ouricuri</option>
                    <option value="">forum exu</option>
                    <option value="">operação paz</option>
                    <option value="">complemento de gt</option>
                    <option value="">forum bodoco</option>
                </select>
                <div class="inputs">
                    <input type="text" placeholder="Digite o mês" />
                    <input type="text" placeholder="Digite o local" />                                                                       
                </div>                                
                <div class="inputs">
                    <input type="text" placeholder="Hora inicio" />
                    <input type="text" placeholder="Hora final" />                                                             
                </div>
                <div class="inputs">
                    <input type="text" placeholder="Digite o dia" />
                    <input type="text" placeholder="Digite o valor" />                                                                       
                </div>                                
                <div class="inputs">
                    <input type="submit" class="btn-create" value="criar escala"/>                                
                </div>
                                
            </form>
            </div>
</section>         
            
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
























































