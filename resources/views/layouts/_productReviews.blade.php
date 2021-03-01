<div class="py-10 px-10">
    @foreach($product->reviews->reverse() as $review)
        <div class="pt-2 pb-5 border-t-2">
            <div class="flex flex-col md:flex-row">
                  <!-- review stars -->
                    <div class="mr-5">
                        {!! str_repeat('<i class="fas fa-star" aria-hidden="true"></i>', $review->rating) !!}
                        {!! str_repeat('<i class="far fa-star" aria-hidden="true"></i>', 5-$review->rating) !!}
                    </div> 
                  <!-- end of review stars -->
                  <!-- review title -->
                    <h1 class="uppercase my-2 md:my-0">{{$review->title}}</h1> 
                  <!-- end of review title -->
                  <!-- review date -->
                  <p class="italic text-sm md:ml-auto tracking-lg">By {{$review->username}}, &nbsp;&nbsp;{{$review->reviewDate}}</p>
                  <!-- end of review date -->
            </div>
            <!-- review body -->
            <p class="mt-3">{{$review->body}}</p>
            <!-- end of review body -->
        </div>
    @endforeach
</div>