@extends('layouts.admin')

@section('title')
Edit Tag
@endsection

@section('content')
<div class="card card-primary">
        <h3 class="card-title">Edit a Tag</h3>
            {{-- <div class="card-header">Editing {{ $tag->name }}</div>            --}}
               <form  role="form"action = "{{ route ('admin.tags.update', $tag ) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputName">Tag Name</label>
                    <input type="Name" class="form-control"value="{{ $tag->name }}" id="exampleInputName" placeholder="Enter Tag name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputCreated_at">Created_ at</label>
                    <input type="Created_ at" class="form-control"value="{{ $tag->created_at }}" id="exampleInputCreated_ at" placeholder="Created_ at">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputUpdated_at">Updated_at</label>
                    <input type="Updated_at" class="form-control" value="{{ $tag->updated_at}}"id="exampleInputUpdated_at" placeholder="Updated_at">
                  </div>
                   <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

            </div>

@endsection

