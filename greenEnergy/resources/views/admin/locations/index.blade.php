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

                         <a href="{{ route ('admin.locations.delete',$location) }}" class="btn btn-danger btn-sml"><i class="fa fa-trash"></i> Delete</a>

                            </td>
                            </tr>
                            @endforeach
                        </tbody>

                        </table>
                        {{ $locations->links() }}
                       
                        @endif

                </div>
            </div>

 @endsection




