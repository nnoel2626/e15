@extends('layouts.admin')

@section('head')
      <link href='/css/microphones/list.css' rel='stylesheet'>
@endsection

{{-- @section('title')
All the Roles
@endsection --}}

@section('content')
@if (session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
    @endif

        <div class="box">
			<div class="box-header">
				  <h3 class="card-header">Listing of Roles </h3>
			  </div>

			    <div class="box-body">
                      @if ($roles->isEmpty())
                         <p>There are no Roles! :(</p>
                         @else

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th>Roles Name</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $role)
                                <tr>
                                    <th>{{ $role->id }}</th>
                                    <th>{{ $role->name }}</th>
                                    <td>{{ $role->created_at }}</td>
                                    <td>{{ $role->updated_at }}</td>
                                    <td>
                                <a href="{{ route('admin.roles.create') }}" class="btn btn-info"><i class="fa fa-plus"></i>Create</a>
                                <a href="{{ route('admin.roles.edit', $role) }}" class="btn  btn-primary"><i class="fa fa-edit"></i>Edit</a>
                                 <a href="{{ route ('admin.roles.delete',$role) }}" class="btn btn-danger btn-sml"><i class="fa fa-trash"></i> Delete</a>

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

