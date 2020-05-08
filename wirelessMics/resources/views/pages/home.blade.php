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

            </div>
                <form method='GET' action='/search'>

                    <div class="site-title col-12 text-center">
                    <h1>Search for Microphone(s)</h1>
                    </div>

                     <h4>Note: If you are searching by building, enter building name and select the corresponding radio button. </h4>

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
                       id='band'
                       value='band'
                        {{ (old('searchType') == 'band' or $searchType == 'band') ? 'checked' : '' }}
                        >
                        <label for='frequency_band'>Frequency Band</label>

                       </fieldset>
                       <input type='submit' class='btn search' value='Search'>
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
                {{-- <a href='/microphoness/create'>Want to add this microphones to our library?</a> --}}
            </div>
                @else
            <div class='results alert-background'>
                 {{ count($searchResults) }}
                    {{ Str::plural('Result', count($searchResults)) }}:
                    <br>

                    <ul>
                        @foreach($searchResults as $slug => $microphones)
                       <li class="card_items bg-light mb-3" style="max-width: 20rem;">
                           <div class="card_content">
                               <p class="card-text ">{{ $microphones->location->building }}</p>
                               <p class="card-text">{{ $microphones->location->room }}</p>
                               <p class="card_heading">{{ $microphones ['assigned_frequency'] }} </p>
                               <p class="card-text">Shure: {{$microphones['model'] }}</p>
                                <p class="card-text">Band: {{ $microphones ['band']}} </p>
                             </div>
                        </li>
                        @endforeach
                    </ul>
             </div>
            @endif
        @endif
@endsection

