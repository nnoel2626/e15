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
                    <input type="name" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Enter Role name">
                  </div>
                   @include('includes.error-field', ['fieldName' => 'name'])

                  <div class="form-group">
                    <label for="created_ at">Created_ at</label>
                    <input type="created_ at" class="form-control" name="created_at" id="created_ at" value="{{ old('created_at') }}" placeholder="Created_ at">
                </div>
                 @include('includes.error-field', ['fieldName' => 'created_at'])
                   <div class="form-group">
                    <label for="updated_at">Updated_at</label>
                    <input type="updated_at" class="form-control" name="updated_at" id="updated_at" value="{{ old('updated_at') }}" placeholder="Updated_at">
                  </div>
                   @include('includes.error-field', ['fieldName' => 'updated_at'])

                   <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

            </div>

@endsection


