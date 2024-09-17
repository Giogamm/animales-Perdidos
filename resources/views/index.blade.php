<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animal Finder</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100">
    <header class="bg-teal-700 text-white dark:bg-teal-900 dark:text-gray-100 p-3 shadow-md md:w-auto">
        <div class="max-w-7xl mx-auto flex flex-row justify-between items-center">
            <section>
                <h1 class="font-extrabold md:text-3xl text-2xl tracking-tight">Mascotas Localizadas</h1>
                <h3 class="md:text-lg text-sm font-light">Localiza a tu mascota perdida</h3>
            </section>

            <nav>
                <div class="md:hidden">
                    <x-svg-menu-icon class="md:hidden"/>
                </div>
                <ul class="md:flex md:flex-row flex-col gap-2 text-center md:justify-center md:items-center hidden">
                    <li>
                        <a href="#" class="hover:bg-teal-600/70 rounded-md md:p-2 transition-colors duration-300">Conócenos</a>
                    </li>
                    <li>
                        <a href="/login" class="hover:bg-teal-600/70 rounded-md md:p-2 transition-colors duration-300 block">Inicia sesión</a>
                    </li>
                    <li>
                        <a href="/register" class="hover:bg-teal-600/70 rounded-md md:p-2 transition-colors duration-300">Regístrate</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="bg-white text-gray-900 dark:bg-gray-800 dark:text-gray-300 p-8 mt-5 shadow-lg rounded-lg max-w-4xl mx-auto">
        <h2 class="text-center text-3xl font-bold mb-6">Más información</h2>
        <div class="space-y-5 leading-relaxed text-lg">
            <p>Mascotas Localizadas surge como una opción para buscar animales por medio de páginas web en tu localidad. Nuestra misión es facilitar la conexión entre dueños y sus mascotas perdidas, brindando una plataforma accesible y eficiente para todos.</p>
            <p>En nuestra plataforma, los usuarios pueden publicar anuncios detallados de sus mascotas perdidas, incluyendo fotos y descripciones que ayuden en su identificación. Además, pueden filtrar las búsquedas por localidad y tipo de animal, haciendo más efectiva la búsqueda.</p>
            <p>Creemos en el poder de la comunidad y en cómo la tecnología puede ayudar a reunir a las familias con sus seres queridos de cuatro patas. Únete a nosotros y sé parte de esta red de apoyo que trabaja incansablemente por encontrar y devolver a las mascotas a sus hogares.</p>
        </div>
    </section>

     <footer class="bg-gray-900 text-gray-400 dark:bg-gray-800 dark:text-gray-300 p-6 mt-10 shadow-inner">
        <div class="max-w-7xl mx-auto text-center">
            <p class="mb-2">&copy; 2024 Animal Finder. Todos los derechos reservados.</p>
            <nav>
                <ul class="flex justify-center space-x-4">
                    <li><a href="#" class="hover:underline">Política de privacidad</a></li>
                    <li><a href="#" class="hover:underline">Términos de uso</a></li>
                    <li><a href="#" class="hover:underline">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </footer>
</body>

</html>
