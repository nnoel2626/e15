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
               <form role="form" action= "{{ route('admin.locations.update', $location ?? '') }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputBuilding">Building</label>
                    <input type="Building" class="form-control" id="exampleInputBuilding" placeholder="Building">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputRoom">Room</label>
                    <input type="Room" class="form-control" id="exampleInputRoom" placeholder="Room">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputCity">City</label>
                    <input type="City" class="form-control" id="exampleInputCity" placeholder="City">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputState">State</label>
                    <input type="State" class="form-control" id="exampleInputState" placeholder="State">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPostal_code">Postal Code</label>
                    <input type="Postal_code" class="form-control" id="exampleInputPostal_code" placeholder="Postal_code">
                  </div>
                   <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

            </div>

@endsection