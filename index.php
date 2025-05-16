<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="website icon" href="/assets/images/logo.webp" />
    <title>Horizon voyage</title>
    <!-- CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hero-bg {
            background-image: url("/assets/images/home.webp");
            /* background-image: url("https://images.unsplash.com/photo-1580094333632-438bdc04f79f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"); */
        }

        .contact-bg {
            background-image: url("assets/images/bg-contact.webp");
        }
    </style>
</head>

<body>
    <!-- ############## -->
    <!-- Header -->
    <!-- ############## -->
    <header class="relative">
        <nav class="bg-gray-900/90 backdrop-blur-md fixed w-full z-50 shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16 md:h-20">
                    <!-- logo + nom du site -->
                    <div class="flex items-center space-x-2">
                        <div class="flex-shrink-0">
                            <img src="assets/images/logo.webp" alt="Logo Horizon Voyage" class="h-8 w-8 md:h-10 md:w-10 transition-transform hover:scale-110">
                        </div>
                        <span class="text-white font-bold text-lg hidden sm:block">Horizon Voyage</span>
                    </div>

                    <!-- Navigation destop -->
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-center space-x-1">
                            <a href="#" class="text-gray-300 hover:bg-red-600/90 hover:text-white px-4 py-2 rounded-md text-sm font-medium transition-all duration-300 flex items-center group">
                                <box-icon name='home' class="mr-1 group-hover:animate-bounce"></box-icon>
                                Accueil
                            </a>
                            <a href="#" class="text-gray-300 hover:bg-red-600/90 hover:text-white px-4 py-2 rounded-md text-sm font-medium transition-all duration-300 flex items-center group">
                                <box-icon name='map' class="mr-1 group-hover:animate-pulse"></box-icon>
                                Destinations
                            </a>
                            <a href="#" class="text-gray-300 hover:bg-red-600/90 hover:text-white px-4 py-2 rounded-md text-sm font-medium transition-all duration-300 flex items-center group">
                                <box-icon name='gift' class="mr-1 group-hover:rotate-12"></box-icon>
                                Offres
                            </a>
                            <a href="#" class="text-gray-300 hover:bg-red-600/90 hover:text-white px-4 py-2 rounded-md text-sm font-medium transition-all duration-300 flex items-center group">
                                <box-icon name='phone' class="mr-1 group-hover:shake"></box-icon>
                                Contact
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center space-x-3">
                        <a href="#" class="hidden md:inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 transition-colors duration-300">
                            <box-icon name='calendar' class="mr-1"></box-icon>
                            Réserver
                        </a>

                        <!-- btn menu mobile -->
                        <button type="button"
                            class="md:hidden bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-red-500"
                            aria-label="Menu"
                            id="menu-button">
                            <box-icon name="menu" class="h-6 w-6 menu-icon"></box-icon>
                            <box-icon name="x" class="h-6 w-6 close-icon hidden"></box-icon>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Menu mobile  -->
            <div class="md:hidden hidden bg-gray-800/95 backdrop-blur-sm" id="mobile-menu">
                <div class="px-2 pt-2 pb-4 space-y-1 sm:px-3">
                    <a href="#" class="text-gray-300 hover:bg-red-600 hover:text-white block px-3 py-3 rounded-md text-base font-medium flex items-center transition-colors">
                        <box-icon name='home' class="mr-2"></box-icon>
                        Accueil
                    </a>
                    <a href="#" class="text-gray-300 hover:bg-red-600 hover:text-white block px-3 py-3 rounded-md text-base font-medium flex items-center transition-colors">
                        <box-icon name='map' class="mr-2"></box-icon>
                        Destinations
                    </a>
                    <a href="#" class="text-gray-300 hover:bg-red-600 hover:text-white block px-3 py-3 rounded-md text-base font-medium flex items-center transition-colors">
                        <box-icon name='gift' class="mr-2"></box-icon>
                        Offres
                    </a>
                    <a href="#" class="text-gray-300 hover:bg-red-600 hover:text-white block px-3 py-3 rounded-md text-base font-medium flex items-center transition-colors">
                        <box-icon name='phone' class="mr-2"></box-icon>
                        Contact
                    </a>
                    <a href="#" class="mt-2 inline-flex items-center justify-center w-full px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-700">
                        <box-icon name='calendar' class="mr-2"></box-icon>
                        Réserver maintenant
                    </a>
                </div>
            </div>
        </nav>
    </header>



    <!-- ############## -->
    <!-- Home -->
    <!-- ############## -->
    <section class="relative h-screen flex items-center justify-center hero-bg bg-fixed bg-center bg-cover">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative text-center p-6">
            <h1 class="text-4xl md:text-6xl font-bold mb-4 text-white">L'Appel de l'Inconnu Vous Attend</h1>
            <p class="text-lg md:text-2xl mb-8 text-white">Des paysages à couper le souffle, des cultures à rencontrer... Votre histoire commence ici.</p>
            <button class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-7 py-3 rounded-full font-semibold hover:shadow-xl transition duration-300">
                🌍 Commencer mon aventure
            </button>
        </div>
    </section>

    <!-- ############## -->
    <!-- Galerie -->
    <!-- ############## -->
    <section class="text-center py-12 bg-gradient-to-b from-white to-gray-50">
        <h2 class="text-4xl md:text-5xl text-amber-600 font-extrabold mb-3 tracking-wide">
            CARNETS DE VOYAGE
        </h2>
        <p class="text-xl text-gray-700 max-w-2xl mx-auto italic">
            "Des instants volés aux quatre coins du monde, pour allumer votre désir d'ailleurs"
        </p>
    </section>
    <!-- section  Card -->
    <section class="w-full max-w-[1200px] m-auto p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- carye 1 -->
            <h2 class="text-xl font-bold mb-2">Safari Tanzanien</h2>
            <p class="text-gray-700 mb-4">5 jours dans le cratère du Ngorongoro avec guides Maasaï</p>
            <button class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded transition-colors">Voir l'itinéraire</button>

            <!-- carte 2 -->
            <h2 class="text-xl font-bold mb-2">Weekend Venitien</h2>
            <p class="text-gray-700 mb-4">Palais du XVIe siècle face au Grand Canal</p>
            <button class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded transition-colors">Découvrir</button>

            <!-- carte 3 -->
            <h2 class="text-xl font-bold mb-2">Trekking Inca</h2>
            <p class="text-gray-700 mb-4">Machu Picchu par le chemin secret des Llactapata</p>
            <button class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded transition-colors">Réserver</button>

            <!-- carte 4 -->
            <h2 class="text-xl font-bold mb-2">Atelier Sushi à Kyoto</h2>
            <p class="text-gray-700 mb-4">Initiation avec un maître poissonnier de Tsukiji</p>
            <button class="bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded transition-colors">S'inscrire</button>

            <!-- carte 5 -->
            <h2 class="text-xl font-bold mb-2">Nuit Berbère</h2>
            <p class="text-gray-700 mb-4">Dîner sous les étoiles du désert marocain</p>
            <button class="bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded transition-colors">Programme</button>

            <!-- carte 6 -->
            <h2 class="text-xl font-bold mb-2">Carnaval de Rio</h2>
            <p class="text-gray-700 mb-4">Accès VIP aux répétitions des écoles de samba</p>
            <button class="bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded transition-colors">VIP Experience</button>
        </div>
    </section>


    <!-- ############# -->
    <!-- Contact -->
    <!-- ############# -->
    <section class="px-4 py-12 contact-bg bg-fixed bg-center bg-cover">
        <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg bg-opacity-25">
            <h2 class="text-4xl text-red-600 uppercase font-black mb-2 text-center">Contactez nous</h2>
            <p class="text-lg text-gray-600 text-center mb-12">
                Chaque grand voyage commence par une conversation. Parlons de votre prochaine aventure...
            </p>
            <!-- Formulaire de contact  -->
            <form action="#" method="POST" class="space-y-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
                    <input type="text" id="name" name="name" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500">
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="4" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="w-full md:w-auto inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Envoyer</button>
                </div>
            </form>
        </div>
    </section>


    <!-- ############## -->
    <!-- Footer -->
    <!-- ############## -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
                <!-- div contact -->
                <div class="space-y-4">
                    <h3 class="text-xl font-bold mb-4 border-b border-red-600 pb-2 inline-block">Contactez-nous</h3>
                    <div class="flex items-start space-x-3">
                        <box-icon name='map' color="#f43f5e" class="flex-shrink-0 mt-1"></box-icon>
                        <p class="text-gray-300">48 Rue Mulele,<br>Kinshasa, RDC</p>
                    </div>
                    <div class="flex items-center space-x-3">
                        <box-icon name='phone' color="#f43f5e"></box-icon>
                        <a href="tel:+243818252385" class="text-gray-300 hover:text-red-400 transition-colors">+243 818 252 385</a>
                    </div>
                    <div class="flex items-center space-x-3">
                        <box-icon name='envelope' color="#f43f5e"></box-icon>
                        <a href="mailto:Horizonvoyage@gmail.com" class="text-gray-300 hover:text-red-400 transition-colors">Horizonvoyage@gmail.com</a>
                    </div>
                </div>

                <!-- lienns utile -->
                <div>
                    <h3 class="text-xl font-bold mb-4 border-b border-red-600 pb-2 inline-block">Liens Rapides</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-300 hover:text-red-400 flex items-center space-x-2 transition-colors">
                                <box-icon name='chevron-right' size="xs" color="#f43f5e"></box-icon>
                                <span>Accueil</span>
                            </a></li>
                        <li><a href="#" class="text-gray-300 hover:text-red-400 flex items-center space-x-2 transition-colors">
                                <box-icon name='chevron-right' size="xs" color="#f43f5e"></box-icon>
                                <span>Destinations</span>
                            </a></li>
                        <li><a href="#" class="text-gray-300 hover:text-red-400 flex items-center space-x-2 transition-colors">
                                <box-icon name='chevron-right' size="xs" color="#f43f5e"></box-icon>
                                <span>Circuits</span>
                            </a></li>
                        <li><a href="#" class="text-gray-300 hover:text-red-400 flex items-center space-x-2 transition-colors">
                                <box-icon name='chevron-right' size="xs" color="#f43f5e"></box-icon>
                                <span>Contact</span>
                            </a></li>
                    </ul>
                </div>

                <!-- reseaux sociaux -->
                <div>
                    <h3 class="text-xl font-bold mb-4 border-b border-red-600 pb-2 inline-block">Suivez-nous</h3>
                    <p class="text-gray-300 mb-4">Rejoignez notre communauté de voyageurs</p>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-gray-800 rounded-full w-10 h-10 flex items-center justify-center hover:bg-red-600 transition-colors group" aria-label="Facebook">
                            <box-icon name='facebook' type='logo' color="#ffffff" class="group-hover:scale-110 transition-transform"></box-icon>
                        </a>
                        <a href="#" class="bg-gray-800 rounded-full w-10 h-10 flex items-center justify-center hover:bg-red-600 transition-colors group" aria-label="Twitter">
                            <box-icon name='twitter' type='logo' color="#ffffff" class="group-hover:scale-110 transition-transform"></box-icon>
                        </a>
                        <a href="#" class="bg-gray-800 rounded-full w-10 h-10 flex items-center justify-center hover:bg-red-600 transition-colors group" aria-label="Instagram">
                            <box-icon name='instagram-alt' type='logo' color="#ffffff" class="group-hover:scale-110 transition-transform"></box-icon>
                        </a>
                        <a href="#" class="bg-gray-800 rounded-full w-10 h-10 flex items-center justify-center hover:bg-red-600 transition-colors group" aria-label="YouTube">
                            <box-icon name='youtube' type='logo' color="#ffffff" class="group-hover:scale-110 transition-transform"></box-icon>
                        </a>
                    </div>

                    <!-- nwsletter -->
                    <div class="mt-6">
                        <p class="text-gray-300 mb-2">Abonnez-vous à notre newsletter</p>
                        <div class="flex">
                            <input type="email" placeholder="Votre email" class="px-4 py-2 rounded-l-md focus:outline-none text-gray-800 w-full">
                            <button class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded-r-md transition-colors">
                                <box-icon name='send' color="#ffffff"></box-icon>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyright avec crédits design -->
            <div class="text-center space-y-1 text-gray-400 mt-12 pt-6 border-t border-gray-700">
                <div>
                    &copy; <span id="currentYear">2025</span> -
                    <a href="#" class="hover:text-red-400 transition-colors duration-200">Horizon Voyage</a> -
                    Tous droits réservés.
                </div>
                <div class="text-xs flex items-center justify-center space-x-1 text-gray-500 hover:text-gray-300 transition-colors">
                    <span>Design par</span>
                    <a href="https://denismaka.com" target="_blank" rel="noopener" class="inline-flex items-center">
                        <box-icon name='pencil' size="xs" class="mr-1"></box-icon>
                        <span class="font-medium">DenisMaka</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>












    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>