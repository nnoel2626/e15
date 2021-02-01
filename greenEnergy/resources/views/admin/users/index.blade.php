@extends('layouts.admin')

@section('head')
      <link href='/css/microphones/list.css' rel='stylesheet'>
@endsection

@section('content')

@if (session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
    @endif

        <div class="box">
			<div class="box-header">
				  <h3 class="card-header">Listing of Users </h3>
			  </div>

			    <div class="box-body">
                      @if ($users->isEmpty())
                         <p>There are no Roles! :(</p>
                         @else

                        <table class="table table-striped">
                            <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Roles</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
					               <tbody>
                            @foreach( $users as $user)
                            <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <th> {{ $user->name  }}</th>
                            <td> {{ $user->email  }}</td>
                            <td> {{ implode( ',', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                            <td>
                            <a href="{{ route ('admin.users.edit', $user) }}" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a>

                             @can('delete-users')

                              <a href="{{ route ('admin.users.delete',$user) }}" class="btn btn-danger btn-sml"><i class="fa fa-trash"></i> Delete</a>

                              @endcan
                            </td>
                            </tr>
                            @endforeach
                          </tbody>
                </table>
            @endif
         </div>
    </div>
  </div>
@endsection

