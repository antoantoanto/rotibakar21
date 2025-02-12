<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
        <title>Roti Pisang Panggang 21</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="shortcut icon" href="{{asset('logo/roti.png')}}">
        @vite('resources/css/app.css')
    </head>
<body>

    <x-navbar></x-navbar>

    
    <div class="relative py-20 bg-gradient-to-br from-yellow-400 via-orange-500 to-red-600 overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
                <h4 class="text-4xl md:text-5xl font-bold text-white mb-6 animate-slideInDown">
                    Nongkrong Asyik &amp; Nyaman
                    <span class="block text-2xl mt-2 font-medium">Dengan Camilan Premium</span>
                </h4>
                <p class="text-lg text-white/90 mb-8 leading-relaxed">
                    Pesan cepat via GrabFood, GoFood, ShopeeFood!<br>
                    <span class="inline-block mt-2 px-4 py-2 bg-black/20 rounded-full">⭐️ Rating 4.9/5 dari 1200+ review</span>
                </p>
            </div>
        </div>
        <div class="absolute inset-0 opacity-10" style="background-image: url('{{ asset('img/bg-pattern.png') }}');"></div>
    </div>

<x-card></x-card>
<x-footer></x-footer>

</body>

</html>
