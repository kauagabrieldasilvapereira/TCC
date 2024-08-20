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
    <div class="novoMenu">

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
    <div class="minha-conta">
        <div class="container">
            <div class="linha">
                <div class="col-1">
                    <img src="assets/img/benjerry.png" alt="Imagem de login" width="400px">
                </div>
                <div class="col-2">
                    <div class="formulario">
                        <div class="btn-form">
                            <span onclick="Entrar()">Entrar</span>
                            <span onclick="Cadastro()">Cadastro</span>
                            <hr id="indicador">
                        </div>

                        <form action="" method="post" id="EntrarPainel">
                            <input type="email" name="email" placeholder="E-mail de acesso">
                            <input type="password" name="senha" placeholder="Digite sua senha">
                            <button type="submit" name="sendEntrar" class="btn">Entrar</button>
                            <a href="" title="Esqueceu sua senha?">Esqueceu sua senha?</a>
                        </form>

                        <form action="" method="post" id="CadastroSite">
                            <input type="text" name="nome" placeholder="Nome completo">
                            <input type="email" name="email" placeholder="E-mail de acesso">
                            <input type="password" name="senha" placeholder="Digite sua senha">
                            <button type="submit" name="sendCad" class="btn">Cadastre-se</button>
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
                        <img src="assets/img/google.png" alt="Google Play">
                        <img src="assets/img/apple.png" alt="App Store">
                    </div>
                </div>

                <div class="rodape-col-2">
                    <p>
                        Nossa loja foi feita para te proporcionar os melhores produtos. Qualquer dúvida ou problema, entre em contato com a gente!
                    </p>
                </div>

                <div class="rodape-col-3">
                    <h3>Mais informações</h3>
                    <ul>
                        <li>Número de contato:</li>
                        <li>(12) 98278-7002</li>
                        <li>Email de Contato:</li>
                        <li>klmnSystem@gmail.com</li>
                    </ul>
                </div>

                <div class="rodape-col-4">
                    <h3>Redes sociais</h3>
                    <ul>
                        <li><ion-icon name="logo-facebook"></ion-icon> Facebook</li>
                        <li><ion-icon name="logo-instagram"></ion-icon> Instagram</li>
                        <li><ion-icon name="logo-youtube"></ion-icon> Youtube</li>
                        <li><ion-icon name="logo-twitter"></ion-icon> Twitter</li>
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
