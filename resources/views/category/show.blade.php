@extends('layouts.app')

@section('content')

<div class="w-full h-auto pb-24 bg-yellow-light flex flex-col justify-center">
    <!-- results -->
    @include('layouts._results', [
            'title' => $category->name,
            'description'=>$category->description,
            'count'=>$category->products->count()
            ])
   <!-- end of results -->

   <!-- animals -->
   <div class="w-full h-auto pt-10 md:pt-16 pb-4 md:pb-8 px-5 md:px-10 lg:px-20 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 md:gap-10 xl:gap-16">
       @foreach($category->products as $product)
            @include('layouts._singleProduct', ['product' => $product])
       @endforeach
   </div>
   <!-- end of animals -->
   

</div>

@endsection