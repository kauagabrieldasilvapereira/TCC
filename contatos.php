<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klmn Shoes</title>
    <link rel="stylesheet" href="assets/css/style.css" class="css">
</head>

<body>
    <!--Inicio banner-->
    <div class="banner">

        <!--Incio menu navegação-->
        <nav>

            <ul id="MenuItens">
                <li><a href="index.php" title="">Início</a></li>
                <li><a href="produtos.php" title="">Produtos</a></li>
                <li><a href="" title="">Empresa</a></li>
                <li><a href="contatos.php" title="">Contatos</a></li>
                <li><a href="minha-conta.php" title="">Minha conta</a></li>
            </ul>
            <a href="carrinho.php" title="">
            <img src="assets/img/carrinho2.webp" alt="Carrinho" width="30px" height="30px">
            </a>
        </nav>

        <!--Fim menu navegação-->

        <!--Incio container-->

        <div class="container">
            <!--Incio navegação-->

            <div class="navbar">


            </div>
            <!--Fim navegação-->
        </div>

        <!--Fim container-->


    </div>
    <!--Fim banner-->


    <!-- inicio minha conta -->
    

        <div class="contato">
            <div class="container">
                <div class="linha">

                    <div class="col-1">
                        <img src="assets/img/logo (2).png" alt="" width="400px">
                    </div>
                    <div class="col-2">
                        <div class="formulario2">
                            <!-- <div class="btn-form">
                                <span onclick="">Contato</span>
                            </div> -->
                            <h1>Contato</h1>
                            <form action="" method="post" id="ContatoSite">
                                <input type="text" name="nome" id="" placeholder="Nome completo">
                                <input type="email" name="email" id="" placeholder="E-mail">
                                <input type="text" id="" name="mensagem" placeholder="Digite sua mensagem">
                                <button type="submit" name="sendCad" class="btn">Enviar</button>
                            </form>
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>

        <!-- fim minha conta -->



    <!--Inicio rodape-->
    <footer class="rodape">
        <div class="container">
            <div class="linha">
                <div class="rodape-col-1">
                    <h3>Baixe o nosso app</h3>
                    <p>Baixe nosso aplicativo nas melhores plataformas</p>
                    <div class="app-logo">
                        <img src="assets/img/google.png" alt="">
                        <img src="assets/img/apple.png" alt="">
                    </div>
                </div>

                <div class="rodape-col-2">
                    <p>
                        nossa loja foi feita para te proporcionar os melhores produtos, qualquer duvida ou problema entre em contato com a gente!
                    </p>
                </div>

                <div class="rodape-col-3">
                    <h3>Mais informações</h3>
                    <ul>
                        <li>Número de contato:</li>
                        <li>(12)98278-7002</li>
                        <li>Email de Contato:</li>
                        <li>klmnSystem@gmail.com</li>
                    </ul>
                </div>

                <div class="rodape-col-4">
                    <h3>Redes socias</h3>
                    <ul>
                        <li><ion-icon name="logo-facebook"></ion-icon> Facebook</li>
                        <li><ion-icon name="logo-instagram"></ion-icon> Instagram</li>
                        <li><ion-icon name="logo-youtube"></ion-icon> Youtube</li>
                        <li>X Twitter</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="direitos">
                &#169; Todos os direitos reservados a KLMNSHOES.
            </p>
        </div>
    </footer>
    <!--Fim rodape-->




    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/login.js"></script>
</body>

</html>