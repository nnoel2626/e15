@extends('layouts.main')

{{-- @section('title')
    All Books
@endsection --}}

@section('head')
    {{-- <link href='/css/microphones/index.css' rel='stylesheet'> --}}
@endsection

@section('content')
    <h1>All Microphones</h1>

    {{-- @if(count($microphones) == 0)
        No microphones have been added yet...
    @else
        @foreach($microphones as $slug => $microphone)
            <a href='/microphones/{{ $slug }}'> --}}
            {{-- <img class='cover' src='{{ $microphone['cover_url'] }}'></a> --}}
        {{-- @endforeach
    @endif --}}
@endsection


