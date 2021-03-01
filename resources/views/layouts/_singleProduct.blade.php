<a href="{{route('product.show', ['slug' => $product->slug])}}" class="w-auto h-auto md:w-auto md:h-auto bg-white">
    <div class="h-full w-auto border-brown-light hover:border-brown-default border-2 flex flex-col items-center justify-center rounded text-center bg-white">
        <img src="{{asset($product->image)}}" class="w-4/5 h-3/5" alt="">
        <h2 class="text-brown-dark tracking-wide px-2">{{$product->name}}</h2>
        <p class="text-brown-default tracking-wider">${{$product->price}}</p>
        @include('layouts._productStars', ['product'=>$product])
     </div>
 </a>