@extends('layouts.app')


@section('head')
{{-- custom css links for individual pages --}}
 <link href='/css/login.css' rel='stylesheet'>
 <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
@endsection

@section('content')

  <div class="container">
    <br/>
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="login">
                <h2 class="active"> {{ __('Register') }} </h2>
                 <form method="POST" action="{{ route('register') }}">
                     @csrf
                        <label for="name"> <span>{{  __('Name')  }}</span></label>
                        <input type="name" class="text" name="name" value="{{ old('name') }}" required autocomplete="name">
                        @include('includes.error-field', ['fieldName' => 'name'])

                        <label for="email"> <span>{{ __('E-Mail Address') }}</span></label>
                        <input type="email" class="text" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @include('includes.error-field', ['fieldName' => 'email'])

                        <label for="password"> <span>{{ __('Password') }} (min: 8)</span></label>
                        <input id='password'type="password" class="text" name="password" required>
                        @include('includes.error-field', ['fieldName' => 'password'])

                        <label for="password-confirm"><span>{{ __('Confirm Password') }} (min: 8)</span></label>
                        <input id='password-confirm' type="password" class="text" name="password_confirmation" required>
                        @include('includes.error-field', ['fieldName' => 'password-confirm'])

                        <button type="submit" class="signin">
                        {{ __('Register') }}
                        </button>

                        <hr>
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        <br/>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </form>
             </div>
            </div>
        </div>
    </div>

@endsection
