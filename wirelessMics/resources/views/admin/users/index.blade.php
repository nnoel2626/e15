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
                              <button class="btn btn-danger btn-sml" data-userId={{$user->id}} data-toggle="modal" data-target="#deleteUser"><i class="fa fa-trash"></i>Delete</button>
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

<!-- Modal -->
<div class="modal modal-danger fade" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('admin.users.destroy','test')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="user_id" id="user_id" value="">

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
	        <button type="submit" class="btn btn-warning">Yes, Delete</button>
	      </div>
      </form>
    </div>
  </div>
</div>
@endsection

