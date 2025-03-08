<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DevocionalNote</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans bg-[#F9F1E6]">
        <div class="flex flex-col items-center justify-center mt-48">
            <div>
                <img
                    src="/images/logoNote.png"
                    alt="Logo Devocional Note"
                    class="h-[200px]"
                />
            </div>

            <div class="flex justify-center items-center mt-4 px-4 md:px-16">
                <h1 class="font-semibold max-w-3xl text-center">
                    Organize reflexões e fortaleça sua espiritualidade com simplicidade utilizando o
                    <br><span class="text-primary">DevocionalNote</span>.
                </h1>
            </div>

            <div class="flex flex-col gap-3 mt-5">
                <a
                    href="{{ route('login') }}"
                    class="bg-primary text-white text-center font-medium px-24 py-2 hover:bg-primary-accent duration-300 rounded-md shadow-lg"
                >
                    Login
                </a>

                <a
                    href="{{ route('register') }}"
                    class="bg-white text-primary text-center font-medium px-24 py-2 hover:bg-slate-300 duration-300 rounded-md shadow-lg outline outline-2 outline-primary outline-offset-0"
                >
                    Crie sua conta
                </a>
            </div>

            <div class="flex flex-col items-center justify-center mt-8">
                <h1>Ou inicie sessão com</h1>

                <a
                    href="{{ route('auth.google') }}"
                    class="text-primary text-3xl bg-white hover:bg-primary duration-300 hover:text-white px-12 py-2 rounded-md mt-3 cursor-pointer shadow-lg"
                >
                    <x-svg.google />
                </a>
            </div>
        </div>
    </body>
</html>
