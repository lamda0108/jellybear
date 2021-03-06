@extends('layouts.app')

@section('content')

@include('layouts._message')

<!-- superslides -->
<section id="section-1" class="h-fortyScreen sm:h-fiftyScreen lg:h-sixtyScreen xl:h-mainHeight bg-yellow-default py-8 xl:py-20">
    <div id="slider-container" class="mx-auto h-full w-4/5 md:w-3/4">
        <div id="slides">
        <div class="slides-container">
            <img src="{{ asset('images/slider/slider-1.jpg') }}" class="preserve h-full w-full lg:w-3/4 " alt="">
            <img src="{{ asset('images/slider/slider-2.jpg') }}" class="preserve h-full w-full lg:w-3/4 " alt="">
            <img src="{{ asset('images/slider/slider-3.jpg') }}" class="preserve h-full w-full lg:w-3/4" alt="">
        </div>
        </div>
    </div>
</section>

<section id="section-2" class="h-auto bg-pink-lighter pt-8 md:pt-12 xl:pt-24 pb-12 md:pb-24 flex flex-col justiy-center items-center">
    <h1 class="text-2xl md:text-4xl xl:text-5xl text-yellow-default mb-2 md:mb-8 lg:mb-16 tracking-widest font-bold capitalize">featured items</h1>
    <div class="grid lg:grid-cols-3 gap-24 mt-5">
        <div class="h-84 w-64 md:h-96 md:w-72 bg-yellow-default flex flex-col justify-center items-center shadow-whiteShadow relative">
            <h2 class="text-lg mt-3 md:mt-0 md:text-xl text-pink-dark uppercase tracking-wide mb-3">Books</h2>
            <img class="h-40 w-40 md:w-52 md:h-44"src="{{ asset('images/features/feature-1.jpg') }}" alt="">
            <div class="absolute -left-5 py-5 w-5 flex flex-col items-center bg-white rounded">
                <span>B</span><span>O</span>O<span>K</span>
                <span>S
            </div>
            <p class="mt-5 px-2 text-center">Sweet stories and reading buddies for little ones!</p>
            <a href="{{route('category.show', ['slug' => 'books'])}}" class="h-8 w-32 bg-orange-default hover:bg-pink-light text-yellow-default uppercase mt-3 mb-4 px-2 py-1 text-center rounded shadow">shop now</a>
        </div>
        <div class="h-84 w-64 md:h-96 md:w-72  bg-blue-light flex flex-col justify-center items-center shadow-whiteShadow relative">
            <h2 class="text-lg mt-3 md:mt-0 md:text-xl text-pink-dark uppercase tracking-wide mb-3">Animals</h2>
            <img class="h-40 w-40 md:w-52 md:h-44"src="{{ asset('images/features/feature-2.jpg') }}" alt="">
            <div class="absolute -left-5 py-5 w-5 flex flex-col items-center bg-white rounded">
                <span>A</span><span>N</span>I<span>M</span>
                <span>A</span><span>L</span>S<span>
            </div>
            <p class="mt-5 px-2 text-center">Sweet stories and reading buddies for little ones!</p>
            <a href="{{route('category.show', ['slug' => 'animals'])}}" class="h-8 w-32 bg-orange-default hover:bg-pink-light text-yellow-default uppercase mt-3 mb-4  px-2 py-1 text-center rounded shadow">shop now</a>
        </div>
        <div class="h-84 w-64 md:h-96 md:w-72 bg-yellow-default flex flex-col justify-center items-center shadow-whiteShadow relative">
            <h2 class="mt-3 md:mt-0 text-lg md:text-xl text-pink-dark uppercase tracking-wide mb-3">Amuseables</h2>
            <img class="h-40 w-40 md:w-52 md:h-44"src="{{ asset('images/features/feature-3.jpg') }}" alt="">
            <div class="absolute -left-5 py-5 w-5 flex flex-col items-center bg-white rounded uppercase">
                <span>A</span><span>m</span>u<span>s</span>
                <span>e</span><span>a</span>b<span></span>l<span>
                </span>e<span></span>s<span>
           </div>
            <p class="mt-5 px-2 text-center">Sweet stories and reading buddies for little ones!</p>
            <a href="{{route('category.show', ['slug' => 'amuseables'])}}" class="h-8 w-32 bg-orange-default hover:bg-pink-light text-yellow-default uppercase mt-3 mb-4  px-2 py-1 text-center rounded shadow">shop now</a>
        </div>
    </div>
</section>

<!-- section-3 -->
<section id="section-3" class="h-auto bg-blue-light py-10 lg:py-20 flex flex-col justify-center">
<h1 class="text-2xl md:text-4xl lg:text-5xl text-center text-yellow-default mb-5 md:mb-10 tracking-widest font-bold capitalize">About us</h1>
<p class="md:text-xl px-10 tracking-wide text-pink-dark">
The full range of Jellycat soft toy silliness! Explore all the quirky cuteness from the creators of the softest toys you have ever hugged, cuddled and adored.🐻
</p>
<p class="md:text-xl px-10 tracking-wide text-pink-dark">
Established in London in 1999 and launching many new soft toy designs every January and July, there is always something original and quirky yet incredibly soft and sumptuous to find at a Jellycat jamboree! 🐰
</p>
<p class="md:text-xl px-10 tracking-wide text-pink-dark">
Irresistibly cuddly, sophisticatedly silly, hilariously humorous, a perfect gift for all ages!🐨
</p>
</section>
<!-- end of section 3 -->


<!-- section-4 -->
<section class="py-8 lg:py-12 bg-yellow-light">
        <!-- recommand heading -->
        <div class="py-8 text-center">
            <h1 class="text-2xl text-brown-default md:text-4xl  mb-2 tracking-wider">Some of Our Friends</h1>
        </div>
        <!-- end of recommand heading -->
        @include('layouts._landingPageRecommandProducts', ['animals' => $animals])
</section>
<!-- end of section-4 -->
@endsection