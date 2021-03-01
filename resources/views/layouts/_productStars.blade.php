<div class="mr-5 text-brown-default">
    @if($product->reviews->count()>0)
        @for ($i = 1; $i <= 5; $i++) 
            @if($product->starRating< $i ) 
                @if(is_float($product->starRating) && (round($product->starRating) == $i))
                    <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                @else
                    <i class="far fa-star" aria-hidden="true"></i>
                @endif
            @else
                <i class="fas fa-star" aria-hidden="true"></i>
            @endif
        @endfor
    @else
    {!! str_repeat('<i class="far fa-star" aria-hidden="true"></i>', 5) !!}
    @endif
    <strong>({{$product->reviews->count()}})</strong>
</div>