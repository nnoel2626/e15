@extends('layouts.admin')

@section('title')
Edit Tag
@endsection

@section('content')
<div class="card card-primary">
        <h3 class="card-title">Edit a Tag</h3>
            {{-- <div class="card-header">Editing {{ $tag->name }}</div>            --}}
               <form  action = "{{ route ('admin.tags.update', $tag) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputName">Tag Name</label>
                    <input type="name" class="form-control" name="name"
                    value="{{old('name', $tag->name) }}" id="name"
                     placeholder="Enter Tag name">
                      @include('includes.error-field', ['fieldName' => 'name'])
                  </div>


                  <div class="form-group">
                    <label for="created_at">Created_ at</label>
                    <input type="created_ at"  name="created_at" class="form-control" value="{{old ('created_at', $tag->created_at )}}" id="created_at" placeholder="Created_ at">
                     @include('includes.error-field', ['fieldName' => 'created_at'])
                  </div>


                   <div class="form-group">
                    <label for="updated_at">Updated_at</label>
                    <input type="updated_at" name="updated_at" class="form-control" value="{{old ('updated_at', $tag->updated_at)}}" id="updated_at" placeholder="Updated_at">
                     @include('includes.error-field', ['fieldName' => 'updated_at'])
                  </div>

                   <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

            </div>

@endsection

