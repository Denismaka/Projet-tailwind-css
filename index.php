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
    </style>
</head>

<body>
    <!-- ############## -->
    <!-- Header -->
    <!-- ############## -->
    <header>
        <nav class="bg-gray-800 bg-opacity-75 fixed w-full z-10">
            <div class="maw-w-7xl mw-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img src="assets/images/logo.webp" alt="logo" class="h-8 w-8">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3  py-2 rounded-md text-sm font-medium">
                                    Accueil
                                </a>
                                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3  py-2 rounded-md text-sm font-medium">
                                    Destination
                                </a>
                                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3  py-2 rounded-md text-sm font-medium">
                                    Offres
                                </a>
                                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3  py-2 rounded-md text-sm font-medium">
                                    contact
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <button type="button" class="bg-white inline-flex items-center justify-center p-2 rounded-md hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:rong-white" aria-controls="mobile-menu" aria-expanded="false" id="menu-button">
                            <box-icon name="menu" class="h-6 w-6 menu-icon "></box-icon>
                            <box-icon name="x" class="h-6 w-6 close-icon hidden "></box-icon>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu -->
            <div class="md:hidden hidden " id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Accueil</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Destinations</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Offres</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contact</a>
                </div>
            </div>
        </nav>
    </header>











    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>