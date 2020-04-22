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
                        {{-- <a href="{{ route('admin.tags.destroy',$tag->id)}}" class="btn btn-danger">Delete</a> --}}

                        <button class="btn btn-danger btn-sml" data-tagId={{$tag->id}} data-toggle="modal" data-target="#deleteTag"><i class="fa fa-trash"></i>Delete</button>
                            <br>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        @endif

                </div>
            </div>

	<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal modal-danger fade" id="deleteTag" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('admin.tags.destroy','delete')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="tag_id" id="tag_id" value="">

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




