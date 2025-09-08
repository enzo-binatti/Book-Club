<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - Book Club</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Variáveis CSS (mantidas do original) */
        :root {
            --primary: #4361ee;
            --primary-dark: #3a0ca3;
            --secondary: #f72585;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --success: #4cc9f0;
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            --shadow-md: 0 4px 6px rgba(0,0,0,0.1), 0 1px 3px rgba(0,0,0,0.08);
            --shadow-lg: 0 10px 20px rgba(0,0,0,0.1), 0 6px 6px rgba(0,0,0,0.1);
            --shadow-xl: 0 15px 25px rgba(0,0,0,0.15), 0 5px 10px rgba(0,0,0,0.05);
        }

        /* Reset e Estilos Globais */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', 'Segoe UI', Roboto, sans-serif;
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: var(--transition);
        }

        img {
            max-width: 100%;
            height: auto;
            object-fit: cover;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Navbar Moderna */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            padding: 15px 5%;
            box-shadow: var(--shadow-sm);
            z-index: 1000;
            transition: var(--transition);
        }

        .navbar.scrolled {
            padding: 10px 5%;
            box-shadow: var(--shadow-md);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo img {
            width: 90px;
            height: 90px;
            object-fit: contain;
        }

        .logo-text {
            font-weight: 700;
            font-size: 1.5rem;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .nav-links {
            display: flex;
            gap: 25px;
        }

        .nav-links a {
            font-weight: 500;
            position: relative;
            color: var(--dark);
            padding: 5px 0;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--secondary);
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .nav-icons {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .nav-icons i {
            font-size: 1.2rem;
            cursor: pointer;
            transition: var(--transition);
        }

        .nav-icons i:hover {
            color: var(--secondary);
            transform: translateY(-3px);
        }

        .search-bar {
            position: relative;
            width: 300px;
        }

        .search-bar input {
            width: 100%;
            padding: 10px 15px;
            border: none;
            border-radius: 30px;
            background: rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            padding-right: 40px;
        }

        .search-bar input:focus {
            outline: none;
            background: rgba(0, 0, 0, 0.08);
            box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.3);
        }

        .search-bar button {
            position: absolute;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--gray);
            cursor: pointer;
        }

        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background: var(--secondary);
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
            font-weight: bold;
        }

        /* Banner Hero para Sobre Nós */
        .about-hero {
            margin-top: 70px;
            height: 400px;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .about-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgyNTUsMjU1LDIU1LDAuMDUpIi8+PC9wYXR0ZXJuPjwvZGVmcz48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI3BhdHRlcm4pIi8+PC9zdmc+');
        }

        .about-hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            text-align: center;
            margin: 0 auto;
        }

        .about-hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .about-hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        /* Seção Nossa História */
        .our-story {
            padding: 80px 0;
            background: white;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            border-radius: 2px;
        }

        .section-title p {
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto;
        }

        .story-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .story-text {
            padding-right: 20px;
        }

        .story-text p {
            margin-bottom: 20px;
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .story-image {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            position: relative;
        }

        .story-image img {
            width: 100%;
            height: auto;
            transition: var(--transition);
        }

        .story-image:hover img {
            transform: scale(1.05);
        }

        /* Seção Nossa Missão */
        .our-mission {
            padding: 80px 0;
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.05) 0%, rgba(247, 37, 133, 0.05) 100%);
        }

        .mission-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .mission-card {
            background: white;
            padding: 40px 30px;
            border-radius: 12px;
            text-align: center;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }

        .mission-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }

        .mission-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 2rem;
        }

        .mission-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--primary-dark);
        }

        .mission-card p {
            color: var(--gray);
            line-height: 1.7;
        }

        /* Seção Nossa Equipa */
        .our-team {
            padding: 80px 0;
            background: white;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .team-member {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            text-align: center;
        }

        .team-member:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }

        .member-image {
            height: 250px;
            overflow: hidden;
        }

        .member-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .team-member:hover .member-image img {
            transform: scale(1.1);
        }

        .member-info {
            padding: 25px 20px;
        }

        .member-info h3 {
            font-size: 1.3rem;
            margin-bottom: 5px;
        }

        .member-role {
            color: var(--primary);
            font-weight: 500;
            margin-bottom: 15px;
        }

        .member-desc {
            color: var(--gray);
            margin-bottom: 20px;
            font-size: 0.95rem;
        }

        .member-social {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .member-social a {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--light);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--dark);
            transition: var(--transition);
        }

        .member-social a:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-3px);
        }

        /* Seção Valores */
        .our-values {
            padding: 80px 0;
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.05) 0%, rgba(247, 37, 133, 0.05) 100%);
        }

        .values-list {
            max-width: 800px;
            margin: 50px auto 0;
        }

        .value-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 40px;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }

        .value-item:hover {
            transform: translateX(10px);
            box-shadow: var(--shadow-md);
        }

        .value-icon {
            flex-shrink: 0;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 25px;
            font-size: 1.5rem;
        }

        .value-content h3 {
            font-size: 1.4rem;
            margin-bottom: 10px;
            color: var(--primary-dark);
        }

        .value-content p {
            color: var(--gray);
            line-height: 1.7;
        }

        /* Newsletter */
        .newsletter {
            background: linear-gradient(135deg, #3a0ca3, #7209b7);
            color: white;
            padding: 60px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .newsletter::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
            transform: rotate(30deg);
            animation: float 15s linear infinite;
        }

        .newsletter-content {
            position: relative;
            z-index: 2;
            max-width: 600px;
            margin: 0 auto;
        }

        .newsletter h3 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .newsletter p {
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .newsletter-form {
            display: flex;
            max-width: 500px;
            margin: 0 auto;
        }

        .newsletter-form input {
            flex: 1;
            padding: 15px 20px;
            border: none;
            border-radius: 30px 0 0 30px;
            font-size: 1rem;
        }

        .newsletter-form input:focus {
            outline: none;
        }

        .newsletter-form button {
            padding: 0 30px;
            background: var(--secondary);
            color: white;
            border: none;
            border-radius: 0 30px 30px 0;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .newsletter-form button:hover {
            background: #ff0676;
        }

        /* Rodapé Moderno */
        .footer {
            background: var(--dark);
            color: white;
            padding: 80px 0 30px;
            position: relative;
        }

        .footer-wave {
            position: absolute;
            top: -100px;
            left: 0;
            width: 100%;
            height: 100px;
            background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" fill="%23212529" opacity=".25"/><path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" fill="%23212529" opacity=".5"/><path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="%23212529"/></svg>');
            background-size: cover;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-column h4 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h4::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background: var(--secondary);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            transition: var(--transition);
            display: inline-block;
        }

        .footer-links a:hover {
            color: white;
            transform: translateX(5px);
        }

        .footer-social {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .footer-social a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .footer-social a:hover {
            background: var(--secondary);
            transform: translateY(-5px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.9rem;
        }

        /* Responsividade */
        @media (max-width: 992px) {
            .story-content {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .story-text {
                padding-right: 0;
            }
            
            .nav-links {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .newsletter-form {
                flex-direction: column;
            }
            
            .newsletter-form input {
                border-radius: 30px;
                margin-bottom: 10px;
            }
            
            .newsletter-form button {
                border-radius: 30px;
                padding: 15px;
            }
            
            .value-item {
                flex-direction: column;
                text-align: center;
            }
            
            .value-icon {
                margin-right: 0;
                margin-bottom: 20px;
            }
        }

        @media (max-width: 576px) {
            .navbar {
                padding: 15px;
            }
            
            .logo-text {
                font-size: 1.2rem;
            }
            
            .search-bar {
                width: 200px;
            }
            
            .about-hero h1 {
                font-size: 2.2rem;
            }
            
            .about-hero p {
                font-size: 1rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
    </style>
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
            <li><a href="Sobre nós.php" class="active">Sobre Nós</a></li>
        </ul>
        
        <div class="nav-icons">
            <a href="carrinho.php" class="cart-icon">
                <i class="fas fa-shopping-cart"></i>
                <span class="cart-count" id="cartCount">0</span>
            </a>
        </div>
    </nav>

    <!-- Banner Hero para Sobre Nós -->
    <section class="about-hero">
        <div class="container">
            <div class="about-hero-content">
                <h1>Sobre o Book Club</h1>
                <p>Conectamos leitores apaixonados e transformamos a experiência literária desde 2010</p>
            </div>
        </div>
    </section>

    <!-- Seção Nossa História -->
    <section class="our-story">
        <div class="container">
            <div class="section-title">
                <h2>Nossa História</h2>
                <p>Uma jornada de paixão por livros e compartilhamento de conhecimento</p>
            </div>
            
            <div class="story-content">
                <div class="story-text">
                    <p>O Book Club nasceu em 2010 a partir de um simples sonho: criar um espaço onde amantes de literatura pudessem se conectar, descobrir novas obras e compartilhar suas experiências de leitura.</p>
                    <p>O que começou como um pequeno clube do livro entre amigos rapidamente se transformou em uma comunidade vibrante de milhares de leitores em todo o Brasil. Nossa paixão por livros nos impulsionou a criar uma plataforma que fosse além das livrarias tradicionais.</p>
                    <p>Hoje, somos mais do que uma livraria online - somos um ecossistema literário completo, oferecendo desde best-sellers até obras independentes, clubes de leitura temáticos, eventos com autores e uma plataforma para novos escritores.</p>
                    <p>Nossa missão continua a mesma: inspirar, conectar e transformar vidas através do poder dos livros.</p>
                </div>
                <div class="story-image">
                    <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Nossa história - Book Club">
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Nossa Missão -->
    <section class="our-mission">
        <div class="container">
            <div class="section-title">
                <h2>Nossa Missão</h2>
                <p>O que nos move e nos inspira todos os dias</p>
            </div>
            
            <div class="mission-cards">
                <div class="mission-card">
                    <div class="mission-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3>Democratizar a Leitura</h3>
                    <p>Tornar os livros acessíveis para todos, independentemente de localização ou condição financeira, com preços justos e diversas opções de formato.</p>
                </div>
                
                <div class="mission-card">
                    <div class="mission-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Conectar Leitores</h3>
                    <p>Construir uma comunidade onde leitores possam compartilhar experiências, recomendações e descobrir novas perspectivas através da literatura.</p>
                </div>
                
                <div class="mission-card">
                    <div class="mission-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3>Fomentar Novos Talentos</h3>
                    <p>Oferecer plataforma e suporte para autores independentes e emergentes, ajudando a dar voz a novas histórias e perspectivas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Valores -->
    <section class="our-values">
        <div class="container">
            <div class="section-title">
                <h2>Nossos Valores</h2>
                <p>Os princípios que guiam cada decisão que tomamos</p>
            </div>
            
            <div class="values-list">
                <div class="value-item">
                    <div class="value-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="value-content">
                        <h3>Paixão por Livros</h3>
                        <p>Acreditamos no poder transformador da literatura. Cada livro em nosso catálogo é selecionado com cuidado e amor pela leitura.</p>
                    </div>
                </div>
                
                <div class="value-item">
                    <div class="value-icon">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <div class="value-content">
                        <h3>Compromisso com o Cliente</h3>
                        <p>Nossos leitores estão no centro de tudo que fazemos. Buscamos sempre superar expectativas e criar experiências memoráveis.</p>
                    </div>
                </div>
                
                <div class="value-item">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <div class="value-content">
                        <h3>Inovação Constante</h3>
                        <p>Estamos sempre buscando novas formas de melhorar a experiência de leitura, desde tecnologia até formatos de conteúdo inovadores.</p>
                    </div>
                </div>
                
                <div class="value-item">
                    <div class="value-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="value-content">
                        <h3>Integridade e Transparência</h3>
                        <p>Agimos com ética em todas as nossas relações, seja com clientes, autores, parceiros ou colaboradores.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter">
        <div class="container">
            <div class="newsletter-content">
                <h3>Junte-se à nossa comunidade literária</h3>
                <p>Inscreva-se em nossa newsletter para receber recomendações personalizadas, novidades do mundo literário e promoções exclusivas.</p>
                
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
                    <h4>Book Club</h4>
                    <p>Transformando vidas através da leitura desde 2010. Sua livraria online com curadoria especializada para todos os gostos.</p>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="footer-column">
                    <h4>Links Rápidos</h4>
                    <ul class="footer-links">
                        <li><a href="#">Início</a></li>
                        <li><a href="#">Livros</a></li>
                        <li><a href="#">Autores</a></li>
                        <li><a href="#">Eventos</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h4>Categorias</h4>
                    <ul class="footer-links">
                        <li><a href="#">Ficção</a></li>
                        <li><a href="#">Não-Ficção</a></li>
                        <li><a href="#">Literatura Brasileira</a></li>
                        <li><a href="#">Infantil</a></li>
                        <li><a href="#">Autoajuda</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h4>Contato</h4>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt"></i> Av. Paulista, 1000, São Paulo</li>
                        <li><i class="fas fa-phone"></i> (11) 3000-1000</li>
                        <li><i class="fas fa-envelope"></i> contato@bookclub.com.br</li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2023 Book Club - Todos os direitos reservados</p>
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

        // Simulação de itens no carrinho
        document.getElementById('cartCount').textContent = Math.floor(Math.random() * 5) + 1;
    </script>
</body>
</html>