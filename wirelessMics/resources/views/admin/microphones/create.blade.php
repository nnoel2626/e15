@extends('layouts.admin')

@section('title')
    Add a Microphone
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
                <h3 class="card-title ">Create a Microphone</h3>
              </div>
             <form action= "{{ route('admin.mics.store') }}" method="POST">
                     {{ csrf_field() }}
             <div class="form-group">
                    <label class="" for="name">URI</label>

                    <div class='details'>The slug is a unique URL identifier for the book, containing only alphanumeric characters and dashes.
                    <br>It’s suggested that the slug be based on the book title, e.g. a good slug for the book <em>“War and Peace”</em> would be <em>“war-and-peace”</em>.</div>

                     <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}" placeholder="Microphone URI slug" autocomplete="slug" autofocus/>
                             @if ($errors->has('slug'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('slug') }}</strong>
                                    </span>
                                @endif
                    </div>
                    {{-- <div class="form-group">
                        <label  for="building">Building</label>

                        <input class="form-control" type="text" name="building" value="{{ old('building') }}" id="building" placeholder="building" autocomplete="building" autofocus/>

                             @if ($errors->has('building'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('building') }}</strong>
                                    </span>
                                @endif
                        </div>
                    <div class="form-group">
                        <label for="room">Room</label>

                            <input type="text" class="form-control" id="room" placeholder="room"
                            name="room" value="{{ old('room') }}" autocomplete="room" autofocus/>
                             @if ($errors->has('room'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('room') }}</strong>
                                    </span>
                                @endif
                        </div>--}}

                    <label for="make">Make</label>

                    <input type="make" class="form-control" name="make" value="{{ old('make') }}" id="make" placeholder="make" autocomplete="make" autofocus />
                             @if ($errors->has('make'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('make') }}</strong>
                                    </span>
                                @endif
                        </div>

                    <div class="form-group">
                    <label for="model">Model</label>
                    <input type="model" class="form-control" name="model" value="{{ old('model') }}"     id="model" placeholder=" model"autocomplete="model" autofocus/>
                             @if ($errors->has('model'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('model') }}</strong>
                                    </span>
                                @endif
                        </div>

                     <div class="form-group">
                        <label for="frequency band">Frequency Band</label>

                            <input type="band" class="form-control" name="band" value="{{ old('band') }}" id="band" placeholder="frequency band" autocomplete="band" autofocus/>
                             @if ($errors->has('band'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('band') }}</strong>
                                    </span>
                            @endif
                        </div>


                    <div class="form-group">
                        <label for="frequency_range">Frequency Range</label>

                    <input type="frequency_range" class="form-control" name="frequency_range" value="{{ old('requency_range') }}" id="frequency_range" placeholder="frequency range" autocomplete="frequency_range" autofocus />
                             @if ($errors->has('frequency_range'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('frequency_range') }}</strong>
                                    </span>
                                @endif
                        </div>


                     <div class="form-group">
                    <label for="make">Serial Number</label>

                    <input type="serial_number" class="form-control" name="serial_number" value="{{ old('serial_number') }}" id="serial_number" placeholder="serial number" autocomplete="serial_number" autofocus/> @if ($errors->has('serial_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('serial_number') }}</strong>
                                    </span>
                                @endif
                        </div>


                    <div class="form-group ">
                        <label for="type">Microphone type</label>

                            <input type="type" class="form-control" name="type" value="{{ old('type') }}" id="type" placeholder="microphone type" autocomplete="type" autofocus/>
                             @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                        </div>


                    <div class="form-group">
                        <label for="group">Group</label>

                            <input type="group" class="form-control" name="group" value="{{ old('group') }}" id="group" placeholder="group"
                            autocomplete="group" autofocus/>
                             @if ($errors->has('group'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('group') }}</strong>
                                    </span>
                                @endif
                        </div>


                    <div class="form-group">
                        <label for="channel">Channel</label>

                            <input type="channel" class="form-control" name="channel" value="{{ old('channel') }}"  id="channel" placeholder="channel" autocomplete="channel" autofocus/>
                             @if ($errors->has('channel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('channel') }}</strong>
                                    </span>
                                @endif
                        </div>


                    <div class="form-group">
                        <label for="assigned_frequency">Assigned Frequency</label>

                            <input type="assigned_frequency" class="form-control" name="assigned_frequency" value="{{ old('assigned_frequency') }}" id="assigned_frequency" placeholder="assigned frequency" autocomplete="assigned_frequency" autofocus/>

                             @if ($errors->has('assigned_frequency'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('assigned_frequency') }}</strong>
                                    </span>
                                @endif
                        </div>

                         <div class="form-group">
                         <label for='location_id'>* Location</label>
                        <select name='location_id'>
                            <option value=''>Choose one...</option>
                            @foreach($locations as $location)
                                <option value='{{ $location->id }}' {{ (old('location_id') == $location->id) ? 'selected' : '' }}>{{ $location->building.' '.$location->room }}</option>
                            @endforeach
                        </select>
                        @include('includes.error-field', ['fieldName' => 'location_id'])

                       </div>


                    <div class="form-group">
                        <label  for="comments">microphone comments</label>
                        {{-- <div class="col-md-6"> --}}
                            <textarea class="form-control" rows="4" cols="50" name="comments" value="{{ old('comments') }}" id="comments" placeholder="comments"  autofocus></textarea>
                             @if ($errors->has('comments'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comments') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <br/>
                   <br/>
                    <div class="form-group">
                    <div class="form-check">
                    <label for="tags" class="col-md-1 ">Tags</label>
                        <div class="col-md-6">

                                @foreach($tags as $tag)
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
                            <button type="submit" class="btn btn-success btn-lg btn-block lg-auto"> Add microphone </button>
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



