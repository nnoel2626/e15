@extends('layouts.main')

@section('head')
     <link href='/css/microphones/cards.css' rel='stylesheet'>
@endsection

@section('content')
        <div class="col-12 text-center">
            <h2><em>All Microphones</em></h2>
        </div>
 <div class="cards">
            @if(count($microphones) == 0)
                No microphones have been added yet...
            @else
                @foreach($microphones as $microphone)
                <div class="card_items">
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
                </div>
                @endforeach
            @endif

 </div>
@endsection


