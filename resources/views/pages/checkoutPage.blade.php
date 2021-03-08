@extends('layouts.app')

@section('content')
<style>
  .StripeElement {
  box-sizing: border-box;

  height: 40px;
  width:350px;

  padding: 10px 6px;
  margin: 10px auto;

  border: 1px solid transparent;
  border-radius: 4px;
  background-color: white;

  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}

.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}

.StripeElement--invalid {
  border-color: #fa755a;
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;
}
</style>
<div class="w-full min-h-3/4screen bg-yellow-light py-10 px-10 flex flex-col md:flex-row justify-center">
    @if($cart && $cart->totalQty>0)
    <!-- checkout form -->
        <div class="md:w-1/2 text-center py-5 md:pt-10">
            <h1 class="mb-5 text-xl md:text-3xl text-brown-dark">Welcome to Checkout</h1>
            <p class="text-brown-default">( The below shipping address is for testing purpose. )</p>
            <form action="{{ route('cart.charge') }}" method="post" id="payment-form">
                @csrf
                <div class="my-5">
                    <label for="first_name" class="mr-3">Your Name</label>
                    <input type="text" name="name" id="name" class="rounded border-2 border-brown-default outline-none pl-1" value="John Doe">
                </div>
                <div class="my-5">
                    <label for="last_name" class="mr-3">Your Address</label>
                    <input type="text" name="address" id="address" class="rounded border-2 border-brown-default outline-none pl-1" value="1000 Main Rd">
                </div>
                <div class="my-5">
                    <label for="city" class="mr-3">City</label>
                    <input type="text" name="city" id="city" class="rounded border-2 border-brown-default outline-none pl-1" value="Waco">
                </div>
                <div class="my-5">
                    <label for="state" class="mr-3">State</label>
                    <input type="text" name="state" id="state" class="rounded border-2 border-brown-default outline-none pl-1" value="TX">
                </div>
                <div class="my-5">
                    <label for="zipcode" class="mr-3">Zip code</label>
                    <input type="text" name="zipcode" id="zipcode" class="rounded border-2 border-brown-default outline-none pl-1" value="76712">
                </div>
                <div class="my-5">
                    <label for="phone_number" class="mr-3">Phone number</label>
                    <input type="tel" name="phone_number" id="phone_number" class="rounded border-2 border-brown-default outline-none pl-1" value="214789789">
                </div>
                <input type="hidden" name="amount" value="{{$amount}}">
                <!-- stripe payment -->
                <label class="text-brown-dark" for="card-element">
                    Credit or debit card
                </label>
                <p class="my-2 md:mr-5 text-left text-brown-default">(Testing purpose: please enter 4242 4242 4242 4242 as card number, any future date and any number for cvc and zipcode.)</p>
                  <div id="card-element">
                    <!-- A Stripe Element will be inserted here. -->
                  </div>

                  <!-- Used to display form errors. -->
                  <div id="card-errors" role="alert"></div>

                <button class="bg-brown-default hover:bg-orange-dark text-yellow-light py-2 px-4 mt-4 rounded shadow hover:shadow-md focus:outline-none" type="submit">Submit Payment</button>
                <!-- end of stripe payment -->
            </form>
        </div>
        <!-- bag items -->
        <div class="md:w-1/2 py-5 md:py-10 px-10 xl:px-20 md:border-l-2 md:border-brown-default">
            <h1 class="text-center mb-5 text-xl md:text-3xl text-brown-dark">Your Bag</h1>
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
    @else
    <h1>Your shopping bag is empty. Please go back to the shopping page.</h1>
    @endif
 </div>


<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript">
  // Create a Stripe client.
window.onload=function(){
var stripe = Stripe('pk_test_51IQcA5HJVv6o0kKc8XmZVjqGcckFVIgq3zvEQnV6edZJCydNAHkzI0IzdK2P3FjcboagDbUzgcYQrnOlgZD55Vnq00kuyc0ued');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    },
    margin:'10px 10px 10px 20px !important'
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  var options={
    name:document.getElementById('name').value,
    address_line1:document.getElementById('address').value,
    address_city:document.getElementById('city').value,
    address_state:document.getElementById('state').value,
    address_zip:document.getElementById('zipcode').value,
    phone_number:document.getElementById('phone_number').value
  }

  stripe.createToken(card,options).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});

// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
}
}
</script>
@endsection