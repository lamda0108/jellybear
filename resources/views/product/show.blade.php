@extends('layouts.app')

@section('content')

@include('layouts._reviewForm', ['product_id' => $product->id])

<div class="bg-yellow-light w-full h-auto flex flex-col justify-center">
    <!-- product info -->
    <div class="w-full h-auto px-10 md:px-20 py-20 mx-auto flex items-center flex-col md:flex-row md:justify-around">
        <div class="w-3/4 sm:w-1/2 flex justify-center md:mr-20 w-auto h-auto md:w-auto md:h-auto">
             <img src="{{asset($product->image)}}" class="w-full h-full border-brown-default border-2 rounded " alt="">
        </div>
             
        <div class="w-full md:w-3/4 lg:w-1/2 flex flex-col justify-center items-center py-10 md:pr-10 lg:pr-20 lg:items-start">
            <h1 class="text-brown-dark text-3xl md:text-xl lg:text-3xl tracking-widest mb-5 md:mb-2 lg:mb-5">{{$product->name}}</h1>
            <h3 class="text-brown-dark tracking-wide text-2xl md:text-base lg:text-2xl mb-5 md:mb-2 lg:mb-5">${{$product->price}} USD</h3>
            <!-- reviews -->
            <div class="flex flex-col justify-center items-center lg:flex-row">   
                  <!-- review stars -->
                    @include('layouts._productStars', ['product'=>$product])
                  <!-- end of review stars -->

                @if($product->reviews->count()>0)
                    <button class="text-brown-default font-bold uppercase text-sm py-3 rounded underline outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease" onclick="toggleModal('modal-id')">
                        write your review
                    </button>
                @else
                    <button class="text-brown-default font-bold uppercase text-sm underline py-3 rounded hover:outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease" onclick="toggleModal('modal-id')">
                        be first to review this product
                    </button>
                @endif
                    
             </div>
            <!-- end of reviews -->
            <p class="text-brown-default text-xl mb-5 md:text-base lg:text-xl">{{$product->description}}</p>
            <p class="text-brown-default mb-8 text-base md:text-sm lg:text-base">{{$product->details}}</p>
            <div class="flex justify-start text-center">
                 <a href="{{ route('add.cart', $product) }}" class="bg-orange-dark hover:bg-orange-default text-yellow-light font-bold text-lg tracking-wider w-28 py-2 rounded-lg">Buy Me</a>
            </div>
            
        </div>
    </div>
    <!-- end of product info -->

   
    <!--------------- section reviews --------------->
    <section class="pt-12 pb-2 bg-blue-light">
        <!-- review heading -->
        <div class="py-3 text-center">
                <h1 class="text-4xl mb-2 tracking-wider">Reviews</h1>
                <p class="mb-5 tracking-wide">Please leave a review on {{$product->name}}</p>
                @if($product->reviews->count()>0)
                <button class="text-brown-default bg-yellow-light shadow hover:bg-yellow-default hover:shadow-lg font-bold uppercase text-sm py-2 px-4 rounded outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease" onclick="toggleModal('modal-id')">
                        write your review
                </button>
                @else
                <button class="text-brown-default bg-yellow-light shadow hover:bg-yellow-default hover:shadow-lg font-bold uppercase text-sm py-2 px-4 rounded outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all .15s ease" onclick="toggleModal('modal-id')">
                        be first to review this product 
                </button>
                @endif
        </div>         
       <!-- end of review heading -->
       @if($product->reviews->count()>0)
            @include('layouts._productReviews', ['product' => $product])
       @endif
    </section>
    <!-------------- end of section reviews------------>

    <!----------------- section recommand ------------------>
    <section class="py-12 bg-yellow-light">
        <!-- recommand heading -->
        <div class="py-8 text-center">
            <h1 class="text-4xl mb-2 tracking-wider">We Recommand</h1>
        </div>
        <!-- end of recommand heading -->

        <!-- recommand products -->
        @include('layouts._recommandProducts', ['product' => $product])
        <!-- end of recommand products -->
    </section>
    <!----------------- end of section recommand ----------------->

@endsection