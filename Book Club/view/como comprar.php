<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Como Comprar - Book Club</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="Style/como comprar.css">
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

    <!-- Banner Hero para Como Comprar -->
    <section class="how-to-buy-hero">
        <div class="container">
            <div class="how-to-buy-hero-content">
                <h1>Como Comprar no Book Club</h1>
                <p>Um guia simples e rápido para adquirir seus livros favoritos em nossa plataforma</p>
            </div>
        </div>
    </section>

    <!-- Seção de Passos -->
    <section class="steps-section">
        <div class="container">
            <div class="section-title">
                <h2>Passo a Passo</h2>
                <p>Siga estas instruções simples para fazer suas compras com facilidade</p>
            </div>
            
            <div class="steps-container">
                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Navegue e Encontre Seu Livro</h3>
                        <p>Use nossa barra de pesquisa ou navegue pelas categorias para encontrar o livro desejado. Você pode filtrar por gênero, autor, preço e muito mais.</p>
                        <p>Clique no livro para ver detalhes, sinopse, avaliações de outros leitores e informações sobre o autor.</p>
                    </div>
                    <div class="step-image">
                        <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Navegação e busca de livros">
                    </div>
                </div>
                
                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Adicione ao Carrinho</h3>
                        <p>Após escolher seu livro, clique no botão "Adicionar ao Carrinho". Você pode continuar comprando ou finalizar seu pedido.</p>
                        <p>No carrinho, você pode ajustar quantidades, aplicar cupons de desconto e ver o valor total da compra com frete.</p>
                    </div>
                    <div class="step-image">
                        <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Adicionar ao carrinho">
                    </div>
                </div>
                
                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Finalize a Compra</h3>
                        <p>Clique em "Finalizar Compra" e faça login em sua conta ou cadastre-se rapidamente. Informe seus dados de entrega e escolha a forma de envio.</p>
                        <p>Revise seu pedido antes de prosseguir para o pagamento.</p>
                    </div>
                    <div class="step-image">
                        <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Finalizar compra">
                    </div>
                </div>
                
                <div class="step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Escolha e Confirme o Pagamento</h3>
                        <p>Selecione a forma de pagamento preferida (cartão, boleto, PIX ou outros). Preencha os dados necessários e confirme o pagamento.</p>
                        <p>Após a confirmação, você receberá um e-mail com todos os detalhes do pedido e acompanhamento da entrega.</p>
                    </div>
                    <div class="step-image">
                        <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Pagamento">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção de Pagamento -->
    <section class="payment-section">
        <div class="container">
            <div class="section-title">
                <h2>Formas de Pagamento</h2>
                <p>Oferecemos diversas opções para facilitar sua compra</p>
            </div>
            
            <div class="payment-methods">
                <div class="payment-method">
                    <div class="payment-icon">
                        <i class="fas fa-credit-card"></i>
                    </div>
                    <h3>Cartão de Crédito</h3>
                    <p>Aceitamos todas as bandeiras principais. Parcele em até 12x sem juros.</p>
                </div>
                
                <div class="payment-method">
                    <div class="payment-icon">
                        <i class="fas fa-barcode"></i>
                    </div>
                    <h3>Boleto Bancário</h3>
                    <p>Pague com boleto e receba seu pedido após a confirmação do pagamento.</p>
                </div>
                
                <div class="payment-method">
                    <div class="payment-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>PIX</h3>
                    <p>Pagamento instantâneo com desconto. Sua compra é confirmada em segundos.</p>
                </div>
                
                <div class="payment-method">
                    <div class="payment-icon">
                        <i class="fas fa-university"></i>
                    </div>
                    <h3>Transferência Bancária</h3>
                    <p>Realize transferência de qualquer banco e ganhe desconto especial.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção de Entrega -->
    <section class="delivery-section">
        <div class="container">
            <div class="section-title">
                <h2>Opções de Entrega</h2>
                <p>Escolha a forma de recebimento que melhor atende suas necessidades</p>
            </div>
            
            <div class="delivery-options">
                <div class="delivery-option">
                    <div class="delivery-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>Entrega Padrão</h3>
                    <p>Entrega em até 7 dias úteis para todo o Brasil. Acompanhe seu pedido pelo código de rastreio.</p>
                    <div class="delivery-price">A partir de R$ 9,90</div>
                </div>
                
                <div class="delivery-option">
                    <div class="delivery-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3>Entrega Expressa</h3>
                    <p>Receba em até 3 dias úteis. Disponível para as principais capitais e regiões metropolitanas.</p>
                    <div class="delivery-price">A partir de R$ 19,90</div>
                </div>
                
                <div class="delivery-option">
                    <div class="delivery-icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <h3>Retirada na Loja</h3>
                    <p>Compre online e retire gratuitamente em uma de nossas lojas físicas. Esteja pronto em 2 horas.</p>
                    <div class="delivery-price">Grátis</div>
                </div>
                
                <div class="delivery-option">
                    <div class="delivery-icon">
                        <i class="fas fa-download"></i>
                    </div>
                    <h3>E-books Imediatos</h3>
                    <p>Receba instantaneamente por e-mail. Leia em qualquer dispositivo a qualquer hora.</p>
                    <div class="delivery-price">Download Imediato</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção de Dúvidas Frequentes -->
    <section class="faq-section">
        <div class="container">
            <div class="section-title">
                <h2>Dúvidas Frequentes</h2>
                <p>Encontre respostas para as perguntas mais comuns sobre compras</p>
            </div>
            
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        Preciso ter uma conta para comprar?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Não é obrigatório, mas recomendamos que você crie uma conta para acompanhar seus pedidos, ter acesso a ofertas exclusivas e gerenciar seus dados de forma mais prática. Você pode finalizar a compra como visitante, mas não poderá acompanhar o pedido depois.
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        Como funciona a troca ou devolução?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Você tem até 30 dias após o recebimento para solicitar troca ou devolução. O produto deve estar em perfeito estado, com todas as embalagens originais. Entre em contato conosco pelo e-mail trocas@bookclub.com.br ou pelo formulário de contato em nosso site.
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        Como usar cupons de desconto?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Na página do carrinho, você encontrará um campo para inserir o código do cupom. Após digitar o código, clique em "Aplicar" e o desconto será calculado automaticamente. Os cupons podem ter regras específicas de utilização, como valor mínimo de compra ou categorias válidas.
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        É seguro comprar no site?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Sim, utilizamos tecnologia de criptografia SSL para proteger todos os dados transmitidos durante a compra. Seus dados financeiros são processados por gateways de pagamento certificados e seguimos todas as normas de segurança exigidas para comércio eletrônico.
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        Como acompanho meu pedido?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Após a confirmação do pagamento, você receberá um e-mail com o código de rastreio. Você pode acompanhar a entrega diretamente no site dos Correios ou de outras transportadoras. Se tiver uma conta em nosso site, também pode acompanhar pelo "Meus Pedidos" em seu perfil.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter">
        <div class="container">
            <div class="newsletter-content">
                <h3>Fique por dentro das novidades</h3>
                <p>Cadastre-se para receber ofertas exclusivas, lançamentos e dicas de leitura</p>
                
                <form class="newsletter-form">
                    <input type="email" placeholder="Seu melhor e-mail" required>
                    <button type="submit">Inscrever-se</button>
                </form>
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
                        <li><a href="Central de Ajuda.php">Central de Ajuda</a></li>
                        <li><a href="como comprar.php">Como Comprar</a></li>
                        <li><a href="formas de pagamento.php">Métodos de Pagamento</a></li>
                        <li><a href="Garantia book club.php">Garantia Book Club</a></li>
                        <li><a href="Devolução e Reembolso.php">Devolução e Reembolso</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h4>SOBRE NÓS</h4>
                    <ul class="footer-links">
                        <li><a href="Sobre nós.php">Sobre Nós</a></li>
                        <li><a href="Politicas de privacidade.php">Política de Privacidade</a></li>
                        <li><a href="Ofertas.php">Ofertas</a></li>
                        <li><a href="Book club BLOG.php">Book Club BLOG</a></li>
                        <li><a href="Imprensa.php">Imprensa</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h4>VENDAS</h4>
                    <ul class="footer-links">
                        <li><a href="Criar E-book.php">Crie seu E-book</a></li>
                        <li><a href="vender livro usado.php">Vender livro usado</a></li>
                        <li><a href="E-book com IA.php">E-book com IA</a></li>
                        <li><a href="audio-book com IA.php">Audio-book com IA</a></li>
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

    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // FAQ interactivity
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const item = question.parentElement;
                item.classList.toggle('active');
            });
        });

        // Simulação de itens no carrinho
        document.getElementById('cartCount').textContent = Math.floor(Math.random() * 5) + 1;
    </script>
</body>
</html>