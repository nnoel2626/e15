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
				  <h3 class="card-header">Listing of Microphones </h3>
			  </div>

			    <div class="box-body">
                      @if ($microphones->isEmpty())
                         <p>There are no Roles! :(</p>
                         @else

                        <table class="table table-striped">
                          <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Building</th>
                                <th scope="col">Room</th>
                                <th scope="col">Model</th>
                                <th scope="col">Band</th>
                                <th scope="col">Assigned Frequency</th>
                                <th scope="col">Tag Name</th>
                                <th scope="col">Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach( $microphones as $microphone)
                                <tr>
                                <th scope="row">{{ $microphone->id }}</th>

                                <th> {{ $microphone->location->building }} </th>
                                <td> {{ $microphone->location->room }}</td>

                                <td> {{ $microphone->model }}</td>
                                <td> {{ $microphone->band }}</td>
                                <td> {{ $microphone->assigned_frequency }}</td>

                                @foreach($microphone->tags as $tag)
                                <td class="cell-breakWord">
                                   {{-- {{ $tag->pluck('name')->contains($tag->name)}} --}}
                             <div class="label label-info label-many col='3' ">{{ $tag->name }}</div>
                               </td>
                               @endforeach

                            {{-- <td> {{ implode( ',', $microphone->tags()->get()->pluck('name')->toArray()) }}</td> --}}
                                {{--  --}}
                                <td>
                                <a href="{{ route('admin.mics.create') }}" class="btn btn-info btn-sml">Add </a>

                                <a href="{{ route ('admin.mics.edit', $microphone) }}"><button type="button" class="btn btn-primary btn-sml">Edit</button></a>

                                <button class="btn btn-danger btn-sml" data-microphoneId={{$microphone->id}} data-toggle="modal" data-target="#deleteMic">Delete</button>
                                </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    @endif
         </div>
    </div>


    <!-- Modal -->
<div class="modal modal-danger fade" id="deleteMic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('admin.mics.destroy',$microphone)}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	        <div class="modal-body">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>
	      		<input type="hidden" name="microphone_id" id="microphone_id" value="">

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
	        <button type="submit" class="btn btn-warning">Yes, Delete</button>
	      </div>
      </form>
    </div>
  </div>

 @endsection




