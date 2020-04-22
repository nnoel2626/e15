@extends('layouts.main')

@section('title')
    Portable List
@endsection

@section('head')
    <link href='/css/microphones/cards.css' rel='stylesheet'>
@endsection

@section('content')

<div class="site-title col-12 text-center">
 <h1>Portable Microphones</h1>
</div>
      <ul class="cards">
           @if(count($microphones) == 0)
                No microphones with this specific tag added yet...
            @else
                @foreach ($microphones as $microphone)
                        <li class="card_items">
                                <div class="card_content">
                                    <h4 class="card_heading">Shure: {{$microphone[ 'model']}}</h4>
                                    <p class="card-text ">{{ $microphone->location->building }}</p>
                                    <p class="card-text">{{ $microphone->location->room }}</p>
                                    <p class="card-text ">Band: {{ $microphone['band'] }} </h4>
                                    <p class="card-text">{{ $microphone['assigned_frequency'] }} </p>
                                    <hr>
                                    <a href="{{ action('MicrophonesController@show', $microphone['id']) }}" class="btn btn-warning">See details</a>
                                </div>
                        </li>
                @endforeach
         @endif
      </ul>
@endsection


