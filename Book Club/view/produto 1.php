<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto | Book Club</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="Style/Produtos.css">
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

    <!-- Breadcrumb -->
    <div class="container">
        <div class="breadcrumb">
            <a href="Book Club.php">Home</a>
            <span>/</span>
            <a href="#">Negócios</a>
            <span>/</span>
            <a href="#">Persuasão</a>
            <span>/</span>
            <span>Como Convencer Alguém em 90 Segundos</span>
        </div>
    </div>

    <!-- Página de Produto -->
    <section class="product-page">
        <div class="container">
            <div class="product-container">
                <!-- Galeria de Imagens -->
                <div class="product-gallery">
                    <div class="thumbnail-list">
                        <div class="thumbnail active" onclick="changeImage('90s.jpg')">
                            <img src="90s.jpg" alt="Capa do Livro">
                        </div>
                        <div class="thumbnail" onclick="changeImage('90s2.jpg')">
                            <img src="90s2.jpg" alt="Contra-capa do Livro">
                        </div>
                        <div class="thumbnail" onclick="changeImage('90s3.jpg')">
                            <img src="90s3.jpg" alt="Páginas internas">
                        </div>
                        <div class="thumbnail" onclick="changeImage('90s4.jpg')">
                            <img src="90s4.jpg" alt="Autor do Livro">
                        </div>
                    </div>
                    
                    <div class="main-image">
                        <img src="90s.jpg" alt="Como Convencer Alguém em 90 Segundos" id="mainProductImage">
                    </div>
                </div>
                
                <!-- Informações do Produto -->
                <div class="product-info">
                    <h1 class="product-title">Como Convencer Alguém em 90 Segundos</h1>
                    
                    <div class="product-meta">
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="product-review-count">(128 avaliações)</span>
                        </div>
                        <span class="product-brand">Por Nicholas Boothman</span>
                    </div>
                    
                    <div class="product-price-container">
                        <span class="current-price">R$ 33,17</span>
                        <span class="old-price">R$ 39,90</span>
                        <span class="discount-badge">17% OFF</span>
                        <div class="product-availability">
                            <i class="fas fa-check-circle"></i> Disponível em estoque
                        </div>
                    </div>
                    
                    <div class="product-description">
                        <p>Em "Como Convencer Alguém em 90 Segundos", Nicholas Boothman revela técnicas poderosas para criar conexões instantâneas e influenciar pessoas em menos de dois minutos. Um guia essencial para negócios e relacionamentos.</p>
                    </div>
                    
                    <div class="product-actions">
                        <div class="quantity-selector">
                            <button class="quantity-btn" onclick="decreaseQuantity()">-</button>
                            <input type="number" class="quantity-input" value="1" min="1" id="productQuantity">
                            <button class="quantity-btn" onclick="increaseQuantity()">+</button>
                        </div>
                        
                        <button class="add-to-cart" onclick="addToCart()">
                            <i class="fas fa-shopping-cart"></i> Adicionar ao Carrinho
                        </button>
                        
                        <button class="wishlist-btn" onclick="addToWishlist()">
                            <i class="far fa-heart"></i> Adicionar à Lista de Desejos
                        </button>
                    </div>
                    
                    <div class="product-delivery">
                        <div class="delivery-option">
                            <i class="fas fa-truck"></i>
                            <div class="delivery-text">
                                <strong>Entrega padrão</strong>
                                <span>Receba em 3 a 5 dias úteis</span>
                            </div>
                        </div>
                        
                        <div class="delivery-option">
                            <i class="fas fa-store"></i>
                            <div class="delivery-text">
                                <strong>Retirada em loja</strong>
                                <span>Disponível em 2 horas</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Abas de Informações -->
            <div class="product-tabs">
                <div class="tabs-header">
                    <button class="tab-btn active" onclick="openTab('description')">Descrição</button>
                    <button class="tab-btn" onclick="openTab('details')">Detalhes</button>
                    <button class="tab-btn" onclick="openTab('reviews')">Avaliações</button>
                    <button class="tab-btn" onclick="openTab('shipping')">Frete & Devolução</button>
                </div>
                
                <div id="description" class="tab-content active">
                    <h3>Sobre este livro</h3>
                    <p>"Como Convencer Alguém em 90 Segundos" é um livro revolucionário que ensina como estabelecer conexões instantâneas e positivas com qualquer pessoa. Nicholas Boothman, especialista em programação neurolinguística, apresenta técnicas comprovadas para criar rapport rapidamente, seja em negociações comerciais, entrevistas de emprego ou situações sociais.</p>
                    
                    <p>O livro aborda:</p>
                    <ul>
                        <li>Como ler a linguagem corporal do seu interlocutor</li>
                        <li>Técnicas para espelhamento e sincronização</li>
                        <li>O poder do primeiro contato visual</li>
                        <li>Como adaptar sua abordagem a diferentes personalidades</li>
                        <li>Estratégias para superar resistências</li>
                    </ul>
                    
                    <p>Com exemplos práticos e exercícios, Boothman mostra como você pode melhorar significativamente suas habilidades de comunicação e persuasão em qualquer situação.</p>
                </div>
                
                <div id="details" class="tab-content">
                    <h3>Detalhes do produto</h3>
                    <ul>
                        <li><strong>Autor:</strong> Nicholas Boothman</li>
                        <li><strong>Editora:</strong> Sextante</li>
                        <li><strong>Idioma:</strong> Português</li>
                        <li><strong>Encadernação:</strong> Brochura</li>
                        <li><strong>Número de páginas:</strong> 224</li>
                        <li><strong>ISBN-10:</strong> 8575421960</li>
                        <li><strong>ISBN-13:</strong> 978-8575421969</li>
                        <li><strong>Dimensões:</strong> 22.8 x 15.6 x 1.4 cm</li>
                        <li><strong>Peso:</strong> 340g</li>
                        <li><strong>Data de publicação:</strong> 1 janeiro 2008</li>
                    </ul>
                </div>
                
                <div id="reviews" class="tab-content">
                    <h3>Avaliações de clientes</h3>
                    <div class="review-summary">
                        <div class="overall-rating">
                            <span class="rating-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </span>
                            <span class="average-rating">4.5 de 5</span>
                            <span class="total-reviews">(128 avaliações)</span>
                        </div>
                        
                        <div class="rating-bars">
                            <div class="rating-bar">
                                <span>5 estrelas</span>
                                <div class="bar-container">
                                    <div class="bar" style="width: 65%;"></div>
                                </div>
                                <span>65%</span>
                            </div>
                            <div class="rating-bar">
                                <span>4 estrelas</span>
                                <div class="bar-container">
                                    <div class="bar" style="width: 20%;"></div>
                                </div>
                                <span>20%</span>
                            </div>
                            <div class="rating-bar">
                                <span>3 estrelas</span>
                                <div class="bar-container">
                                    <div class="bar" style="width: 8%;"></div>
                                </div>
                                <span>8%</span>
                            </div>
                            <div class="rating-bar">
                                <span>2 estrelas</span>
                                <div class="bar-container">
                                    <div class="bar" style="width: 4%;"></div>
                                </div>
                                <span>4%</span>
                            </div>
                            <div class="rating-bar">
                                <span>1 estrela</span>
                                <div class="bar-container">
                                    <div class="bar" style="width: 3%;"></div>
                                </div>
                                <span>3%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="customer-reviews">
                        <div class="review">
                            <div class="review-header">
                                <span class="review-author">Carlos M.</span>
                                <span class="review-date">15/05/2023</span>
                                <span class="review-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                            </div>
                            <div class="review-title">Transformador!</div>
                            <div class="review-content">
                                <p>Este livro mudou completamente minha abordagem em reuniões de negócios. As técnicas são práticas e realmente funcionam. Em menos de uma semana já estava vendo resultados nas minhas interações profissionais.</p>
                            </div>
                        </div>
                        
                        <div class="review">
                            <div class="review-header">
                                <span class="review-author">Ana P.</span>
                                <span class="review-date">02/04/2023</span>
                                <span class="review-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </span>
                            </div>
                            <div class="review-title">Bom, mas poderia ser mais profundo</div>
                            <div class="review-content">
                                <p>O livro traz boas ideias e conceitos úteis, mas senti falta de mais exemplos práticos e estudos de caso. Mesmo assim, valeu a pena pela perspectiva diferente sobre comunicação.</p>
                            </div>
                        </div>
                    </div>
                    
                    <button class="see-all-reviews">Ver todas as avaliações</button>
                </div>
                
                <div id="shipping" class="tab-content">
                    <h3>Opções de frete e devolução</h3>
                    <h4>Frete</h4>
                    <p>Oferecemos várias opções de envio para atender às suas necessidades. O prazo de entrega começa a contar a partir da confirmação do pagamento.</p>
                    
                    <ul>
                        <li><strong>Entrega Padrão:</strong> 3-5 dias úteis - R$ 9,90</li>
                        <li><strong>Entrega Expressa:</strong> 1-2 dias úteis - R$ 19,90</li>
                        <li><strong>Retirada em Loja:</strong> Disponível em 2 horas - Grátis</li>
                    </ul>
                    
                    <h4>Devolução</h4>
                    <p>Se você não estiver satisfeito com sua compra, pode devolver o produto em até 7 dias após o recebimento para obter um reembolso total. O produto deve estar em perfeitas condições, com todos os acessórios e embalagem originais.</p>
                    
                    <p>Para iniciar uma devolução, entre em contato com nosso atendimento ao cliente ou solicite a devolução diretamente em sua conta no site.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Produtos Relacionados -->
    <section class="related-products">
        <div class="container">
            <div class="section-title">
                <h2>Quem comprou este livro também se interessou por</h2>
                <p>Descubra outros títulos que podem te interessar</p>
            </div>
            
            <div class="product-grid">
                <!-- Produto 1 -->
                <div class="product-card">
                    <div class="product-card-image">
                        <a href="produto 2.php">
                            <img src="As-Armas-da-Persuas_o.jpg" alt="As Armas da Persuasão">
                        </a>
                    </div>
                    <div class="product-card-info">
                        <h3 class="product-card-title">As Armas da Persuasão</h3>
                        <div class="product-card-price">
                            <span class="product-card-current-price">R$ 87,33</span>
                        </div>
                        <button class="product-card-btn" onclick="addToCartRelated('As Armas da Persuasão', 87.33)">
                            <i class="fas fa-shopping-cart"></i> Adicionar
                        </button>
                    </div>
                </div>
                
                <!-- Produto 2 -->
                <div class="product-card">
                    <div class="product-card-image">
                        <a href="produto 3.php">
                            <img src="gatilhos mentais.jpg" alt="Gatilhos Mentais">
                        </a>
                    </div>
                    <div class="product-card-info">
                        <h3 class="product-card-title">Gatilhos Mentais</h3>
                        <div class="product-card-price">
                            <span class="product-card-current-price">R$ 60,70</span>
                            <span class="product-card-old-price">R$ 79,90</span>
                        </div>
                        <button class="product-card-btn" onclick="addToCartRelated('Gatilhos Mentais', 60.70)">
                            <i class="fas fa-shopping-cart"></i> Adicionar
                        </button>
                    </div>
                </div>
                
                <!-- Produto 3 -->
                <div class="product-card">
                    <div class="product-card-image">
                        <a href="produto 6.php">
                            <img src="o poder do habito.jpg" alt="O Poder do Hábito">
                        </a>
                    </div>
                    <div class="product-card-info">
                        <h3 class="product-card-title">O Poder do Hábito</h3>
                        <div class="product-card-price">
                            <span class="product-card-current-price">R$ 44,90</span>
                        </div>
                        <button class="product-card-btn" onclick="addToCartRelated('O Poder do Hábito', 44.90)">
                            <i class="fas fa-shopping-cart"></i> Adicionar
                        </button>
                    </div>
                </div>
                
                <!-- Produto 4 -->
                <div class="product-card">
                    <div class="product-card-image">
                        <a href="produto 7.php">
                            <img src="mindset.jpg" alt="Mindset">
                        </a>
                    </div>
                    <div class="product-card-info">
                        <h3 class="product-card-title">Mindset</h3>
                        <div class="product-card-price">
                            <span class="product-card-current-price">R$ 39,90</span>
                        </div>
                        <button class="product-card-btn" onclick="addToCartRelated('Mindset', 39.90)">
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
                <form class="newsletter-form" onsubmit="subscribeNewsletter(event)">
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
                        <li><a href="Programa de afiliados.php">Programa de Afiliados</a></li>
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

    <!-- ... todo o conteúdo do body ... -->

    <script src="JavaScript/Produto 1.js" defer></script>
</body>
</html>
