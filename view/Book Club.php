<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Club</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="Style/Book Club.css">
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

    <!-- Banner Hero -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Descubra seu próximo livro favorito</h1>
                <p>Milhares de títulos para expandir seus horizontes. Encontre inspiração, conhecimento e entretenimento em nossa coleção cuidadosamente selecionada.</p>
                <a href="#products" class="hero-btn">Explorar Livros</a>
            </div>
        </div>
    </section>

    <!-- Seção de Produtos -->
    <section class="featured" id="products">
        <div class="container">
            <div class="section-title">
                <h2>Nossos Best-sellers</h2>
                <p>Os livros mais amados pelos nossos leitores</p>
            </div>
            
            <div class="product-gallery" id="productGallery">
                <!-- Produto 1 -->
                <div class="product-item" data-name="Como Convencer Alguém em 90 Segundos" data-price="33.17">
                    <span class="product-badge">Mais vendido</span>
                    <div class="product-image">
                        <a href="produto 1.php">
                            <img src="90s.jpg" alt="Como Convencer Alguém em 90 Segundos">
                        </a>
                        <div class="product-actions">
                            <button class="product-action-btn" title="Favoritar"><i class="far fa-heart"></i></button>
                            <button class="product-action-btn" title="Visualizar rápido"><i class="far fa-eye"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Negócios</span>
                        <h3 class="product-title"><a href="produto 1.php">Como Convencer Alguém em 90 Segundos</a></h3>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span>(128)</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">R$ 33,17</span>
                            <span class="old-price">R$ 39,90</span>
                        </div>
                        <button class="add-to-cart" onclick="addToCart(this)">
                            <i class="fas fa-shopping-cart"></i> Adicionar
                        </button>
                    </div>
                </div>
                
                <!-- Produto 2 -->
                <div class="product-item" data-name="As Armas da Persuasão" data-price="87.33">
                    <div class="product-image">
                        <a href="produto 2.php">
                            <img src="As-Armas-da-Persuas_o.jpg" alt="As Armas da Persuasão">
                        </a>
                        <div class="product-actions">
                            <button class="product-action-btn" title="Favoritar"><i class="far fa-heart"></i></button>
                            <button class="product-action-btn" title="Visualizar rápido"><i class="far fa-eye"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Psicologia</span>
                        <h3 class="product-title"><a href="produto 2.php">As Armas da Persuasão</a></h3>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>(96)</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">R$ 87,33</span>
                        </div>
                        <button class="add-to-cart" onclick="addToCart(this)">
                            <i class="fas fa-shopping-cart"></i> Adicionar
                        </button>
                    </div>
                </div>
                
                <!-- Produto 3 -->
                <div class="product-item" data-name="Gatilhos Mentais" data-price="60.70">
                    <span class="product-badge">Oferta</span>
                    <div class="product-image">
                        <a href="produto 3.php">
                            <img src="gatilhos mentais.jpg" alt="Gatilhos Mentais">
                        </a>
                        <div class="product-actions">
                            <button class="product-action-btn" title="Favoritar"><i class="far fa-heart"></i></button>
                            <button class="product-action-btn" title="Visualizar rápido"><i class="far fa-eye"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Marketing</span>
                        <h3 class="product-title"><a href="produto 3.php">Gatilhos Mentais</a></h3>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>(215)</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">R$ 60,70</span>
                            <span class="old-price">R$ 79,90</span>
                        </div>
                        <button class="add-to-cart" onclick="addToCart(this)">
                            <i class="fas fa-shopping-cart"></i> Adicionar
                        </button>
                    </div>
                </div>
                
                <!-- Produto 4 -->
                <div class="product-item" data-name="A Máquina Definitiva de Vendas" data-price="280.00">
                    <div class="product-image">
                        <a href="produto 4.php">
                            <img src="a maquina.jpg" alt="A Máquina Definitiva de Vendas">
                        </a>
                        <div class="product-actions">
                            <button class="product-action-btn" title="Favoritar"><i class="far fa-heart"></i></button>
                            <button class="product-action-btn" title="Visualizar rápido"><i class="far fa-eye"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Vendas</span>
                        <h3 class="product-title"><a href="produto 4.php">A Máquina Definitiva de Vendas</a></h3>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span>(42)</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">R$ 280,00</span>
                        </div>
                        <button class="add-to-cart" onclick="addToCart(this)">
                            <i class="fas fa-shopping-cart"></i> Adicionar
                        </button>
                    </div>
                </div>
                
                <!-- Produto 5 -->
                <div class="product-item" data-name="A Arte Da Guerra" data-price="49.90">
                    <span class="product-badge">Clássico</span>
                    <div class="product-image">
                        <a href="produto 5.php">
                            <img src="a arte da guerra.webp" alt="A Arte Da Guerra">
                        </a>
                        <div class="product-actions">
                            <button class="product-action-btn" title="Favoritar"><i class="far fa-heart"></i></button>
                            <button class="product-action-btn" title="Visualizar rápido"><i class="far fa-eye"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Estratégia</span>
                        <h3 class="product-title"><a href="produto 5.php">A Arte Da Guerra</a></h3>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>(378)</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">R$ 49,90</span>
                        </div>
                        <button class="add-to-cart" onclick="addToCart(this)">
                            <i class="fas fa-shopping-cart"></i> Adicionar
                        </button>
                    </div>
                </div>
                
                <!-- Produto 6 -->
                <div class="product-item" data-name="O Poder do Hábito" data-price="44.90">
                    <div class="product-image">
                        <a href="produto 6.php">
                            <img src="o poder do habito.jpg" alt="O Poder do Hábito">
                        </a>
                        <div class="product-actions">
                            <button class="product-action-btn" title="Favoritar"><i class="far fa-heart"></i></button>
                            <button class="product-action-btn" title="Visualizar rápido"><i class="far fa-eye"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Autoajuda</span>
                        <h3 class="product-title"><a href="produto 6.php">O Poder do Hábito</a></h3>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span>(187)</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">R$ 44,90</span>
                        </div>
                        <button class="add-to-cart" onclick="addToCart(this)">
                            <i class="fas fa-shopping-cart"></i> Adicionar
                        </button>
                    </div>
                </div>
                
                <!-- Produto 7 -->
                <div class="product-item" data-name="Mindset" data-price="39.90">
                    <span class="product-badge">Novo</span>
                    <div class="product-image">
                        <a href="produto 7.php">
                            <img src="mindset.jpg" alt="Mindset">
                        </a>
                        <div class="product-actions">
                            <button class="product-action-btn" title="Favoritar"><i class="far fa-heart"></i></button>
                            <button class="product-action-btn" title="Visualizar rápido"><i class="far fa-eye"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Desenvolvimento</span>
                        <h3 class="product-title"><a href="produto 7.php">Mindset</a></h3>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>(143)</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">R$ 39,90</span>
                        </div>
                        <button class="add-to-cart" onclick="addToCart(this)">
                            <i class="fas fa-shopping-cart"></i> Adicionar
                        </button>
                    </div>
                </div>
                
                <!-- Produto 8 -->
                <div class="product-item" data-name="Os 7 Hábitos das Pessoas Altamente Eficazes" data-price="55.00">
                    <div class="product-image">
                        <a href="produto 8.php">
                            <img src="os 7.webp" alt="Os 7 Hábitos das Pessoas Altamente Eficazes">
                        </a>
                        <div class="product-actions">
                            <button class="product-action-btn" title="Favoritar"><i class="far fa-heart"></i></button>
                            <button class="product-action-btn" title="Visualizar rápido"><i class="far fa-eye"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Produtividade</span>
                        <h3 class="product-title"><a href="produto 8.php">Os 7 Hábitos das Pessoas Altamente Eficazes</a></h3>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>(256)</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">R$ 55,00</span>
                        </div>
                        <button class="add-to-cart" onclick="addToCart(this)">
                            <i class="fas fa-shopping-cart"></i> Adicionar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter">
        <div class="container">
            <div class="newsletter-content">
                <h3>Assine nossa newsletter</h3>
                <p>Receba as últimas novidades, promoções e dicas de leitura diretamente no seu e-mail.</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Seu melhor e-mail" required>
                    <button type="submit">Assinar</button>
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

    <script src="JavaScript/Book Club.js"></script>
</body>
</html>