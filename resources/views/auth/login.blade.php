@extends('layouts.app')

@section('content')
<div class="w-full bg-yellow-light min-h-3/4screen flex flex-col items-center py-10">
    <h1 class="text-brown-default text-2xl md:text-3xl mb-5">Login</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
    
            <div class="flex flex-col items-center justify-center mb-2">
                <label for="email" class="text-brown-dark text-lg mb-2 mr-5 uppercase font-bold text-grey-darkest">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="rounded border-2 border-brown-default outline-none py-1 px-3 text-grey-darkest" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <div class="text-red-600">
                        <p>{{$message}}</p>
                    </div>
                    @enderror
            </div>

            <div class="flex flex-col items-center justify-center mb-2">
                <label for="password" class="text-brown-dark text-lg mb-2 mr-5 uppercase font-bold text-grey-darkest">{{ __('Password') }}</label>
                <input id="password" type="password" class="rounded border-2 border-brown-default outline-none py-1 px-3 text-grey-darkest @error('password') border-red-600 @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <div class="text-red-600">
                    <p>{{$message}}</p>
                </div>
                @enderror
            </div>
                      

            <div class="flex items-center justify-center mb-2">
                 <label class="text-brown-dark text-lg mb-2 mr-1 uppercase font-bold text-grey-darkest" for="remember">
                    {{ __('Remember Me') }}
                </label>
                              
                <input class="mb-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

             </div>

             <div class="text-center">
                <button type="submit" class="bg-brown-default hover:bg-orange-default text-yellow-light py-1 px-5 text-lg rounded shadow mt-1">
                    {{ __('Login') }}
                </button>
            </div>

            <div class="mt-5">
                <a class="text-brown-dark underline tracking-wide" href="{{ route('register') }}">
                    Do not have an account? Register here
                </a>
            </div>
                         
        </form>

</div>
@endsection
