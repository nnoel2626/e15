@extends('layouts.app2')


@section('head')
{{-- custom css links for individual pages --}}
 <link rel="stylesheet" href="/css/login.css" />

 <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
@endsection


@section('content')

 <div class="container">

    <div class="row justify-content-center">
        {{-- <div class="col-md-4"> --}}
            <div class="login">

            <div class="form-header">
                    <h2 dusk="login-heading" class="active float-left">{{ __('Login') }}</h2>
                    <a  class="nonactive float-right" href="/">Cancel</a>


             </div>


                       <form method="POST" action="{{ route('login') }}">
                         @csrf
                        {{-- <label for="name"><span>{{  __('Name')  }}</span></label> --}}
                        <label for="e-mail"><span>{{  __('E-Mail') }}</span></label>

                        <input dusk="email-input" type="email" class="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @include('includes.error-field', ['fieldName' => 'email'])

                        <label for="password"><span>{{ __('Password') }}</span></label>
                        <input dusk="password-input" type="password" class="text" name="password">
                        @include('includes.error-field', ['fieldName' => 'password'])
                        <br/>
                        <input type="checkbox" id="checkbox-1-1" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                         <label for="checkbox-1-1"><span>{{ __('Remember Me') }}</span></label>


                        <button type="submit" dusk="login-button" class="signin">
                             {{ __('Login') }}
                        </button>
                        <hr>

                       <a href="{{ route('register') }}">{{ __('Register') }}</a>
                       <br/>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </form>

               </div>
            </div>
        {{-- </div> --}}
    </div>
@endsection
