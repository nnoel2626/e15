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
                    <label for="exampleInputName">Role Name</label>
                    <input type="Name" class="form-control" value="{{ $role->name }}"id="exampleInputName" placeholder="Enter Tag name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputCreated_at">Created_ at</label>
                    <input type="Created_ at" class="form-control" value="{{ $role->created_at }}"id="exampleInputCreated_ at" placeholder="Created_ at">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputUpdated_at">Updated_at</label>
                    <input type="Updated_at" class="form-control" value="{{ $role->updated_at }}"id="exampleInputUpdated_at" placeholder="Updated_at">
                  </div>
                   <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

            </div>
          
@endsection

