<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'jellybear') }}</title>
    <!-- tab icon -->
    <link rel="shortcut icon" href="{{asset('images/bear-logo.png')}}">
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
            <nav class="w-full h-28 fixed z-50 shadow">
                <!-- nav first row -->
                <div class="w-full h-1/2 bg-pink-light flex justify-between items-center">
                <!-- logo -->
                    <a href="/">
                        <div class="w-16 pl-5 py-1 flex items-center">
                            <img class="w-full" src="{{asset('images/bear-logo.png')}}" alt="">
                            <h3 class="hidden md:block md:text-yellow-default md:text-lg md:tracking-wider">JellyBear</h3> 
                        </div>
                    </a>
                <!-- end of logo -->
                    <!-- search product form-->
                    <form action="{{route('product.search')}}" method="get">
                        <div class="relative text-gray-600 focus-within:text-gray-400">
                            <input type="text" name="search" id="search" value="{{ request()->input('search') }}" class="bg-white px-3 md:px-5 py-1 rounded outline-none" placeholder="Search">
                            <button type="submit">
                                <span class="absolute inset-y-0 right-0 flex items-center pr-3"><i class="fas fa-search"></i></span>
                            </button>
                        </div>
                    </form>
                    <!-- end of search product form-->
                    <!-- user and cart -->
                    <div class="flex items-center md:px-3 text-brown-dark">
                        @if(!auth()->check())
                            <a href="{{ route('register') }}">
                                <span class="md:text-2xl"><i class="fas fa-user"></i></span>
                            </a>
                        @else
                            <span class="md:text-xl">Hi, {{auth()->user()->name}}</span>
                        @endif

                        <a href="{{ route('cart.show') }}" class="md:text-2xl px-2 md:px-10">
                            <i class="fas fa-shopping-bag"></i>
                            <span class="md:text-lg">({{ session()->has('jellybearCart')? session()->get('jellybearCart')->totalQty : '0'}})</span>
                        </a>

                        @if(auth()->check())
                            <a href="{{ route('logout') }}" class="text-sm md:text-base">Log out</a>
                        @endif
                    </div>
                    <!-- end of user and cart -->
                </div>
                <!-- end of nav first row -->
                <!-- nav second row -->
                <div class="w-full h-14 bg-blue-light flex items-center justify-center">
                    <ul class="flex w-full justify-center items-center md:text-lg uppercase text-pink-dark md:tracking-wider">
                        <li class="px-2 sm:px-4 md:px-6 hover:text-yellow-light">
                           <a href="/">home</a>
                        </li>
                        <li class="px-2 sm:px-4 md:px-6 hover:text-yellow-light">
                           <a href="{{route('category.show', ['slug' => 'animals'])}}">animals</a>
                        </li>
                        <li class="px-2 sm:px-4 md:px-6 hover:text-yellow-light">
                           <a href="{{route('category.show', ['slug' => 'books'])}}">books</a>
                        </li>
                        <li class="px-2 sm:px-4 md:px-6 hover:text-yellow-light">
                           <a href="{{route('category.show', ['slug' => 'amuseables'])}}">amuseables</a>
                        </li>
                    </ul>
                </div>
                <!-- end of nav second row -->
            </nav>
        <main class="pt-28">
            @yield('content')
        </main>
        <footer class="py-10 bg-brown-default text-yellow-light md:text-lg text-center tracking-wide">
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
