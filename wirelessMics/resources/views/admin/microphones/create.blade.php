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

                     <input type="text" class="form-control" id="slug" name="slug" placeholder="Microphone URI slug" autocomplete="slug" autofocus/>
                    @include('includes.error-field', ['fieldName' => 'slug'])
                    </div>

                    <label for="make">Make</label>

                    <input type="make" class="form-control" name="make" value="{{ old('make') }}" id="make" placeholder="make" autocomplete="make" autofocus />
                    @include('includes.error-field', ['fieldName' => 'make'])
                        </div>

                    <div class="form-group">
                    <label for="model">Model</label>
                    <input type="model" class="form-control" name="model" value="{{ old('model') }}"     id="model" placeholder=" model"autocomplete="model" autofocus/>
                    @include('includes.error-field', ['fieldName' => 'model'])
                    </div>

                     <div class="form-group">
                    <label for="frequency band">Frequency Band</label>
                    <input type="band" class="form-control" name="band" value="{{ old('band') }}" id="band" placeholder="frequency band" autocomplete="band" autofocus/>
                    @include('includes.error-field', ['fieldName' => 'band'])
                    </div>


                    <div class="form-group">
                    <label for="frequency_range">Frequency Range</label>

                    <input type="frequency_range" class="form-control" name="frequency_range" value="{{ old('requency_range') }}" id="frequency_range" placeholder="frequency range" autocomplete="frequency_range" autofocus />
                    @include('includes.error-field', ['fieldName' => 'frequency_range'])
                    </div>


                     <div class="form-group">
                    <label for="make">Serial Number</label>

                    <input type="serial_number" class="form-control" name="serial_number" value="{{ old('serial_number') }}" id="serial_number" placeholder="serial number" autocomplete="serial_number" autofocus/>
                    @include('includes.error-field', ['fieldName' => 'serial_number'])
                     </div>


                    <div class="form-group ">
                    <label for="type">Microphone type</label>

                    <input type="type" class="form-control" name="type" value="{{ old('type') }}" id="type" placeholder="microphone type" autocomplete="type" autofocus/>
                    @include('includes.error-field', ['fieldName' => 'type'])
                  </div>


                    <div class="form-group">
                    <label for="group">Group</label>
                    <input type="group" class="form-control" name="group" value="{{ old('group') }}" id="group" placeholder="group" autocomplete="group" autofocus/>
                    @include('includes.error-field', ['fieldName' => 'group'])
                    </div>


                    <div class="form-group">
                    <label for="channel">Channel</label>

                    <input type="channel" class="form-control" name="channel" value="{{ old('channel') }}"  id="channel" placeholder="channel" autocomplete="channel" autofocus/>
                    @include('includes.error-field', ['fieldName' => 'channel'])
                    </div>


                    <div class="form-group">
                    <label for="assigned_frequency">Assigned Frequency</label>

                    <input type="assigned_frequency" class="form-control" name="assigned_frequency" value="{{ old('assigned_frequency') }}" id="assigned_frequency" placeholder="assigned frequency" autocomplete="assigned_frequency" autofocus/>
                     @include('includes.error-field', ['fieldName' => 'assigned_frequency'])
                    </div>


{{--
                    <label for='author_id'>* Author</label>
        <select name='author_id'>
            <option value=''>Choose one...</option>
            @foreach($authors as $author)
                <option value='{{ $author->id }}' {{ (old('author_id') == $author->id) ? 'selected' : '' }}>{{ $author->first_name.' '.$author->last_name }}</option>
            @endforeach
        </select> --}}




                    <div class="form-group">
                    <label for='location_id'>* Select a Location from dropdown list:  </label>
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
                    @include('includes.error-field', ['fieldName' => 'comments'])
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



