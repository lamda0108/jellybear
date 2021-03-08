@extends('layouts.app')

@section('content')
<div class="w-full bg-yellow-light min-h-3/4screen flex flex-col items-center py-10">
    <h1 class="text-brown-default text-2xl md:text-3xl mb-5">Register</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
    
            <div class="flex flex-col items-center justify-center mb-2">
                <label for="name" class="text-brown-dark text-lg mb-2 mr-5 uppercase font-bold text-grey-darkest">{{ __('Name') }}</label>
                <input id="name" type="text" class="rounded border-2 border-brown-default outline-none py-1 px-3 text-grey-darkest  @error('name') border-red-600 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <div class="text-red-600">
                        <p>{{$message}}</p>
                    </div>
                    @enderror
            </div>

            <div class="flex flex-col items-center justify-center mb-2">
                <label for="email" class="text-brown-dark text-lg mb-2 mr-5 uppercase font-bold text-grey-darkest">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="rounded border-2 border-brown-default outline-none py-1 px-3 text-grey-darkest @error('name') border-red-600 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <div class="text-red-600">
                        <p>{{$message}}</p>
                    </div>
                    @enderror
            </div>

            <div class="flex flex-col items-center justify-center mb-2">
                <label for="password" class="text-brown-dark text-lg mb-2 mr-5 uppercase font-bold text-grey-darkest">{{ __('Password') }}</label>
                    <input id="password" type="password" class="rounded border-2 border-brown-default outline-none py-1 px-3 text-grey-darkest @error('password') border-red-600 @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                    <div class="text-red-600">
                        <p>{{$message}}</p>
                    </div>
                    @enderror
            </div>


            <div class="flex flex-col items-center justify-center mb-2">
                <label for="password-confirm" class="text-brown-dark text-lg mb-2 mr-5 uppercase font-bold text-grey-darkest">{{ __('Confirm Password') }}</label>
               <input id="password-confirm" type="password" class="rounded border-2 border-brown-default outline-none py-1 px-3 text-grey-darkest" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="text-center">
                <button type="submit" class="bg-brown-default hover:bg-orange-default text-yellow-light py-1 px-5 text-lg rounded shadow mt-3">
                    {{ __('Register') }}
                </button>
            </div>
            <div class="mt-5">
                <a href="{{ route('login') }}" class="text-brown-dark underline tracking-wide">Already have an account? Log in here</a>
            </div>
        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
