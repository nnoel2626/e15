@extends('layouts.main')

@section('title')
{{-- {{ $microphone[''] }} --}}
@endsection

@section('head')

{{-- <link href='/css/books/show.css' rel='stylesheet'> --}}
@endsection

@section('content')
    <div class="site-title col-12 text-center">
    <h2>Microphone Details</h2>
    </div>

    {{-- @if(!$microphone)
                No microphone with this specific name...
    @else --}}
    <div class="row justify-content-center">
     <div class="col-md-6"
     <div class="card bg-light mb-2">
        <div class="card-header">Make: {{$microphone->make}} </div>

                <div class="card-body">
                     <h4 class="card-text">Model: {{$microphone->model}} </h4>
                    <h4 class="card-text mb-2">Building: {{ $microphone->location->building }}</h4>
                    <h4 class="card-text mb-2">Room: {{ $microphone->location->room }}</h4>
                    <h4 class="card-text  mb-2">Microphone Band: {{ $microphone->band }} </h4>
                    <h4 class="card-text  mb-2">Microphone Range: {{ $microphone->frequency_range }} </h4>
                    <h4 class="card-text mb-2">Serial Numbe: {{ $microphone->serial_number }}</h4>
                    <h4 class="card-text mb-2">Microphone Type: {{ $microphone->mic_type }}</h4>
                    <h4 class="card-text  mb-2">Group: {{ $microphone->group }} </h4>
                    <h4 class="card-text  mb-2">Channel: {{ $microphone->channel }} </h4>
                    <h4 class="card-text">Assigned Frequency: {{ $microphone->assigned_frequency }} </h4>
                </div>
                    <div class="card-text">Comments:{{ $microphone->comments }}</div>
            </div>
        </div>
        </div>
    </div>
 </div>

{{-- @endif --}}
@endsection



