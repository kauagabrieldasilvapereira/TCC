<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klmn Shoes</title>
    <link rel="stylesheet" href="assets/css/style.css">
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

    <!-- Inicio Carrinho -->
    <div class="corpo-categorias carrinho-compras">

        <!-- inicio tabela carrinho -->
        <table>
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Valor</th>
            </tr>


            <tr>
                <td>
                    <div class="info-carrinho">
                        <img src="assets/img/DunkLow.png" class="img-carrinho" alt="">

                        <div>
                            <p>Air Force 1</p>
                            <small>Valor: 444</small>
                            <br>
                            <a href="" title="">Remover</a>
                        </div>
                    </div>
                </td>
                <td>
                    <form action="" method="post">
                        <input type="number" name="" id="" value="1">
                    </form>
                </td>
                <td>R$ 444</td>

            </tr>

            <tr>
                <td>
                    <div class="info-carrinho">
                        <img src="assets/img/DunkLow.png" class="img-carrinho" alt="">

                        <div>
                            <p>Air Force 1</p>
                            <small>Valor: 444</small>
                            <br>
                            <a href="" title="">Remover</a>
                        </div>
                    </div>
                </td>
                <td>
                    <form action="" method="post">
                        <input type="number" name="" id="" value="1">
                    </form>
                </td>
                <td>R$ 444</td>

            </tr>

            <tr>
                <td>
                    <div class="info-carrinho">
                        <img src="assets/img/DunkLow.png" class="img-carrinho" alt="">

                        <div>
                            <p>Air Force 1</p>
                            <small>Valor: 444</small>
                            <br>
                            <a href="" title="">Remover</a>
                        </div>
                    </div>
                </td>
                <td>
                    <form action="" method="post">
                        <input type="number" name="" id="" value="1">
                    </form>
                </td>
                <td>R$ 444</td>

            </tr>

        </table>
        <!-- fim tabela carrinho -->

        <!-- inicio valor total carrinho -->

        <div class="valor-total">
            <table>
                <tr>
                    <td>Sub total</td>
                    <td>R$ 700</td>

                </tr>

                <tr>
                    <td>Total</td>
                    <td>R$ 777</td>

                </tr>
            </table>
        </div>

        <!-- fim valor total carrinho -->

        <!-- inicio informações de compra -->
         <div class="titulo-finalizar">
        <h2>Entre com seu login</h2>
        <a href="minha-conta.php">Entrar na minha conta</a>
         </div>
        
        
        <div class="formulario3">
            <!-- Seção de preenchimento de informações -->
            <div class="info-preenchimento">
                <h2>Preencha os dados</h2>
                <form action="" method="post" id="FinalizarCompra">
                    <input type="text" name="rua" id="" placeholder="Nome da Rua">
                    <input type="number" name="num" id="" placeholder="Numero da Casa">
                    <input type="text" name="bairro" id="" placeholder="Bairro">
                    <input type="text" name="cidade" id="" placeholder="Cidade">
                    <input type="number" name="cep" id="" placeholder="CEP">
                </form>
            </div>
        
            <!-- Seção de forma de pagamento -->
            <div class="forma-pagamento">
                <h2>Forma de Pagamento</h2>
                <section>
                    <option value="">Cartão de Crédito</option>
                    <option value="">Pix</option>
                    <option value="">Boleto</option>
                </section>
            </div>
        </div>
        
        <!-- fim informações de compra -->

    </div>
    <!-- Fim Carrinho -->

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
                        nossa loja foi feita para te proporcionar os melhores produtos, qualquer duvida ou problema
                        entre em contato com a gente!
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
    <script src="assets/js/app.js"></script>
</body>

</html>