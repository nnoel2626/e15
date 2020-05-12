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

             <div class='details'>The slug is a unique URL identifier for the microphone, containing only alphanumeric characters and dashes.
             </div>

            <input dusk="slug-input" type="text" class="form-control" id="slug" name="slug"  value="{{ old('slug') }}" placeholder="Microphone URI slug" autocomplete="slug" autofocus/>
             </div>
             @include('includes.error-field', ['fieldName' => 'slug'])


            <div class="form-group">
             <label for='location_id'>Select a location from dropdown list:  </label>
                <select name='location_id'>
                    <option value=''>Choose location</option>
                    @foreach($locations as $location)
                                <option value='{{ $location->id }}' {{ (old('location_id') == $location->id) ? 'selected' : '' }}>{{ $location->building.' '.$location->room }}</option>
                     @endforeach
                 </select>
             </div>
             @include('includes.error-field', ['fieldName' => 'location_id'])


            <div class="form-group">
            <label for="make">Make</label>
            <input dusk="make-input" type="make" class="form-control" name="make" value="{{ old('make') }}" id="make" placeholder="make" autocomplete="make" autofocus />
             </div>
            @include('includes.error-field', ['fieldName' => 'make'])


            <div class="form-group">
            <label for="model">Model</label>
            <input  dusk="model-input" type="model" class="form-control" name="model" value="{{ old('model') }}"  id="model" placeholder=" model"autocomplete="model" autofocus/>
             </div>
            @include('includes.error-field', ['fieldName' => 'model'])


             <div class="form-group">
            <label for="frequency band">Frequency Band</label>
            <input dusk="band-input" type="band" class="form-control" name="band" value="{{ old('band') }}" id="band" placeholder="frequency band" autocomplete="band" autofocus/>
             </div>
            @include('includes.error-field', ['fieldName' => 'band'])


            <div class="form-group">
            <label for="frequency_range">Frequency Range</label>

            <input dusk="frequency_range-input" type="frequency_range" class="form-control" name="frequency_range" value="{{ old('requency_range') }}" id="frequency_range" placeholder="frequency range" autocomplete="frequency_range" autofocus />
             </div>
            @include('includes.error-field', ['fieldName' => 'frequency_range'])


            <div class="form-group">
            <label for="make">Serial Number</label>
            <input  dusk="serial_number-input" type="serial_number" class="form-control" name="serial_number" value="{{ old('serial_number') }}" id="serial_number" placeholder="serial number" autocomplete="serial_number" autofocus/>
             </div>
            @include('includes.error-field', ['fieldName' => 'serial_number'])


            <div class="form-group ">
            <label for="type">Microphone type</label>
             <input dusk="type-input" type="type" class="form-control" name="type" value="{{ old('type') }}" id="type" placeholder="microphone type" autocomplete="type" autofocus/>
              </div>
             @include('includes.error-field', ['fieldName' => 'type'])


            <div class="form-group">
            <label for="group">Group</label>
            <input dusk="group-input" type="group" class="form-control" name="group" value="{{ old('group') }}" id="group" placeholder="group" autocomplete="group" autofocus/>
             </div>
             @include('includes.error-field', ['fieldName' => 'group'])


            <div class="form-group">
            <label for="channel">Channel</label>
            <input dusk="channel-input" type="channel" class="form-control" name="channel" value="{{ old('channel') }}"  id="channel" placeholder="channel" autocomplete="channel" autofocus/>
             </div>
             @include('includes.error-field', ['fieldName' => 'channel'])


            <div class="form-group">
            <label for="assigned_frequency">Assigned Frequency</label>

            <input dusk="assigned_frequency-input" type="assigned_frequency" class="form-control" name="assigned_frequency" value="{{ old('assigned_frequency') }}" id="assigned_frequency" placeholder="assigned frequency" autocomplete="assigned_frequency" autofocus/>
             </div>
            @include('includes.error-field', ['fieldName' => 'assigned_frequency'])


            <div class="form-group">
            <label  for="comments">microphone comments</label>
            <textarea dusk="comments-input" class="form-control" rows="4" cols="50" name="comments" value="{{ old('comments') }}" id="comments" placeholder="comments"  autofocus></textarea>
             </div>
             @include('includes.error-field', ['fieldName' => 'comments'])
            <br/><br/>

             <div class="form-group">
            <div class="form-check">
            <label for="tags" class="col-md-1 ">Tags</label>
            <div class="col-md-6">
                @foreach($tags as $tag)
                <div  class="form-check checkbox-inline">
                    <input dusk="tags-checkbox" type ="checkbox" name="tags[]" value ="{{old('tags', $tag->id) }}"
                        @if($tags->pluck('id')->contains($tag->id)) @endif>
                    <label>{{ $tag->name }}</label>
                </div>
                @endforeach

             </div>
            </div><br/><br/>

            <div class="form-group">
                <div class=" col-md-6 text-md-right">
                   <button type="submit" dusk="add-button" class="btn btn-success btn-lg btn-block lg-auto">Add microphone<button>
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



