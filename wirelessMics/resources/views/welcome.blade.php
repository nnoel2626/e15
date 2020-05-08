@extends('layouts.app')


@section('title')
     MTS Microphones Inventory
@endsection

@section('head')
{{-- custom css links for individual pages --}}
 <link href='/css/welcome.css' rel='stylesheet'>
 <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	{{-- <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'> --}}
@endsection


@section('content')

       <div class="container">
			<div class="content">
                <a class="navbar-brand"   href="/">
              <img src='/images/fasshield_4_0.jpg' id='logo' alt='bookmark Logo'>
                    </a>
				<div class="title">Wireless Microphones Inventory</div>
				<div class="subTitle">Media And Technology Services</div>
				 <div class="line-separator"></div>
				<div class="link">
                {{-- <li><a href="{{ url('/register') }}"><span>SignUp</span></a> |
                <a href="{{ url('/login') }}"><span>LogIn</span></a></li> --}}
                <li dusk="register-link" ><a  href="{{ route('register') }}"><span>SignUp</span></a> |
				<a  dusk="logIn-link" href="{{ route ('login') }}"><span>LogIn</span></a></li>
				</div>
			</div>
		</div>

@endsection
