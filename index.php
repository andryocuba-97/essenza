<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Essenza - Loja Oficial de Velas Aromáticas</title>
    
    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'essenza-black': '#111111',
                        'essenza-gray': '#282828',
                        'essenza-gold': '#CBA25B',
                        'essenza-beige-dark': '#E7D9C2',
                        'essenza-beige-light': '#F7F3EE',
                    },
                    fontFamily: {
                        cinzel: ['Cinzel', 'serif'],
                        montserrat: ['Montserrat', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <style>
        html { scroll-behavior: smooth; }
        .fade-in { animation: fadeIn 1.5s ease-in-out; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        /* Classe para ocultar a barra de rolagem mas manter a funcionalidade */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="font-montserrat bg-essenza-beige-light text-essenza-gray antialiased selection:bg-essenza-gold selection:text-white">

    <!-- NAVBAR FIXA -->
    <nav class="fixed w-full z-50 bg-essenza-black/95 backdrop-blur-sm border-b border-essenza-gold/30 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <!-- Logo Tipográfico -->
            <a href="#" class="font-cinzel text-2xl text-essenza-beige-light tracking-widest hover:text-essenza-gold transition-colors">
                ESSENZA
            </a>
            
            <!-- Menu Desktop -->
            <div class="hidden md:flex space-x-8 text-xs tracking-widest uppercase font-semibold text-essenza-beige-light">
                <a href="#sobre" class="hover:text-essenza-gold transition-colors">Sobre</a>
                <a href="#loja" class="hover:text-essenza-gold transition-colors">Loja</a>
                <a href="#depoimentos" class="hover:text-essenza-gold transition-colors">Avaliações</a>
                <a href="#contato" class="hover:text-essenza-gold transition-colors">Contato</a>
            </div>

            <!-- Ícone de Carrinho -->
            <button onclick="toggleCart()" class="relative text-essenza-beige-light hover:text-essenza-gold transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
                <!-- Badge de quantidade no carrinho -->
                <span id="cart-count" class="absolute -top-2 -right-2 bg-essenza-gold text-essenza-black text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center opacity-0 transition-opacity">0</span>
            </button>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <header class="relative bg-essenza-black min-h-screen flex flex-col items-center justify-center overflow-hidden pt-20">
        <div class="absolute inset-0 z-0 opacity-20">
            <img src="https://images.unsplash.com/photo-1603006905003-be475563bc59?q=80&w=2000&auto=format&fit=crop" alt="Fundo de Vela" class="w-full h-full object-cover">
        </div>
        
        <div class="z-10 text-center px-4 fade-in">
            <div class="w-24 h-24 border border-essenza-gold rounded-full flex items-center justify-center mx-auto mb-8 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-essenza-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v4m0 0a4 4 0 100 8m0-8a4 4 0 110 8m-4.5 4h9a2 2 0 002-2v-4a2 2 0 00-2-2h-9a2 2 0 00-2 2v4a2 2 0 002 2z" />
                </svg>
            </div>
            
            <h1 class="font-cinzel text-5xl md:text-7xl text-essenza-beige-light tracking-[0.25em] mb-4 ml-4">
                ESSENZA
            </h1>
            <div class="flex items-center justify-center space-x-4 mb-12">
                <div class="h-[1px] w-12 bg-essenza-gold"></div>
                <p class="font-montserrat text-essenza-gold tracking-[0.3em] uppercase text-xs md:text-sm">Velas Aromáticas</p>
                <div class="h-[1px] w-12 bg-essenza-gold"></div>
            </div>
            
            <a href="#loja" class="inline-block bg-essenza-gold text-essenza-black px-10 py-4 uppercase text-xs font-semibold tracking-widest hover:bg-essenza-beige-light transition-colors duration-300">
                Explorar Loja
            </a>
        </div>
    </header>

    <!-- SEÇÃO SOBRE A MARCA -->
    <section id="sobre" class="py-24 px-6 md:px-12 max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 items-center pt-32">
        <div>
            <h2 class="font-cinzel text-3xl md:text-4xl text-essenza-black tracking-widest mb-6">Nossa Filosofia</h2>
            <div class="w-16 h-[2px] bg-essenza-gold mb-8"></div>
            <p class="text-lg leading-relaxed font-light mb-6">
                Essenza é mais que uma vela, é uma experiência para os sentidos. Nossas velas aromáticas transformam ambientes, despertam emoções e proporcionam momentos de bem-estar e aconchego.
            </p>
            <p class="text-lg leading-relaxed font-light">
                Utilizamos ceras 100% vegetais e pavios de algodão, garantindo uma queima limpa. Cada fragrância é uma obra de arte pensada para criar memórias inesquecíveis dentro do seu lar.
            </p>
        </div>
        <div class="relative h-[500px]">
            <img src="https://images.unsplash.com/photo-1610450948956-b0a688b50e39?q=80&w=800&auto=format&fit=crop" alt="Vela Essenza" class="w-full h-full object-cover rounded-tr-[100px] rounded-bl-[100px] border border-essenza-gold/50 shadow-2xl">
        </div>
    </section>

    <!-- MARKETPLACE / LOJA -->
    <section id="loja" class="bg-essenza-beige-dark py-24 px-6 border-y border-[#d5c5ad] pt-32">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="font-cinzel text-3xl md:text-4xl text-essenza-black tracking-widest mb-4">Loja Oficial</h2>
                <p class="font-light text-essenza-gray">Adquira sua essência favorita diretamente conosco.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <!-- Produto 1 -->
                <div class="bg-white rounded shadow-sm hover:shadow-xl transition-all duration-300 relative group flex flex-col h-full">
                    <div class="absolute top-4 left-4 bg-essenza-black text-essenza-gold text-[10px] uppercase tracking-widest px-3 py-1 z-10">Mais Vendido</div>
                    <div class="overflow-hidden h-64 relative bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1602928321679-560bb453f190?q=80&w=800&auto=format&fit=crop" alt="Vela Lavanda" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="p-6 flex flex-col flex-grow text-center">
                        <h3 class="font-cinzel text-lg text-essenza-black font-bold mb-1">Aroma Lavanda Francesa</h3>
                        <p class="text-xs font-light text-essenza-gray mb-4">Linha Relaxamento - 200g</p>
                        <div class="mt-auto">
                            <p class="text-xl text-essenza-black font-semibold mb-4">R$ 89,90</p>
                            <button onclick="adicionarAoCarrinho('Aroma Lavanda Francesa')" class="w-full bg-essenza-black text-essenza-beige-light border border-essenza-black py-3 text-xs uppercase tracking-widest hover:bg-essenza-gold hover:border-essenza-gold hover:text-essenza-black transition-colors duration-300">
                                Adicionar ao Carrinho
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Produto 2 -->
                <div class="bg-white rounded shadow-sm hover:shadow-xl transition-all duration-300 relative group flex flex-col h-full">
                    <div class="overflow-hidden h-64 relative bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1605816988069-b11383b50717?q=80&w=800&auto=format&fit=crop" alt="Vela Baunilha" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="p-6 flex flex-col flex-grow text-center">
                        <h3 class="font-cinzel text-lg text-essenza-black font-bold mb-1">Baunilha & Canela</h3>
                        <p class="text-xs font-light text-essenza-gray mb-4">Linha Aconchego - 200g</p>
                        <div class="mt-auto">
                            <p class="text-xl text-essenza-black font-semibold mb-4">R$ 95,00</p>
                            <button onclick="adicionarAoCarrinho('Baunilha & Canela')" class="w-full bg-transparent text-essenza-black border border-essenza-black py-3 text-xs uppercase tracking-widest hover:bg-essenza-black hover:text-essenza-beige-light transition-colors duration-300">
                                Adicionar ao Carrinho
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Produto 3 -->
                <div class="bg-white rounded shadow-sm hover:shadow-xl transition-all duration-300 relative group flex flex-col h-full">
                    <div class="absolute top-4 left-4 bg-essenza-gold text-essenza-black text-[10px] uppercase tracking-widest px-3 py-1 z-10 font-bold">Lançamento</div>
                    <div class="overflow-hidden h-64 relative bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1596433809252-260c27459d1e?q=80&w=800&auto=format&fit=crop" alt="Vela Alecrim" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="p-6 flex flex-col flex-grow text-center">
                        <h3 class="font-cinzel text-lg text-essenza-black font-bold mb-1">Alecrim Silvestre</h3>
                        <p class="text-xs font-light text-essenza-gray mb-4">Linha Natural - 200g</p>
                        <div class="mt-auto">
                            <p class="text-xl text-essenza-black font-semibold mb-4">R$ 85,00</p>
                            <button onclick="adicionarAoCarrinho('Alecrim Silvestre')" class="w-full bg-transparent text-essenza-black border border-essenza-black py-3 text-xs uppercase tracking-widest hover:bg-essenza-black hover:text-essenza-beige-light transition-colors duration-300">
                                Adicionar ao Carrinho
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Produto 4 -->
                <div class="bg-essenza-black rounded shadow-sm hover:shadow-xl transition-all duration-300 relative group flex flex-col h-full border border-essenza-gold">
                    <div class="overflow-hidden h-64 relative bg-gray-900 opacity-80">
                        <img src="https://images.unsplash.com/photo-1572973757827-2c97486e927c?q=80&w=800&auto=format&fit=crop" alt="Kit Presente" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="p-6 flex flex-col flex-grow text-center">
                        <h3 class="font-cinzel text-lg text-essenza-gold font-bold mb-1">Kit Essenza Completo</h3>
                        <p class="text-xs font-light text-essenza-beige-dark mb-4">Caixa Luxo com 3 Aromas</p>
                        <div class="mt-auto">
                            <p class="text-xl text-essenza-beige-light font-semibold mb-4">R$ 249,90</p>
                            <button onclick="adicionarAoCarrinho('Kit Essenza Completo')" class="w-full bg-essenza-gold text-essenza-black py-3 text-xs uppercase font-bold tracking-widest hover:bg-essenza-beige-light transition-colors duration-300">
                                Adicionar ao Carrinho
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- DEPOIMENTOS -->
    <section id="depoimentos" class="py-24 px-6 max-w-5xl mx-auto pt-32">
        <h2 class="font-cinzel text-3xl text-center text-essenza-black tracking-widest mb-16">O Que Dizem Nossos Clientes</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-8 border border-essenza-gray/20 text-center relative">
                <div class="text-essenza-gold text-4xl font-cinzel absolute -top-5 left-1/2 transform -translate-x-1/2 bg-essenza-beige-light px-4">"</div>
                <p class="text-sm italic mb-6">"Comprei a de Lavanda para meu quarto e a embalagem é impecável. O aroma preenche o ambiente mesmo antes de acender."</p>
                <h4 class="font-bold text-xs uppercase tracking-widest">— Mariana S.</h4>
            </div>
            <div class="p-8 border border-essenza-gray/20 text-center relative bg-white shadow-md">
                <div class="text-essenza-gold text-4xl font-cinzel absolute -top-5 left-1/2 transform -translate-x-1/2 bg-white px-4">"</div>
                <p class="text-sm italic mb-6">"A melhor vela que já tive. O kit premium foi o presente de casamento perfeito para minha melhor amiga. Elegante e sofisticado."</p>
                <h4 class="font-bold text-xs uppercase tracking-widest">— Carlos T.</h4>
            </div>
            <div class="p-8 border border-essenza-gray/20 text-center relative">
                <div class="text-essenza-gold text-4xl font-cinzel absolute -top-5 left-1/2 transform -translate-x-1/2 bg-essenza-beige-light px-4">"</div>
                <p class="text-sm italic mb-6">"Uso a de Baunilha no meu escritório e ela me ajuda muito a relaxar durante o trabalho. Comprarei novamente com certeza."</p>
                <h4 class="font-bold text-xs uppercase tracking-widest">— Amanda R.</h4>
            </div>
        </div>
    </section>

    <!-- CONTATO -->
    <section id="contato" class="bg-essenza-black text-essenza-beige-light py-24 px-6 pt-32">
        <div class="max-w-4xl mx-auto flex flex-col md:flex-row gap-16">
            <div class="flex-1">
                <h2 class="font-cinzel text-3xl tracking-widest mb-6">Fale Conosco</h2>
                <div class="w-16 h-[2px] bg-essenza-gold mb-8"></div>
                <p class="text-sm font-light leading-relaxed mb-8 text-essenza-beige-dark">
                    Dúvidas sobre pedidos, revenda corporativa ou aromas? Nossa equipe está pronta para atender você e proporcionar a melhor experiência.
                </p>
                <div class="space-y-4 text-sm font-light">
                    <p class="flex items-center gap-3"><svg class="w-5 h-5 text-essenza-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg> contato@essenzavelas.com.br</p>
                    <p class="flex items-center gap-3"><svg class="w-5 h-5 text-essenza-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg> (51) 99999-0959</p>
                </div>
            </div>
            
            <div class="flex-1">
                <form class="space-y-6" onsubmit="enviarMensagem(event)">
                    <div>
                        <input type="text" placeholder="SEU NOME COMPLETO" required class="w-full bg-transparent border-b border-essenza-gray py-3 text-sm focus:outline-none focus:border-essenza-gold text-essenza-beige-light placeholder-gray-500 transition-colors">
                    </div>
                    <div>
                        <input type="email" placeholder="SEU E-MAIL" required class="w-full bg-transparent border-b border-essenza-gray py-3 text-sm focus:outline-none focus:border-essenza-gold text-essenza-beige-light placeholder-gray-500 transition-colors">
                    </div>
                    <div>
                        <textarea rows="4" placeholder="SUA MENSAGEM" required class="w-full bg-transparent border-b border-essenza-gray py-3 text-sm focus:outline-none focus:border-essenza-gold text-essenza-beige-light placeholder-gray-500 transition-colors resize-none"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-essenza-gold text-essenza-black py-4 uppercase text-xs font-bold tracking-widest hover:bg-white transition-colors duration-300">
                        Enviar Mensagem
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- FOOTER EXPANDIDO -->
    <footer class="bg-essenza-black text-essenza-beige-light border-t border-essenza-gray/30 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <div class="md:col-span-2">
                <h2 class="font-cinzel text-2xl tracking-[0.2em] mb-2">ESSENZA</h2>
                <p class="font-montserrat text-essenza-gold tracking-[0.3em] uppercase text-xs mb-6">— Velas Aromáticas —</p>
                <p class="text-xs text-essenza-beige-dark max-w-sm leading-relaxed mb-6">
                    Criando atmosferas únicas e transformando ambientes através de fragrâncias exclusivas e design minimalista.
                </p>
            </div>
            
            <div>
                <h4 class="font-bold text-xs uppercase tracking-widest text-essenza-gold mb-6">Navegação</h4>
                <ul class="space-y-3 text-xs text-essenza-beige-dark">
                    <li><a href="#loja" class="hover:text-white transition-colors">Comprar Velas</a></li>
                    <li><a href="#sobre" class="hover:text-white transition-colors">Nossa História</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Política de Devolução</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Dúvidas Frequentes (FAQ)</a></li>
                </ul>
            </div>
            
            <div>
                <h4 class="font-bold text-xs uppercase tracking-widest text-essenza-gold mb-6">Redes Sociais</h4>
                <div class="flex space-x-4">
                    <!-- Ícones (Instagram, Facebook) -->
                    <a href="#" class="w-10 h-10 border border-essenza-gray rounded-full flex items-center justify-center hover:bg-essenza-gold hover:text-essenza-black transition-colors"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
                </div>
            </div>
        </div>

        <div class="text-center font-cinzel text-essenza-beige-dark tracking-widest text-[10px] border-t border-essenza-gray/30 pt-8 w-full">
            <p>ACENDA SENTIMENTOS, CRIE MEMÓRIAS.</p>
            <p class="mt-2 text-essenza-gray font-montserrat">© 2026 Essenza Velas Aromáticas. Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- NOTIFICAÇÃO (TOAST) DE CARRINHO (Simulação) -->
    <div id="toast" class="fixed bottom-10 right-10 bg-white text-essenza-black p-4 shadow-2xl border-l-4 border-essenza-gold flex items-center gap-4 transform translate-y-24 opacity-0 transition-all duration-500 z-50 rounded-sm">
        <svg class="w-6 h-6 text-essenza-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
        <div>
            <p class="text-xs font-bold uppercase tracking-wide">Produto Adicionado!</p>
            <p id="toast-produto" class="text-sm font-light text-essenza-gray"></p>
        </div>
    </div>

    <!-- SCRIPTS DE FUNCIONALIDADES SIMBÓLICAS -->
    <script>
        let cartTotal = 0;

        // Função para simular adição ao carrinho
        function adicionarAoCarrinho(nomeProduto) {
            // Atualiza Badge do carrinho
            cartTotal++;
            const badge = document.getElementById('cart-count');
            badge.innerText = cartTotal;
            badge.classList.remove('opacity-0');
            
            // Exibe notificação (Toast)
            const toast = document.getElementById('toast');
            document.getElementById('toast-produto').innerText = nomeProduto;
            
            toast.classList.remove('translate-y-24', 'opacity-0');
            
            // Esconde notificação após 3 segundos
            setTimeout(() => {
                toast.classList.add('translate-y-24', 'opacity-0');
            }, 3000);
        }

        // Função simbólica para simular envio de formulário
        function enviarMensagem(event) {
            event.preventDefault(); // Impede o recarregamento da página
            alert('Mensagem enviada com sucesso! Nossa equipe retornará em breve.');
            event.target.reset(); // Limpa os campos
        }
    </script>

</body>
</html>
