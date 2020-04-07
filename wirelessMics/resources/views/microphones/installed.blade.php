@extends('layouts.main')

@section('title')
    Installed List
@endsection

@section('head')
    <link href='/css/microphones/installed.css' rel='stylesheet'>

@endsection

@section('content')
    <div class="col-12 text-center">
    <h2><em>Installed Wireless Micrrophones</em></h2>
    </div>
     <ul class="cards">
          @if(count($microphones) == 0)
                No microphones with this specific tag added yet...
            @else
                @foreach ($microphones as $microphone)
                        <li class="card_items">
                                <div class="card_content">
                                    <h4 class="card_heading">Shure: {{$microphone[ 'model']}}</h4>
                                    <p class="card-text ">{{ $microphone['building'] }}</p>
                                    <p class="card-text">{{ $microphone['room'] }}</p>
                                    <p class="card-text ">Band: {{ $microphone['band'] }} </h4>
                                    <p class="card-text">{{ $microphone['assigned_frequency'] }} </p>
                                    <hr>
                                    <a href="{{ action ('MicrophonesController@show', $microphone['id']) }}" class="btn fill">See details</a>
                                </div>
                        </li>
                @endforeach
         @endif
      </ul>
@endsection



