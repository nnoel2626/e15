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
                    <label for="exampleInputName">Role Name</label>
                    <input type="Name" class="form-control" id="exampleInputName" placeholder="Enter Tag name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputCreated_at">Created_ at</label>
                    <input type="Created_ at" class="form-control" id="exampleInputCreated_ at" placeholder="Created_ at">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputUpdated_at">Updated_at</label>
                    <input type="Updated_at" class="form-control" id="exampleInputUpdated_at" placeholder="Updated_at">
                  </div>
                   <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

            </div>

@endsection


