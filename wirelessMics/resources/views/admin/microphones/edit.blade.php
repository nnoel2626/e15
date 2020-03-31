@extends('layouts.app')

@section('title')
{{-- {{ $title }} --}}
@endsection

@section('head')
{{-- custom css links for individual pages --}}
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
         <div class="container">
    <div class="col-12">
        <div class="card textcenter mt-3">
            <div class="card-header bg-header text-black">
                <span class="glyphicon glyphicon-plus"></span>Edit a  Microphone
            </div>
            <div class="card-body">
                <form action = "{{ route ('admin.mics.update', $microphone ) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="name">Microphone Slug</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="slug" placeholder="Microphone URI Slug"
                            name="slug" value="{{ $microphone->slug }}" required autocomplete="slug" autofocus/>

                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="building">Building</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="building" id="building" placeholder="building"  name="building" value="{{ $microphone->building }}" required autocomplete="building" autofocus/>
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="room">Room</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="room" placeholder="room"
                             name="room" value="{{ $microphone->room }}" required autocomplete="room" autofocus/>
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="make">Make</label>
                        <div class="col-md-8">
                            <input type="make" class="form-control" name="make" id="make" placeholder="make"
                             value="{{ $microphone->make }}" required autocomplete="make" autofocus/>
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="model">Model</label>
                        <div class="col-md-8">
                            <input type="model" class="form-control" name="model" id="model" placeholder=" model"
                         value="{{ $microphone->model }}" required autocomplete="model" autofocus/>
                        </div>
                    </div>

                     <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="frequency band">Frequency Band</label>
                        <div class="col-md-8">
                            <input type="band" class="form-control" name="band" id="band" placeholder="frequency band"
                         value="{{ $microphone->band }}" required autocomplete="band" autofocus/>
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="frequency_range">Frequency Range</label>
                        <div class="col-md-8">
                            <input type="frequency_range" class="form-control" name="frequency_range" id="frequency_range" placeholder="frequency range"
                             value="{{ $microphone->frequency_range }}" required autocomplete="frequency_range" autofocus/>
                        </div>
                    </div>

                     <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="make">Serial Number</label>
                        <div class="col-md-8">
                            <input type="serial_number" class="form-control" name="serial_number" id="serial_number" placeholder="serial number"
                         value="{{ $microphone->serial_number }}" required autocomplete="serial_number" autofocus/>
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="micType">Microphone type</label>
                        <div class="col-md-8">
                            <input type="mic_type" class="form-control" name="mic_type" id="mic_type" placeholder="microphone type"
                         value="{{ $microphone->mic_type }}" required autocomplete="mic_type" autofocus/>
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="group">Group</label>
                        <div class="col-md-8">
                            <input type="group" class="form-control" name="group" id="group" placeholder="group"
                         value="{{ $microphone->group }}" required autocomplete="group" autofocus/>
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="channel">Channel</label>
                        <div class="col-md-8">
                            <input type="channel" class="form-control" name="channel" id="channel" placeholder="channel"
                         value="{{ $microphone->channel }}" required autocomplete="channel" autofocus/>
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 col-form-label text-md-right" for="assigned_frequency">Assigned Frequency</label>
                        <div class="col-md-8">
                            <input type="assigned_frequency" class="form-control" name="assigned_frequency" id="assigned_frequency" placeholder="assigned frequency"
                            value="{{ $microphone->assigned_frequency }}" required autocomplete="assigned_frequency" autofocus/>
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label class="col-md-2 text-md-right" for="comments">microphone comments</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="4" cols="50" name="comments" id="comments" placeholder="comments" value="{{ $microphone->comments }}" autocomplete="comments" autofocus>
                            </textarea>
                        </div>
                    </div>
                    <br>
                     <div class="form-group row">
                    <label for="tags" class="col-md-2 col-form-label text-md-right">Tags</label>
                        <div class="col-md-6">
                            @foreach( $tags as $tag)
                                <div class ="form-check">
                                    <input type ="checkbox" name="tags[]" value ="{{ $tag->id }}"
                                    @if($microphone->tags->pluck('id')->contains($tag->id)) checked @endif>
                                    <label>{{ $tag->tag_name }}</label>
                                </div>
                            @endforeach
                        </div>
                      </div>


                    <div class="form-group form-row mb-0">
                        <div class="offset-md-2 col-md-10">
                            <button type="submit" class="btn btn-success d-block ml-auto">
                                Edit microphone
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
    </div>
</div>

@endsection

