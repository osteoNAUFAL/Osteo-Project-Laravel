<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Osteo Naufal Al Badi</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <header class="bg-gray-800 text-white">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">Osteo Naufal Al Badi</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="#about" class="hover:underline">About Me</a></li>
                    <li><a href="#projects" class="hover:underline">Projects</a></li>
                    <li><a href="#contact" class="hover:underline">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="bg-gray-200 py-20">
        <div class="container mx-auto text-center">
            <img src="path_to_your_image.jpg" alt="Profile Picture" class="w-24 h-24 rounded-full mx-auto">
            <h2 class="text-3xl font-semibold mt-4">Selamat datang di Website saya!</h2>
            <p class="text-gray-600">Ini adalah Website yang saya buat memakai bantuan AI</p>
        </div>
    </section>

    <section id="about" class="py-10">
        <div class="container mx-auto px-4">
            <h3 class="text-2xl font-semibold">About Me</h3>
            <p class="text-gray-700 mt-2">Suka meme luar negeri yang tidak berkonteks.</p>
        </div>
    </section>

    <section id="projects" class="py-10">
        <div class="container mx-auto px-4">
            <h3 class="text-2xl font-semibold">My Projects</h3>
            <p class="text-gray-700 mt-2">Sedang mengerjakan sesuatu...</p>
        </div>
    </section>

    <section id="contact" class="py-10">
        <div class="container mx-auto px-4">
            <h3 class="text-2xl font-semibold">Contact Me</h3>
            <p class="text-gray-700 mt-2">Silahkan kontak saya jika ingin berteman!</p>
        </div>
    </section>

    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p>copy; 2024 Osteo Naufal Al Badi. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>
