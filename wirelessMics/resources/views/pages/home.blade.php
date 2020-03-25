@extends('layouts.main')

@section('head')
    <link href='/css/microphones/home.css' rel='stylesheet'>
@endsection

@section('content')

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
             </div>
        @endif
            <div>
            Welcome to microphones&mdash; an online microphones that let’s you track and share a history of microphoness.
            </div>
                 <form method='GET' action='/search'>

                    <h2>Search for a microphones to add to your list</h2>

                        <fieldset>
                            <label for='searchTerms'>
                                Search terms:
                            <input type='text' name='searchTerms' value='{{ old('searchTerms', $searchTerms) }}'>
                            </label>
                         </fieldset>

                        <fieldset>
                        <label>
                        Search type:
                        </label>

                        <input
                        type='radio'
                        name='searchType'
                        id='building'
                        value='building'
                        {{ (old('searchType') == 'building' or $searchType == 'building') ? 'checked' : '' }}
                        >
                        <label for='building'> Building</label>

                         <input
                        type='radio'
                        name='searchType'
                        id='room'
                        value='room'
                        {{ (old('searchType') == 'room' or $searchType == 'room') ? 'checked' : '' }}
                        >
                        <label for='title'>Room</label>

                       <input
                       type='radio'
                       name='searchType'
                       id='frequency_band'
                       value='frequency_band'
                        {{ (old('searchType') == 'frequency_band' or $searchType == 'frequency_band') ? 'checked' : '' }}
                        >
                        <label for='frequency_band'>Frequency Band</label>

                       </fieldset>
                       <input type='submit' class='btn btn-primary' value='Search'>
                        @if(count($errors) > 0)
                            <ul class='alert alert-danger error'>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                         @endif
                     </form>


                    @if(!is_null($searchResults))
                        @if(count($searchResults) == 0)
                            <div class='results alert alert-warning'>
                                No results found.
                                <a href='/microphoness/create'>Want to add this microphones to our library?</a>
                            </div>
                        @else
                            <div class='results alert alert-primary'>

                            {{ count($searchResults) }}
                            {{ Str::plural('Result', count($searchResults)) }}:

                                <ul>
                                    @foreach($searchResults as $slug => $microphones)
                                    <li><a href='/microphones/{{ $slug }}'> {{ $microphones['building'] }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    @endif
@endsection

