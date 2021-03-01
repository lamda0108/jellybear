<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Slidecss -->
    <link href="{{ asset('css/superslides.css') }}" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
            <nav class="w-full h-28">
                <div class="w-full h-1/2 bg-pink-light flex justify-between items-center">
                    <div class="w-16 pl-5 py-1 flex items-center">
                        <img class="w-full" src="{{asset('images/bear-logo.png')}}" alt="">
                        <h3 class="hidden md:block md:text-yellow-default md:text-lg md:tracking-wider">JellyBear</h3>
                    </div>
                    <div>
                        <form action="" method="POST">
                            <div class="relative text-gray-600 focus-within:text-gray-400">
                                <input type="text" name="query" id="query" class="bg-white px-5 py-1 rounded" placeholder="Search">   
                                <span class="absolute inset-y-0 right-0 flex items-center pr-3"><i class="fas fa-search"></i></span>
                            </div>
                        </form>
                    </div>
                    <div class="flex items-center px-3">
                        <span class="text-2xl"><i class="fas fa-user"></i></span>
                        <a href="{{ route('cart.show') }}" class="text-2xl px-5 md:px-10">
                            <i class="fas fa-shopping-bag"></i>
                            <span class="text-lg">({{ session()->has('jellybearCart')? session()->get('jellybearCart')->totalQty : '0'}})</span>
                        </a>
                    </div>
                </div>
                <div class="w-full h-14 bg-blue-light flex items-center justify-center">
                    <ul class="flex w-full justify-center text-lg uppercase text-pink-dark tracking-wider">
                        <li class="px-3 md:px-6">
                           <a href="/">home</a>
                        </li>
                        <li class="px-3 md:px-6">
                           <a href="{{route('category.show', ['slug' => 'animals'])}}">animals</a>
                        </li>
                        <li class="px-3 md:px-6">
                           <a href="{{route('category.show', ['slug' => 'books'])}}">books</a>
                        </li>
                        <li class="px-3 md:px-6">
                           <a href="{{route('category.show', ['slug' => 'amuseables'])}}">amuseables</a>
                        </li>
                        <li class="px-3 md:px-6">
                           <a href="">about</a>
                        </li>
                    </ul>
                </div>
            </nav>
        <main class="">
            @yield('content')
        </main>
        <footer class="py-10 bg-brown-default text-yellow-light text-lg text-center tracking-wide">
            &copy; Created By Yue Jones 2021 with love. All rights reserved.
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ asset('js/jquery.superslides.min.js')}} "></script>
    <script src="{{ asset('js/owl.carousel.min.js')}} "></script>
        <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
