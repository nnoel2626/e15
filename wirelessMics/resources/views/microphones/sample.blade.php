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

 {{-- <div class="card bg-light mb-3" style="max-width: 20rem;">
                        {{-- <li><a href='/microphones/{{ $slug }}'> {{ $microphones['building'] }}</a></li> --}}

                    {{-- <div class="card_items">
                    <div class="card_content">
                    <div class="card-header">Shure:{{ $microphones [ 'model' ]}} </div>
                    <div class="card-body">
                    <h4 class="card-text  mb-2">Band: {{ $microphones ['band']}} </h4>
                    <h3 class="card-text">{{ $microphones ['assigned_frequency'] }} </h3>
                    </div>
                     </div>
                      </div> --}}


{{-- @foreach ($tags as $tag)
     <h2>Tag : {{ $tag->tag_name }}</h2>
            @foreach ($tag->microphones as $microphone)
             <div class="card bg-light border-white">
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
        @endforeach --}}
{{--  --}}
{{-- <div class="cards">
@foreach ($tags as $tag)
     {{-- <h2>Tag : {{ $tag->tag_name }}</h2> --}}
            {{-- @foreach ($tag->microphones as $microphone)
             <div class="card_items">
                 <div class="card_content">
                    <h4 class="card-header">Shure: {{$microphone->model}} </h4>
                        <p class="card-text mb-2">{{ $microphone->building }}</p>
                        <p class="card-text mb-2">{{ $microphone->room }}</p>
                        <p class="card-text  mb-2">Band: {{ $microphone->band }} </h4>
                        <p class="card-text">{{ $microphone->assigned_frequency }} </p>
                    <button> <small class="text-muted"><a href="{{ action('MicrophonesController@show', $microphone->id) }}" class="btn btn-warning">See details</a></small></button>
                </div>
             </div>
            @endforeach
        @endforeach
</div> --}}

  {{-- <ul>
                        @foreach($searchResults as $slug => $microphones)
                       <li class="card_items bg-light mb-3" style="max-width: 20rem;">
                           <div class="card_content">
                               <h3 class="card_heading">{{ $microphones ['assigned_frequency'] }} </h3>
                               <p class="card-text">Shure: {{$microphones['model'] }}</p>
                                <p class="card-text">Band: {{ $microphones ['band']}} </p>
                             </div>
                        </li>
                        @endforeach
                    </ul> --}}
