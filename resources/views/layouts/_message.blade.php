<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="message-id">
  <div class="relative w-auto my-6 mx-auto max-w-3xl">
    <!--content-->
    <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-eightyScreen sm:w-sixtyScreen md:w-fiftyScreen xl:w-fortyScreen  bg-white outline-none focus:outline-none">
      <!--header-->
      <div class="flex items-start justify-between p-5 border-b border-solid border-gray-300 rounded-t">
        <h3 class="text-xl md:text-xl font-semibold text-brown-dark uppercase">
            Jellybear says:
        </h3>
        <button class="p-1 ml-auto bg-transparent border-0 text-black float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('message-id')">
          <span class="bg-transparent text-brown-default h-6 w-6 text-2xl block outline-none focus:outline-none">
            ×
          </span>
        </button>
      </div>
      <!--body-->
      <div class="relative p-6 flex-auto text-brown-dark">
      @if(session()->has("success"))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{session('success')}}
                @if(session()->has('added'))
                    <div class="mt-3 flex justify-end items-center text-xs md:text-base">
                        <button type="button" class="h-8 w-32 md:w-40 mr-2 md:mr-5 bg-brown-default text-yellow-light rounded shadow" onclick="toggleModal('message-id')">Continue Shopping</button>
                        <a href="{{ route('cart.show') }}" class="px-4 py-2 bg-blue-light text-brown-dark rounded shadow">Go to Cart</a>
                    </div>
                @endif
            </div>
        @endif
      </div>
    </div>
  </div>
</div>
<div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="message-id-backdrop"></div>

@if (session()->has('success'))
    <script type="text/javascript">
         document.getElementById("message-id").classList.remove("hidden");
        document.getElementById("message-id").classList.add("flex");
        document.getElementById("message-id-backdrop").classList.remove("hidden");
         document.getElementById("message-id-backdrop").classList.add("flex");
    </script>
@endif