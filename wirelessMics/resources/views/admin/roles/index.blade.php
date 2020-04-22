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
                                {{-- <a href="{{ route ('admin.roles.destroy', $role->id) }}" class="btn btn-danger">Delete</a> --}}
                                <button class="btn btn-danger btn-sml" data-roleId={{$role->id}} data-toggle="modal" data-target="#deleteRole"><i class="fa fa-trash"></i>Delete</button>

                                <br>
                                </td>
                                </tr>
                            @endforeach
                            </tbody>
                  </table>
            @endif


         </div>
    </div>

<!-- Modal -->
<div class="modal modal-danger fade" id="deleteRole" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('admin.roles.destroy','delete')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="role_id" id="role_id" value="">

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

