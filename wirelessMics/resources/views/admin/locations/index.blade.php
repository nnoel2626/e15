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
                <h3 class="card-header">Listing of Locations </h3>
            </div>

			    <div class="box-body">

                      @if ($locations->isEmpty())

                         <p>There are no Tags! :(</p>
                         @else

                         <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Building</th>
                                <th scope="col">Room</th>
                                <th scope="col">City</th>
                                <th scope="col">State</th>
                                <th scope="col">Postal Code</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($locations as $location)
                            <tr>
                                <th scope="row">{{ $location->id }}</<th>
                                <td>{{ $location->building }}</td>
                                <td>{{ $location->room }}</td>
                                <td>{{ $location->city }}</td>
                                <td>{{ $location->state }}</td>
                                <td>{{ $location->postal_code }}</td>
                            <td>
                        <a href="{{ route('admin.locations.create') }}" class="btn btn-info"><i class="fa fa-plus"></i>Create </a>
                        <a href="{{ route('admin.locations.edit', $location) }}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                        {{-- <a href="{{ route('admin.tags.destroy',$location->id)}}" class="btn btn-danger">Delete</a> --}}
                        <button class="btn btn-danger btn-sml" data-tagId={{$location->id}} data-toggle="modal" data-target="#deleteLocation"><i class="fa fa-trash"></i> Delete</button>

                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>

                        {{-- {{ $locations>links(10) }} --}}
                        @endif

                </div>
            </div>

	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
 	Add New Tag
</button>

<!-- Modal -->
<div class="modal modal-danger fade" id="deleteLocation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('admin.locations.destroy','delete')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="location_id" id="location_id" value="">

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




