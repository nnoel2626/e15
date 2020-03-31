@extends('layouts.main')

@section('head')
     <link href='/css/microphones/index.css' rel='stylesheet'>
@endsection

@section('content')
        <div>
            <h1>All Microphones</h1>
        </div>
            @if(count($microphones) == 0)
                No microphones have been added yet...
            @else
                @foreach($microphones as $microphone)
                <div class="card bg-light mb-3">
                    <div class="card-header">Shure: {{$microphone->model}} </div>
                    <div class="card-body">
                        <h4 class="card-text mb-2">{{ $microphone->building }}</h4>
                        <h4 class="card-text mb-2">{{ $microphone->room }}</h4>
                        <h4 class="card-text  mb-2">Band: {{ $microphone->band }} </h4>
                        <h3 class="card-text">{{ $microphone->assigned_frequency }} </h3>
                        </div>
                    <div class="card-footer">
                        <small class="text-muted"><a href="{{ action('MicrophonesController@show', $microphone->id) }}" class="btn btn-warning">See details</a></small>
                    </div>
                </div>
                @endforeach
            @endif
@endsection


   {{-- <section class='microphone'> --}}
                            {{-- @foreach($microphones['tags'] as $tag)
                            <span >{{{ $tag->name }}}</span>
                            @endforeach --}}


 {{-- <a href="{{ action('MicrophonesController@edit', $microphone->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ action('MicrophonesController@Destroy', $microphone->id) }}" class="btn btn-danger">Delete</a>
                        <a href="{{ action('MicrophonesController@create') }}" class="btn btn-primary">Add </a> --}}

 {{-- <section class="content-wrapper">
                    <div class="albums">
                    <a href="#">
                        <figure>
                            <img class="photograph" src="assets/img/photos/random-user-imageF17.jpg" alt="photo of Violette Noel">
                            <figcaption class="highlight chartreuse">
                            <h5 class="headings">Violette Noel</h5>
                            <p class="content-text">She is no longer with us. She passed away when she was only 24 years old. You will find some of wonderful pictures in this album</p>
                            </figcaption>
                        </figure>
                    </a>
                </div> --}}
