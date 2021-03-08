@extends('layouts.app')

@section('content')
<!-- cart heading -->
<div class="w-full bg-yellow-light min-h-3/4screen">
    <div class="w-full h-36 md:h-44 py-10 px-10 text-xl text-center bg-yellow-light text-brown-dark border-b-2 border-brown-default rounded">
        <h1 class="text-xl md:text-3xl tracking-widet lg:tracking-widest mb-3">Hi, {{$user->name}}</h1>
        @if($user->orders->count()>0)
            <p class="tracking-wide text-sm md:text-xl">
                You have {{ $user->orders->count()}} orders
            </p>
        @else
            <p class="tracking-wide text-sm md:text-xl">You do not have any orders yet</p>
        @endif
    </div>
<!-- end of cart heading -->
<!-- cart items -->
    @if($user->orders->count()>0)
    <div class="bg-yellow-light px-3 md:px-10 xl:px-32 w-full md:py-10">
        <!-- table displays on big screen -->
        <table class="hidden md:table md:w-full text-left px-10">
            <thead class="border-b-2 border-brown-default py-1">
                <tr>
                    <th>name</th>
                    <th>address</th>
                    <th>city</th>
                    <th>state</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart->items as $item)
                    <tr class="border-b-2 border-brown-default">
                        <!-- item details -->
                        <td>
                        <div class="flex items-center py-2">
                            <img src="{{ asset($item['image']) }}" class="w-32 rounded border-brown-default border-2" alt="">
                            <h1 class="ml-3 text-xl tracking-wide">{{ $item['name'] }}</h1>
                        </div> 
                        </td>
                        <!-- end of item details -->

                        <!-- item quantity -->
                        <td>
                            <div class="flex items-center">
                                <a href="{{ route('cart.minus', $item['id']) }}"><i class="fas fa-minus-circle"></i></a>
                                <h1 class="mx-3">{{ $item['qty'] }}</h1>
                                <a href="{{ route('cart.add', $item['id']) }}"><i class="fas fa-plus-circle"></i></a>
                            </div>
                        </td>
                        <!-- end of item quantity -->

                        <!-- item price -->
                        <td>${{ $item['price'] }}</td>
                        <!-- item subtotal -->
                        <td>${{ $item['price'] * $item['qty'] }}</td>
                        <!-- remove button -->
                        <td class="text-center">
                            <a href="{{ route('cart.remove', $item['id']) }}">
                                <i class="fas fa-times-circle"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-right mt-10 hidden md:block">
            <a href="{{ route('cart.checkout', $cart->totalPrice) }}" class="bg-brown-dark hover:bg-orange-dark text-yellow-light tracking-wide py-2 px-5 rounded w-full ml-auto">Checkout</a>
        </div>
        <!-- end of big table -->

        <!--  table displays on small screen-->
        <div class="md:hidden text-sm">
            @foreach($cart->items as $item)
                <div class="border-b-2 border-brown-default pb-1 px-10">
                        <div class="flex items-center py-2">
                            <img src="{{asset($item['image'])}}" class="w-24 rounded border-brown-default border-2" alt="">
                            <h1 class="ml-3 tracking-wide">{{$item['name']}}</h1>
                        </div>
                        <div class="flex justify-around">
                            <div class="flex items-center">
                                <a href=""><i class="fas fa-plus-circle"></i></a>
                                <h2 class="mx-2">{{$item['qty']}}</h2>
                                <a href=""><i class="fas fa-minus-circle"></i></a>
                            </div>
                            <h2>Item Price: ${{$item['price']}} USD</h2>
                            <h2>Total: ${{$item['qty'] * $item['price']}} USD</h2>
                            <a href="" class="underline">
                                Remove
                            </a>
                        </div>
                </div>
            @endforeach
            <div class="text-center mt-8">
                <a href="{{ route('cart.checkout', $cart->totalPrice) }}" class="bg-brown-dark hover:bg-orange-dark text-yellow-light tracking-wide py-2 px-5 rounded w-full ml-auto">Checkout</a>
            </div>
        </div>
    <!-- end of small table -->
</div>
@endif
</div>
<!-- end of cart items -->
@endsection