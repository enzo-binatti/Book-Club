        // Atualizar contador do carrinho
        function updateCartCount() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
            document.getElementById('cartCount').textContent = totalItems;
        }

        // Adicionar ao carrinho
        function addToCart() {
            const name = "As Armas da Persuasão";
            const price = 87.33;
            const quantity = parseInt(document.getElementById('productQuantity').value);
            
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            const existingProduct = cart.find(item => item.name === name);
            
            if (existingProduct) {
                existingProduct.quantity += quantity;
            } else {
                cart.push({ name, price, quantity });
            }
            
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartCount();
            
            showNotification(`${name} foi adicionado ao carrinho!`, 'success');
        }

        // Adicionar produto relacionado ao carrinho
        function addToCartRelated(name, price) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            const existingProduct = cart.find(item => item.name === name);
            
            if (existingProduct) {
                existingProduct.quantity += 1;
            } else {
                cart.push({ name, price, quantity: 1 });
            }
            
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartCount();
            
            showNotification(`${name} foi adicionado ao carrinho!`, 'success');
        }

        // Adicionar à lista de desejos
        function addToWishlist() {
            const name = "As Armas da Persuasão";
            const price = 87.33;
            
            let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
            const existingProduct = wishlist.find(item => item.name === name);
            
            if (!existingProduct) {
                wishlist.push({ name, price });
                localStorage.setItem('wishlist', JSON.stringify(wishlist));
                showNotification(`${name} foi adicionado à sua lista de desejos!`, 'success');
            } else {
                showNotification('Este produto já está na sua lista de desejos!', 'info');
            }
        }

        // Mostrar notificação
        function showNotification(message, type) {
            const notification = document.createElement('div');
            notification.style.position = 'fixed';
            notification.style.bottom = '20px';
            notification.style.right = '20px';
            notification.style.backgroundColor = type === 'success' ? '#4BB543' : '#2196F3';
            notification.style.color = 'white';
            notification.style.padding = '15px 25px';
            notification.style.borderRadius = '5px';
            notification.style.boxShadow = '0 4px 8px rgba(0,0,0,0.2)';
            notification.style.zIndex = '1000';
            notification.style.animation = 'slideIn 0.5s, fadeOut 0.5s 2.5s forwards';
            notification.innerHTML = `<i class="fas fa-${type === 'success' ? 'check-circle' : 'info-circle'}"></i> ${message}`;
            
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.remove();
            }, 3000);
        }

        // Alterar quantidade
        function increaseQuantity() {
            const quantityInput = document.getElementById('productQuantity');
            quantityInput.value = parseInt(quantityInput.value) + 1;
        }

        function decreaseQuantity() {
            const quantityInput = document.getElementById('productQuantity');
            if (parseInt(quantityInput.value) > 1) {
                quantityInput.value = parseInt(quantityInput.value) - 1;
            }
        }

        // Alterar imagem principal
        function changeImage(src) {
            document.getElementById('mainProductImage').src = src;
            
            // Atualizar thumbnails ativas
            const thumbnails = document.querySelectorAll('.thumbnail');
            thumbnails.forEach(thumb => thumb.classList.remove('active'));
            event.currentTarget.classList.add('active');
        }

        // Abas de informações
        function openTab(tabId) {
            // Esconder todos os conteúdos
            const tabContents = document.querySelectorAll('.tab-content');
            tabContents.forEach(content => content.classList.remove('active'));
            
            // Desativar todos os botões
            const tabButtons = document.querySelectorAll('.tab-btn');
            tabButtons.forEach(button => button.classList.remove('active'));
            
            // Mostrar conteúdo selecionado
            document.getElementById(tabId).classList.add('active');
            
            // Ativar botão selecionado
            event.currentTarget.classList.add('active');
        }

        // Assinar newsletter
        function subscribeNewsletter(event) {
            event.preventDefault();
            const email = event.target.querySelector('input').value;
            
            // Simular armazenamento (em um caso real, seria uma chamada AJAX)
            let subscribers = JSON.parse(localStorage.getItem('newsletterSubscribers')) || [];
            if (!subscribers.includes(email)) {
                subscribers.push(email);
                localStorage.setItem('newsletterSubscribers', JSON.stringify(subscribers));
                showNotification('Obrigado por assinar nossa newsletter!', 'success');
            } else {
                showNotification('Este e-mail já está cadastrado!', 'info');
            }
            
            event.target.reset();
        }

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Atualizar contador ao carregar a página
        document.addEventListener('DOMContentLoaded', updateCartCount);

        // Adicionar animação CSS dinamicamente
        const style = document.createElement('style');
        style.innerHTML = `
            @keyframes slideIn {
                from { transform: translateX(100%); opacity: 0; }
                to { transform: translateX(0); opacity: 1; }
            }
            @keyframes fadeOut {
                from { opacity: 1; }
                to { opacity: 0; }
            }
        `;
        document.head.appendChild(style);