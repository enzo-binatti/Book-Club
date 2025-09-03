<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Central de Ajuda - Book Club</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="Style/rodape.css">
</head>
<body>
    <!-- Navbar Moderna -->
    <nav class="navbar">
        <div class="logo">
            <img src="logo book.png" alt="Book Club Logo">
            <span class="logo-text">Book Club</span>
        </div>
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Pesquisar livros...">
            <button onclick="searchProducts()"><i class="fas fa-search"></i></button>
        </div>
        <ul class="nav-links">
            <li><a href="login.php">Login</a></li>
            <li><a href="cadastro.php">Cadastro</a></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>
        <div class="nav-icons">
            <a href="carrinho.php" class="cart-icon">
                <i class="fas fa-shopping-cart"></i>
                <span class="cart-count" id="cartCount">0</span>
            </a>
        </div>
    </nav>

    <!-- Seção de Ajuda -->
    <section class="help-section">
        <div class="container">
            <div class="help-header">
                <h1>Como podemos ajudar?</h1>
                <p>Encontre respostas para as perguntas mais frequentes ou entre em contato com nosso suporte.</p>
            </div>

            <!-- Barra de busca na ajuda -->
            <div class="search-help">
                <input type="text" id="faqSearch" placeholder="Digite sua dúvida...">
                <button><i class="fas fa-search"></i></button>
            </div>

            <!-- Lista de Perguntas Frequentes -->
            <div class="faq-list">
                <!-- Pergunta 1 -->
                <div class="faq-item">
                    <div class="faq-question">
                        Como faço para comprar um livro?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Basta navegar pela nossa loja, escolher o livro desejado, clicar em "Adicionar" e seguir para o carrinho. Complete suas informações de entrega e pagamento para finalizar a compra.
                    </div>
                </div>

                <!-- Pergunta 2 -->
                <div class="faq-item">
                    <div class="faq-question">
                        Qual o prazo de entrega?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        O prazo de entrega varia conforme o seu CEP e a forma de envio escolhida. Após a confirmação do pagamento, você receberá um e-mail com o código de rastreamento e o prazo estimado.
                    </div>
                </div>

                <!-- Pergunta 3 -->
                <div class="faq-item">
                    <div class="faq-question">
                        Posso devolver um livro?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Sim! Você tem até 7 dias após o recebimento para solicitar a devolução, desde que o livro esteja em perfeito estado. Entre em contato com o suporte para iniciar o processo.
                    </div>
                </div>

                <!-- Pergunta 4 -->
                <div class="faq-item">
                    <div class="faq-question">
                        Aceitam pagamento em parcelas?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Sim! Aceitamos cartões de crédito em até 12x sem juros. Também oferecemos pagamento à vista via PIX, boleto bancário e débito online.
                    </div>
                </div>

                <!-- Pergunta 5 -->
                <div class="faq-item">
                    <div class="faq-question">
                        Como acompanho meu pedido?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Após a compra, você receberá um e-mail com o número de rastreamento. Basta acessar a página "Meus Pedidos" em seu perfil ou usar o código no site dos Correios.
                    </div>
                </div>

                <!-- Pergunta 6 -->
                <div class="faq-item">
                    <div class="faq-question">
                        Vocês vendem livros usados?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Sim! Temos uma seção exclusiva de livros usados em bom estado, com preços especiais. Confira em "Livros Usados" no menu principal.
                    </div>
                </div>
            </div>

            <!-- Contato com suporte -->
            <div class="help-contact">
                <h3>Ainda precisa de ajuda?</h3>
                <p>Nossa equipe está pronta para atendê-lo de segunda a sexta, das 9h às 18h.</p>
                <a href="contato.php" class="contact-btn">Fale com o Suporte</a>
            </div>
        </div>
    </section>

    <!-- Rodapé Moderno -->
    <footer class="footer">
        <div class="footer-wave"></div>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h4>ATENDIMENTO</h4>
                    <ul class="footer-links">
                        <li><a href="central-de-ajuda.php">Central de Ajuda</a></li>
                        <li><a href="como-comprar.php">Como Comprar</a></li>
                        <li><a href="formas-de-pagamento.php">Métodos de Pagamento</a></li>
                        <li><a href="garantia.php">Garantia Book Club</a></li>
                        <li><a href="devolucoes.php">Devolução e Reembolso</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>SOBRE NÓS</h4>
                    <ul class="footer-links">
                        <li><a href="sobre-nos.php">Sobre Nós</a></li>
                        <li><a href="privacidade.php">Política de Privacidade</a></li>
                        <li><a href="afiliados.php">Programa de Afiliados</a></li>
                        <li><a href="ofertas.php">Ofertas</a></li>
                        <li><a href="blog.php">Book Club BLOG</a></li>
                        <li><a href="imprensa.php">Imprensa</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>VENDAS</h4>
                    <ul class="footer-links">
                        <li><a href="criar-ebook.php">Crie seu E-book</a></li>
                        <li><a href="vender-livro-usado.php">Vender livro usado</a></li>
                        <li><a href="ebook-ia.php">E-book com IA</a></li>
                        <li><a href="audiobook-ia.php">Audio-book com IA</a></li>
                    </ul>
                    <div class="footer-social">
                        <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Book Club. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

<script src="JavaScript/Central de ajuda.js"></script>
</body>
</html>