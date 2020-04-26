@extends('layouts.admin')

@section('title')
{{-- {{ $title }} --}}
@endsection

@section('head')
{{-- custom css links for individual pages --}}
@endsection

@section('content')

<section class="content">
      <div class="container-fluid centered">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header centered">
                <h3 class="card-title ">Update a Microphone</h3>
              </div>
             <form action= "{{ route('admin.mics.update',$microphone) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
             <div class="form-group">
                    <label class="" for="name">URI</label>

                <div class='details'>The slug is a unique URL identifier for the book, containing only alphanumeric characters and dashes.</div>

            <input type="text" class="form-control" id="slug" placeholder="Microphone URI Slug"
            name="slug" value="{{old('slug', $microphone->slug) }}" required autocomplete="slug" autofocus/>
            @include('includes.error-field', ['fieldName' => 'slug'])
            </div>
                    <div class="form-group">
                        <label  for="building">Building</label>

                        {{-- <input class="form-control" type="text" name="building" id="building" placeholder="building"  name="building" value="{{ old('building', $microphone->building)}}" required autocomplete="building" autofocus/>
                             @if ($errors->has('building'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('building') }}</strong>
                                    </span>
                                @endif
                        </div>
                    <div class="form-group">
                        <label for="room">Room</label>

                            <input type="text" class="form-control" id="room" placeholder="room"
                             name="room" value="{{ old('room', $microphone->room) }}" required autocomplete="room" autofocus/>
                             @if ($errors->has('room'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('room') }}</strong>
                                    </span>
                                @endif
                        </div> --}}

                    <div class="form-group">
                    <label for="make">Make</label>

                     <input type="make" class="form-control" name="make" id="make" placeholder="make"
                    value="{{old('make', $microphone->make) }}" required autocomplete="make" autofocus/>
                    @include('includes.error-field', ['fieldName' => 'make'])
                    </div>

                    <div class="form-group">
                    <label for="model">Model</label>
                     <input type="model" class="form-control" name="model" id="model" placeholder=" model" value="{{ old('model',$microphone->model) }}" required autocomplete="model" autofocus/>
                    @include('includes.error-field', ['fieldName' => 'model'])
                    </div>

                    <div class="form-group">
                    <label for="frequency band">Frequency Band</label>
                    <input type="band" class="form-control" name="band" id="band" placeholder="frequency band" value="{{ old('band',$microphone->band)}}" required autocomplete="band" autofocus/>
                    @include('includes.error-field', ['fieldName' => 'band'])
                    </div>


                    <div class="form-group">
                    <label for="frequency_range">Frequency Range</label>
                    <input type="frequency_range" class="form-control" name="frequency_range" id="frequency_range" placeholder="frequency range" value="{{ old('frequency_range', $microphone->frequency_range) }}" required autocomplete="frequency_range" autofocus/>
                    @include('includes.error-field', ['fieldName' => 'frequency_range'])
                    </div>


                    <div class="form-group">
                    <label for="make">Serial Number</label>
                    <input type="serial_number" class="form-control" name="serial_number" id="serial_number" placeholder="serial number" autocomplete="serial_number"
                    value="{{ old('serial_number', $microphone->serial_number) }}" required  autofocus/>
                    @include('includes.error-field', ['fieldName' => 'serial_number'])
                    </div>


                    <div class="form-group ">
                    <label for="type">Microphone type</label>
                    <input type="type" class="form-control" name="type" id="type" placeholder="microphone type"
                        value="{{ old('type', $microphone->type) }}" required autocomplete="type" autofocus/>
                    @include('includes.error-field', ['fieldName' => 'type'])
                    </div>


                    <div class="form-group">
                    <label for="group">Group</label>

                    <input type="group" class="form-control" name="group" id="group" placeholder="group"
                    value="{{ old('group', $microphone->group) }}" required autocomplete="group" autofocus/>
                    @include('includes.error-field', ['fieldName' => 'group'])
                    </div>


                    <div class="form-group">
                    <label for="channel">Channel</label>
                    <input type="channel" class="form-control" name="channel" id="channel" placeholder="channel" value="{{ old('channel', $microphone->channel) }}" required autocomplete="channel" autofocus/>
                    @include('includes.error-field', ['fieldName' => 'channel'])
                    </div>


                    <div class="form-group">
                    <label for="assigned_frequency">Assigned Frequency</label>
                    <input type="assigned_frequency" class="form-control" name="assigned_frequency" id="assigned_frequency" placeholder="assigned frequency"
                    value="{{ old('assigned_frequency', $microphone->assigned_frequency) }}" required autocomplete="assigned_frequency" autofocus/>
                    @include('includes.error-field', ['fieldName' => 'assigned_frequency'])
                    </div>

                    <div class="form-group">
                    <label for='location_id'>* Location:  </label>
                     <input type='location' name='location' id='location' value='{{ old('location_id', $microphone->location_id)}}'>
                    @include('includes.error-field', ['fieldName' => 'location_id'])
                    </div>

                    <div class="form-group">
                    <label  for="comments">microphone comments</label>
                    <textarea class="form-control" rows="4" cols="50" name="comments" id="comments" placeholder="comments" value="{{ old('comments', $microphone->comments) }}" required  autocomplete="comments" autofocus>
                    </textarea>
                    @include('includes.error-field', ['fieldName' => 'comments'])
                    </div>

                        <br/>
                   <br/>
                    <div class="form-group">
                    <div class="form-check">
                    <label for="tags" class="col-md-1  ">Tags :</label>
                        <div class="col-md-6">
                            @foreach( $tags as $tag)
                                <div class ="form-check checkbox-inline">
                                    <input type ="checkbox" name="tags[]" value ="{{old('tags', $tag->id) }}"
                                    @if($tags->pluck('id')->contains($tag->id)) @endif>
                                    <label>{{ $tag->name }}</label>
                                </div>
                            @endforeach
                        </div>
                        </div>


                        <br/>
                       <br/>
                    <div class="form-group">
                        <div class=" col-md-6 text-md-right">
                            <button type="submit" class="btn btn-success btn-lg btn-block lg-auto"> Update microphone </button>
                        </div>
                    </div>

                </form>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection

