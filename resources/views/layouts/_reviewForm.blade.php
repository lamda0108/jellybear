<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
  <div class="relative w-auto my-6 mx-auto max-w-3xl">
    <!--content-->
    <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-eightyScreen sm:w-sixtyScreen md:w-fiftyScreen xl:w-fortyScreen bg-white outline-none focus:outline-none">
      <!--header-->
      <div class="flex items-start justify-between p-5 border-b border-solid border-gray-300 rounded-t">
        <h3 class="text-xl md:text-3xl font-semibold text-brown-dark uppercase">
           write your review
        </h3>
        <button class="p-1 ml-auto bg-transparent border-0 text-black float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id')">
          <span class="bg-transparent text-brown-default h-6 w-6 text-2xl block outline-none focus:outline-none">
            ×
          </span>
        </button>
      </div>
      <!--body-->
      <div class="relative p-6 flex-auto text-brown-dark">
            <form class="mb-6" action="{{route('reviews.store')}}" method="post">
                @csrf
                <div class="flex flex-col mb-4 text-sm">
                    <p class="mb-2">Please select your rating:</p>
                    <div class="flex items-center mb-1">
                        <input type="radio" id="fivestar" name="rating" value="5" class="mr-2">
                        <label for="fivestar">
                            {!! str_repeat('<i class="fa fa-star" aria-hidden="true"></i>', 5 )!!}
                        </label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input type="radio" id="fourstar" name="rating" value="4" class="mr-2">
                        <label for="fourstar">
                            {!! str_repeat('<i class="fa fa-star" aria-hidden="true"></i>', 4 )!!}
                            {!! str_repeat('<i class="far fa-star" aria-hidden="true"></i>', 1 )!!}
                        </label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input type="radio" id="threestar" name="rating" value="3" class="mr-2">
                        <label for="threestar">
                            {!! str_repeat('<i class="fa fa-star" aria-hidden="true"></i>', 3 )!!}
                            {!! str_repeat('<i class="far fa-star" aria-hidden="true"></i>', 2 )!!}
                        </label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input type="radio" id="twostar" name="rating" value="2" class="mr-2">                  
                        <label for="twostar">
                            {!! str_repeat('<i class="fa fa-star" aria-hidden="true"></i>', 2 )!!}
                            {!! str_repeat('<i class="far fa-star" aria-hidden="true"></i>', 3 )!!}
                        </label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" id="onestar" name="rating" value="1" class="mr-2">
                         <label for="onestar">
                            {!! str_repeat('<i class="fa fa-star" aria-hidden="true"></i>', 1 )!!}
                            {!! str_repeat('<i class="far fa-star" aria-hidden="true"></i>', 4 )!!}
                        </label>
                    </div>
                    @if($errors->has('rating'))
                        <div class="text-red-600 text-base">
                            <p>{{$errors->first('rating')}}</p>
                        </div>
                     @endif
                </div>
                <div class="flex flex-col mb-2">
                    <label class="mb-2 uppercase font-bold text-grey-darkest" for="username">your name</label>
                    <input class="border py-1 px-3 text-grey-darkest" type="text" name="username" id="username">
                    @if($errors->has('username'))
                        <div class="text-red-600">
                            <p>{{$errors->first('username')}}</p>
                        </div>
                     @endif
                </div>
                <div class="flex flex-col mb-2">
                    <label class="mb-2 uppercase font-bold text-grey-darkest" for="title">title</label>
                    <input class="border py-1 px-3 text-grey-darkest" type="text" name="title" id="title">
                    @if($errors->has('title'))
                        <div class="text-red-600">
                            <p>{{$errors->first('title')}}</p>
                        </div>
                     @endif
                </div>
                <div class="flex flex-col mb-5">
                    <label class="mb-2 uppercase font-bold  text-grey-darkest" for="body">body</label>
                    <textarea class="border py-2 px-3 text-grey-darkest" rows="3" name="body" id="body"></textarea>
                    @if($errors->has('body'))
                        <div class="text-red-600">
                            <p>{{$errors->first('body')}}</p>
                        </div>
                     @endif
                </div>  
                <input type="hidden" name="product_id" value="{{$product_id}}">
                <button class="submit block bg-brown-dark hover:bg-orange-dark text-yellow-light uppercase text-lg mx-auto px-4 py-1 rounded" type="submit">Submit</button>
            </form>
      </div>
    </div>
  </div>
</div>
<div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>

<script type="text/javascript">
  function toggleModal(modalID){
    document.getElementById(modalID).classList.toggle("hidden");
    document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
    document.getElementById(modalID).classList.toggle("flex");
    document.getElementById(modalID + "-backdrop").classList.toggle("flex");
  }
  document.querySelector('.submit').addEvent
</script>
@if (count($errors) > 0)
    <script type="text/javascript">
         document.getElementById("modal-id").classList.remove("hidden");
        document.getElementById("modal-id").classList.add("flex");
        document.getElementById("modal-id-backdrop").classList.remove("hidden");
         document.getElementById("modal-id-backdrop").classList.add("flex");
    </script>
@endif