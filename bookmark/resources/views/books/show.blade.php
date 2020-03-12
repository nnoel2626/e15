@extends('layout.master')

@section('title')
{{ $title }}
@endsection

@section('head')
{{-- custom css links for individual pages --}}
@endsection

@section('content')
  @if($bookFound)
        <h1>{{ $title }}</h1>

        <p>
            Details about this book will go here...
        </p>
    @else
        <p>
            Book not found
        </p>
    @endif

@endsection


