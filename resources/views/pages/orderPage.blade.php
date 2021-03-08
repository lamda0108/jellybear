@extends('layouts.app')

@section('content')

<div class="w-full min-h-3/4screen bg-yellow-light py-10 px-10 flex flex-col md:flex-row justify-center">
    <!-- order info -->
        <div class="md:w-1/2 text-center py-5 md:pt-10">
            <h1 class="mb-5 text-xl md:text-3xl text-brown-dark">We received your order</h1>
            <p class="text-brown-default text-lg"> Ship to: {{ $name }}</p>
            <p class="text-brown-default text-lg">Address: {{ $address}} &nbsp;{{ $city }},{{ $state }} &nbsp; {{ $zipcode }}</p>
            <p class="text-brown-default text-lg"> Phone number: {{ $phone }}</p>
        </div>
        <!-- order items -->
        <div class="md:w-1/2 py-5 md:py-10 md:px-20 md:border-l-2 md:border-brown-default">
            <h1 class="text-center mb-5 text-xl md:text-3xl text-brown-dark">Your Order Items</h1>
            @foreach($cart->items as $item)
            <div class="flex justify-start items-center border-b-2 border-brown-default py-5">
                <div class="w-24 relative mr-5">
                    <img src="{{asset($item['image'])}}" class="w-full border-brown-default border-2 rounded" alt="">
                    <span class="absolute -top-2 -right-2 rounded-full px-3 py-1 bg-blue-light text-brown-dark">{{$item['qty']}}</span>
                </div>
                <div>
                    <h1>{{$item['name']}}</h1>
                    <p> ${{$item['price'] * $item['qty']}} USD</p>
                </div>
            </div>
            @endforeach
        </div>
 </div>
 @endsection