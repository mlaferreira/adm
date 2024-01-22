<?php
    require 'config.php';
    require 'models/Auth.php';

    $auth = new Auth($pdo, URL_BASE);
    $userInfo = $auth->checkToken();
    $firstName = current(explode(' ', $userInfo->name));
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16"  href="assets/favicons/favicon-16x16.png">    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title><?=NAME_SITE;?></title>
    <link rel="stylesheet" href="<?=URL_BASE;?>assets/css/perfil.css">
</head>
<body>
    <section class="page_perfil">
        <h1><i class='bx bx-user-pin'></i>Perfil</h1>
        <a href="<?=URL_BASE?>">home</a>
        <div class="perfil_header">
            <div class="money-ano">                
                <p class="dindin"><i class='bx bxs-smile' ></i>r$ 5.000,00</p>
                <p>Recebido em diárias - 2024</p>
            </div>
        </div>
        <div class="perfil_main">
            <div class="perfil_main-avatar">
                <span class="pencil"><i class='bx bx-pencil' ></i></span>
                <div class="avatar-box">
                    <img src="<?=URL_BASE?>assets/imgs/avatar.png" alt="imagem do avatar de marcello">
                </div>
                <div class="name">
                    <h2><?=$firstName;?></h2>
                </div>
                <div class="create-conta"><p>MEMBRO DESDE: MARÇO, 2022</p></div>
            </div>
            <div class="perfil_bloco">

                <div class="perfil_main-bio">
                <span class="pencil"><i class='bx bx-pencil' ></i></span>
                    <h3>sobre mim</h3>
                    <p>"Olá! Sou um entusiasta de ciência de dados com uma paixão ardente pela programação web. 
                        Com 45 anos de experiência na vida (e ainda contando), sou estudante dedicado, 
                        marido apaixonado e orgulhoso pai de duas incríveis moças. Nos momentos de descanso, 
                        gosto de relaxar e apreciar a simplicidade da vida. Meu lar é compartilhado com uma 
                        companheira de quatro patas, a adorável Cristal. Meu grande sonho é transformar ideias em realidade, 
                        trabalhando incansavelmente 
                        para criar meu próprio sistema e deixar uma marca duradoura no mundo da tecnologia. Vamos juntos nessa jornada!"</p>
                </div>

                <div class="perfil_main-metas">
                    <span class="pencil"><i class='bx bx-pencil' ></i></span>
                    <h3>minha metas</h3>
                    <div class="col-3">
                        
                        <div class="col-3-card-meta">
                            <div class="meta-icon">
                            <i class='bx bx-money-withdraw'></i>
                            </div>
                            <div class="meta-money">
                                <h2>fevereiro</h2>
                                <p>Valor <span>R$ 2.000</span></p>
                                <p class="money-cach">Recebido <span>R$ 800</span></p>
                            </div>
                        </div> 
                        <div class="col-3-card-meta">
                            <div class="meta-icon">
                            <i class='bx bx-money-withdraw'></i>
                            </div>
                            <div class="meta-money">
                                <h2>março</h2>
                                <p>Valor <span>R$ 2.000</span></p>
                                <p class="money-cach">Recebido <span>R$ 800</span></p>
                            </div>
                        </div> 
                        <div class="col-3-card-meta">
                            <div class="meta-icon">
                            <i class='bx bx-money-withdraw'></i>
                            </div>
                            <div class="meta-money">
                                <h2>abril</h2>
                                <p>Valor <span>R$ 2.000</span></p>
                                <p class="money-cach">Recebido <span>R$ 800</span></p>
                            </div>
                        </div> 

                    </div>

                </div>
                <div class="perfil_main-metas">
                    <span class="pencil"><i class='bx bx-pencil' ></i></span>
                    <h3>últimas escalas</h3>
                    <div class="col-3">
                    <div class="col-3-card-escala">
                            <div class="card-title">
                                <h2> <i class='bx bx-shield-alt'></i>patrula escolar</h2>
                                <p>fevereiro</p>

                            </div>
                            <div class="card-info">
                                <p>dias</p>
                                <span>07</span>
                                <span>09</span>
                                <span>15</span>
                                <span>07</span>
                                <span>09</span>
                                <span>15</span>
                                <span>07</span>
                                <span>09</span>
                                <span>15</span>
                                <span>07</span>
                                <span>09</span>
                                <span>15</span>
                            </div>
                            <div class="money-valor">
                                <p>Total r$ 1.400</p>
                            </div>
                        </div>
                        <div class="col-3-card-escala">
                            <div class="card-title">
                                <h2> <i class='bx bx-shield-alt'></i>patrula escolar</h2>
                                <p>fevereiro</p>

                            </div>
                            <div class="card-info">
                                <p>dias</p>
                                <span>07</span>
                                <span>09</span>
                                <span>15</span>
                                <span>07</span>
                                <span>09</span>
                                <span>15</span>
                                <span>07</span>
                                <span>09</span>
                                <span>15</span>
                                <span>07</span>
                                <span>09</span>
                                <span>15</span>
                            </div>
                            <div class="money-valor">
                                <p>Total r$ 1.400</p>
                            </div>
                        </div>
                        <div class="col-3-card-escala">
                            <div class="card-title">
                                <h2> <i class='bx bx-shield-alt'></i>patrula escolar</h2>
                                <p>fevereiro</p>

                            </div>
                            <div class="card-info">
                                <p>dias</p>
                                <span>07</span>
                                <span>09</span>
                                <span>15</span>
                                <span>07</span>
                                <span>09</span>
                                <span>15</span>
                                <span>07</span>
                                <span>09</span>
                                <span>15</span>
                                <span>07</span>
                                <span>09</span>
                                <span>15</span>
                            </div>
                            <div class="money-valor">
                                <p>Total r$ 1.400</p>
                            </div>
                        </div>
                        <div class="col-3-card-escala">
                            <div class="card-title">
                                <h2> <i class='bx bx-shield-alt'></i>patrula escolar</h2>
                                <p>fevereiro</p>

                            </div>
                            <div class="card-info">
                                <p>dias</p>
                                <span>07</span>
                                <span>09</span>
                                <span>15</span>
                                <span>07</span>
                                <span>09</span>
                                <span>15</span>
                                <span>07</span>
                                <span>09</span>
                                <span>15</span>
                                <span>07</span>
                                <span>09</span>
                                <span>15</span>
                            </div>
                            <div class="money-valor">
                                <p>Total r$ 1.400</p>
                            </div>
                        </div>
                        <div class="col-3-card-escala">
                            <div class="card-title">
                                <h2> <i class='bx bx-shield-alt'></i>patrula escolar</h2>
                                <p>fevereiro</p>

                            </div>
                            <div class="card-info">
                                <p>dias</p>
                                <span>07</span>
                                <span>09</span>
                                <span>15</span>
                                <span>07</span>
                                <span>09</span>
                                <span>15</span>
                                <span>07</span>
                                <span>09</span>
                                <span>15</span>
                                <span>07</span>
                                <span>09</span>
                                <span>15</span>
                            </div>
                            <div class="money-valor">
                                <p>Total r$ 1.400</p>
                            </div>
                        </div>
                        <div class="col-3-card-escala">
                            <div class="card-title">
                                <h2> <i class='bx bx-shield-alt'></i>patrula escolar</h2>
                                <p>fevereiro</p>

                            </div>
                            <div class="card-info">
                                <p>dias</p>
                                <span>07</span>
                                <span>09</span>
                                <span>15</span>
                                <span>07</span>
                                <span>09</span>
                                <span>15</span>
                                <span>07</span>
                                <span>09</span>
                                <span>15</span>
                                <span>07</span>
                                <span>09</span>
                                <span>15</span>
                            </div>
                            <div class="money-valor">
                                <p>Total r$ 1.400</p>
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                    </div>
                </div>

            </div>
            
        </div>
        

    </section>
</body>
</html>