@extends('layouts.app2')


@section('head')
{{-- custom css links for individual pages --}}
 {{-- <link href='/css/login.css' rel='stylesheet'> --}}
 <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">
  {{-- {!!HTML::style('/css/login.css')!!} --}}
 <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
@endsection

@section('content')

  <div class="container">

     <div class="row justify-content-center">
        <div class="row">

             <div class="login">

                <div class="form-header">
                 <h2 dusk="register-heading" class="active"> {{ __('Register') }} </h2>
                 <a  class="nonactive float-right" href="/">Cancel</a>
                </div>

                <form method="POST" action="{{ route('register') }}">
                     @csrf

                    <label for="name"><span>{{  __('Name')  }}</span></label>

                    <input dusk="name-input" type="name" class="text" name="name"
                    value="{{ old('name') }}" required autocomplete="name">
                    @include('includes.error-field', ['fieldName' => 'name'])

                    <label for="email"><span>{{ __('E-Mail Address') }}</span></label>
                    <input dusk="email-input" type="email" class="text" name="email"
                    value="{{ old('email') }}" required autocomplete="email">
                    @include('includes.error-field', ['fieldName' => 'email'])

                    <label for="password"><span>{{ __('Password') }} (min: 8)</span></label>
                    <input dusk="password-input" id='password'type="password" class="text" name="password" required>
                    @include('includes.error-field', ['fieldName' => 'password'])

                    <label for="password-confirm"><span>{{ __('Confirm Password') }} (min: 8)</span></label>
                    <input dusk="password-confirm-input" id='password-confirm'
                    type="password" class="text" name="password_confirmation" required>
                    @include('includes.error-field', ['fieldName' => 'password-confirm'])

                    <button dusk="register-button" type="submit" class="signin">
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
