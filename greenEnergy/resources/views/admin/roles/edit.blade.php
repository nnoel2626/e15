@extends('layouts.admin')

@section('title')
Edit Role
@endsection

@section('content')
<div class="card card-primary">
    <h3 class="card-title">Edit a Role</h3>

               <form  role="form"action = "{{ route ('admin.roles.update', $role ) }}" method="POST">
                 {{ csrf_field() }}
                  {{ method_field('PUT') }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Role Name</label>
                    <input type="name" class="form-control" name="name" value="{{old('name', $role->name )}}"id="name" placeholder="Enter Tag name">
                     @include('includes.error-field', ['fieldName' => 'name'])
                  </div>

                  <div class="form-group">
                    <label for="created_at">Created_ at</label>
                    <input type="created_at" class="form-control" name="created_at" value="{{ old('created_at', $role->created_at )}}" id="created_at" placeholder="Created_at">
                    @include('includes.error-field', ['fieldName' => 'created_at'])
                  </div>


                   <div class="form-group">
                    <label for="updated_at">Updated_at</label>
                    <input type="updated_at" class="form-control" name="updated_at" value="{{old('updated_at', $role->updated_at) }}" id="updated_at" placeholder="Updated_at">
                    @include('includes.error-field', ['fieldName' => 'updated_at'])
                  </div>

                   <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

            </div>

@endsection

