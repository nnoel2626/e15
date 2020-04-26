@extends('layouts.admin')

@section('title')
    Add a Role
@endsection

@section('content')

          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create a Role</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form role="form" action= "{{ route('admin.roles.store') }}" method="POST">
                     {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Role Name</label>
                    <input type="name" class="form-control" id="name" placeholder="Enter Tag name">
                     @include('includes.error-field', ['fieldName' => 'name'])
                  </div>


                  <div class="form-group">
                    <label for="created_ at">Created_ at</label>
                    <input type="created_ at" class="form-control" id="created_ at" placeholder="Created_ at">
                     @include('includes.error-field', ['fieldName' => 'created_at'])

                  </div>

                   <div class="form-group">
                    <label for="updated_at">Updated_at</label>
                    <input type="updated_at" class="form-control" id="updated_at" placeholder="Updated_at">
                    @include('includes.error-field', ['fieldName' => 'updated_at'])
                  </div>

                   <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

            </div>

@endsection


