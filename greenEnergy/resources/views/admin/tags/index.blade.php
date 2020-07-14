@extends('layouts.admin')

@section('head')
      <link href='/css/microphones/list.css' rel='stylesheet'>
@endsection

@section('content')

 @if (session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
    @endif
        <div class="box">
			<div class="box-header"><h3 class="card-header">Listing of Tags </h3></div>
			    <div class="box-body">
                      @if ($tags->isEmpty())
                         <p>There are no Tags! :(</p>
                         @else
                         <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th>All Tags Name</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tags as $tag)
                            <tr>
                                <th>{{ $tag->id }}</th>
                                <th>{{ $tag->name }}</th>
                                <td>{{ $tag->created_at }}</td>
                                <td>{{ $tag->updated_at }}</td>
                            <td>
                        <a href="{{ route('admin.tags.create') }}" class="btn btn-info"><i class="fa fa-plus"></i>Create </a>
                        <a href="{{ route('admin.tags.edit', $tag) }}" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a>
                         <a href="{{ route ('admin.tags.delete',$tag) }}" class="btn btn-danger btn-sml"><i class="fa fa-trash"></i> Delete</a>
                            <br>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        @endif

                </div>
            </div>


 @endsection




