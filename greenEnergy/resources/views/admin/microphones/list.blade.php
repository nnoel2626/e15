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
                                @if($microphone->location)
                                <th> {{ $microphone->location->building }} </th>
                                <td> {{ $microphone->location->room }}</td>
                                @endif
                                <td> {{ $microphone->model }}</td>
                                <td> {{ $microphone->band }}</td>
                                <td> {{ $microphone->assigned_frequency }}</td>
                                <td class="cell-breakWord">
                                    <div class="label label-info label-many">
                                    {{ implode( ',', $microphone->tags()->pluck('name')->toArray()) }}
                                    </div>
                               </td>
                              
                                <td>
                                <a href="{{ route('admin.mics.create') }}" class="btn btn-info btn-sml"><i class="fa fa-plus"></i>Create</a>

                                <a dusk="edit-button" href="{{ route ('admin.mics.edit', $microphone) }}"><button type="button" class="btn btn-primary btn-sml"><i class="fa fa-edit"></i>Edit</button></a>

                                 <a href="{{ route ('admin.microphones.delete',$microphone) }}" class="btn btn-danger btn-sml"><i class="fa fa-trash"></i> Delete</a>
                                </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $microphones->links() }}
                    @endif
         </div>
    </div>



 @endsection




