@extends('layouts.app')

@section('head')
     <link href='/css/microphones/list.css' rel='stylesheet'>
@endsection

@section('content')
    {{-- <div class="container">  --}}
          @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
                @endif
        <div class="row justify-content-center">
          
              {{-- <div class="col-md-12">  --}}
                <div class="card">
                    <div class="card-header">Microphones</div>

                    <div class="card-body">

                        <table class="table">
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
                                <th> {{ $microphone->building }} </th>
                                <td> {{ $microphone->room }}</td>
                                <td> {{ $microphone->model }}</td>
                                <td> {{ $microphone->band }}</td>
                                <td> {{ $microphone->assigned_frequency }}</td>
                                <td> {{ implode( ',', $microphone->tags()->get()->pluck('name')->toArray()) }}</td>
                                <td>
                                <a href="{{ route('admin.mics.create') }}" class="btn btn-secondary">Add </a>

                                <a href="{{ route ('admin.mics.edit', $microphone->id) }}"><button type="button" class="btn btn-primary float-left">Edit</button></a>



                                <form action= "{{ route ('admin.mics.destroy', $microphone) }}" method="POST" class="float-left">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-warning">Delete</button>
                                </form>

                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                    </div>
                {{-- </div> --}}
            </div>
        </div>
    {{-- </div> --}}

 @endsection
