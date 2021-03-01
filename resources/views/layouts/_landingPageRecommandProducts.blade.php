<div class="owl-carousel owl-theme px-10 md:px-20">
    @foreach($animals->random(8) as $product)
        @include('layouts._singleProduct', ['product' => $product])
    @endforeach 
</div>