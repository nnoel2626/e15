@extends('layouts.app')

@section('head')
{{-- custom css links for individual pages --}}
 <link href='/css/login.css' rel='stylesheet'>
 <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
@endsection

@section('content')
<div class="container">
    <br/><br/><br/>
    <div class="row justify-content-center">
        <div class="col-md-8">
                        @if (session('status'))
                         <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                         </div>
                        @endif
                        <div class="login">
                        <h2 class="active"> {{ __('Reset Password') }}</h2>
                       <form method="POST" action="{{ route('password.email') }}">
                         @csrf
                        <label for="email"><span>{{ __('E-Mail Address') }}</span></label>
                        <input type="email" class="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @include('includes.error-field', ['fieldName' => 'email'])

                        <button type="submit" class="signin">
                                    {{ __('Send Password Reset Link') }}
                        </button>
                        <hr>


                         <a class="btn btn-link" href="{{ route('login') }}">
                        {{ __('Return To Login Page') }}
                        </a>
                    </form>
             </div>
            </div>
        </div>
    </div>


@endsection
