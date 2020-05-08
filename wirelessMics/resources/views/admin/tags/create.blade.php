@extends('layouts.admin')

@section('title')
    Add a Tag
@endsection

@section('content')

          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create a Tag</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form role="form" action= "{{ route('admin.tags.store') }}" method="POST">
                     {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputName">Tag Name</label>
                    <input type="Name" class="form-control" name="name" id="exampleInputName" value="{{ old('name') }}" placeholder="Enter Tag name">

                  </div>
                  @include('includes.error-field', ['fieldName' => 'name'])

                  <div class="form-group">
                    <label for="created_at">Created_ at</label>
                    <input type="created_at" class="form-control" name="created_at" value="{{ old('created_at') }}" id="created_at" placeholder="created_at">

                  </div>
                  @include('includes.error-field', ['fieldName' => 'created_at'])

                   <div class="form-group">
                    <label for="updated_at">Updated_at</label>
                    <input type="updated_at" class="form-control" name="updated_at" value="{{ old('updated_at') }}"id="updated_at" placeholder="Updated_at">

                  </div>
                  @include('includes.error-field', ['fieldName' => 'updated_at'])

                   <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

            </div>


@endsection


