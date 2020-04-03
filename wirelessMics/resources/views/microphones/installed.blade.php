@extends('layouts.main')

@section('title')
    Installed List
@endsection

@section('head')
    <link href='/css/microphones/cards.css' rel='stylesheet'>

@endsection

@section('content')
    <div class="col-12 text-center">

    <h2><em>Installed Wireless Micrrophones</em></h2>
    </div>

     <div class="cards">
    @foreach ($tags as $tag)
        @foreach ($tag->microphones as $microphone)
                <div class="card_items">
                        <div class="card_content">
                            <h4 class="card_heading">Shure: {{$microphone->model}}</h4>
                            <p class="card-text mb-2">{{ $microphone->building }}</p>
                            <p class="card-text mb-2">{{ $microphone->room }}</p>
                            <p class="card-text  mb-2">Band: {{ $microphone->band }} </h4>
                            <p class="card-text">{{ $microphone->assigned_frequency }} </p>
                            <button><a href="{{ action('MicrophonesController@show', $microphone->id) }}" class="btn btn-warning">See details</a></button>
                        </div>
                </div>
        @endforeach
    @endforeach

</div>
@endsection


 {{-- <div class="content-wrapper">
        @foreach ($tags as $tag) --}}
        {{-- <h2>Tag : {{ $tag->tag_name }}</h2> --}}
                {{-- @foreach ($tag->microphones as $microphone) --}}
                    {{-- $tag->$microphones --}}
                    {{-- <p>Microphone : {{ $microphones }}</p> --}}

                    {{-- <div class="card bg-light mb-3">
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
        @endforeach
</div> --}}
