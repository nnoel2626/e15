@extends('layouts.admin')

@section('title')
Edit Location
@endsection

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit a Location</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form role="form" action= "{{ route ('admin.locations.update', $location) }}" method="POST">
                   {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="card-body">
                  <div class="form-group">

                    <label for="building">Building</label>
                    <input type="building" class="form-control" id="building"
                    name = "building"  value="{{old ('building', $location->building)}}" placeholder="Building">
                  </div>
                  @include('includes.error-field', ['fieldName' => 'building'])

                  <div class="form-group">
                    <label for="room">Room</label>
                    <input type="room" class="form-control" id="room"  name="room" value="{{old ('room', $location->room)}}" placeholder="Room">
                  </div>
                  @include('includes.error-field', ['fieldName' => 'room'])

                   <div class="form-group">
                    <label for="city">City</label>
                    <input type="city" class="form-control" id="city" value="{{old ('city', $location->city)}}"
                    name="city" placeholder="City">
                  </div>
                   @include('includes.error-field', ['fieldName' => 'city'])

                   <div class="form-group">
                    <label for="state">State</label>
                    <input type="state" class="form-control" id="state" name="state" value="{{old ('state', $location->state)}}"
                     placeholder="State">
                  </div>
                  @include('includes.error-field', ['fieldName' => 'state'])

                   <div class="form-group">
                    <label for="postal_Code">Postal Code</label>
                    <input type="postal_code" class="form-control" name="postal_code" value="{{old ('postal_code', $location->postal_code)}}"
                    id="postal_code" placeholder="Postal_code">
                  </div>
                   @include('includes.error-field', ['fieldName' => 'postal_code'])

                   <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

            </div>

@endsection
