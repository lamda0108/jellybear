@extends('layouts.app')

@section('content')

@include('layouts._message')

<div class="w-full h-auto pb-24 bg-yellow-light flex flex-col justify-center">

    @if($products)
    <!-- search results -->
    <div class="w-full h-44  py-10 text-xl text-center text-brown-dark border-b-2 border-brown-default rounded">
        <p class="text-xl tracking-wide mb-3">Displaying results for</p>
        <p class="mb-2 text-3xl tracking-wide">{{request()->input('search')}}</p>
        <p class="text-base">{{$products->count()}} items</p>
    </div>

    <div class="w-full h-auto py-16 px-5 md:px-10 lg:px-20 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 md:gap-10">
        @foreach($products as $product)
                @include('layouts._singleProduct', ['product' => $product])
        @endforeach
    </div>
    <!-- end of search results -->
    @else
        <div class="w-full h-44  py-10 text-xl text-center text-brown-dark border-b-2 border-brown-default rounded">
            <p class="text-xl tracking-wide mb-3">Displaying results for</p>
            <p class="mb-2 text-3xl tracking-wide">{{request()->input('search')}}</p>
            <p class="text-base">0 item</p>
        </div>
        <div class="h-72 xl:h-80 flex items-center justify-center">
            <p class="px-10 md:px-5 text-brown-default tracking-wide text-xl">Unfortunately your search did not find any products.
                Please try again...</p>
        </div>
    @endif  

</div>

@endsection