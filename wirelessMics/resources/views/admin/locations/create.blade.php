@extends('layouts.admin')

@section('title')
    Add a Tag
@endsection

@section('content')
          <div class="card card-primary">


               <div class="site-title col-12 text-center">
                <h3 class="card-title">Create a Location</h3>
              </div>

               <form role="form" action= "{{ route('admin.locations.store') }}" method="POST">
                     {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="building">Building</label>
                    <input type="building" class="form-control" id="building" name="building" placeholder="Building">
                     @include('includes.error-field', ['fieldName' => 'building'])
                  </div>


                  <div class="form-group">
                    <label for="room">Room</label>
                    <input type="room" class="form-control" id="room"  name="room"placeholder="Room">
                     @include('includes.error-field', ['fieldName' => 'room'])
                  </div>


                   <div class="form-group">
                    <label for="city">City</label>
                    <input type="city" class="form-control" id="city"
                    name="city" placeholder="City">
                     @include('includes.error-field', ['fieldName' => 'city'])
                  </div>


                   <div class="form-group">
                    <label for="state">State</label>
                    <input type="state" class="form-control" id="state"
                    name="state" placeholder="state">
                     @include('includes.error-field', ['fieldName' => 'state'])

                  </div>

                   <div class="form-group">
                    <label for="postal_code">Postal Code</label>
                    <input type="postal_code" class="form-control" id="postal_code"
                    name="postal_code" placeholder="Postal_code">
                     @include('includes.error-field', ['fieldName' => 'postal_code'])
                  </div>

                   <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

            </div>

@endsection


