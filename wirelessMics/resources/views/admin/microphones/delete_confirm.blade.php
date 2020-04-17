@extends('layouts.app')

@section('title')
{{-- {{ $title }} --}}
@endsection

@section('head')
{{-- custom css links for individual pages --}}
@endsection

@section('content')
    <div class="col-12 text-center">
    <h2><em>Delete Microphone page</em></h2>
     <div class="row justify-content-center">
     <div class="col-md-6">
         <div class="card">
         <div class="card-header bg-header text-black">
               <h4 class="modal-title">Confirm Delete</h4>         
            </div>
            <div class="card-body">            
                 <p>You are about to delete <b><i class="title"></i></b> record, this procedure is irreversible.</p>
                <p>Do you want to proceed?</p>
                </div>
                <div class="card-footer">
                <a href="{{ route ('admin.mics.list') }}">

                 <button type="button" class="btn .btn-info" data-dismiss="modal">Cancel</button></a> 

                  {{-- <form action= "{{ route ('admin.mics.postDelete') }}" method="POST" class="">
                     {{-- {{ Form::hidden('id', $microphone->id) }} --}}
                     {{-- {{ csrf_field() }}
                     {{ method_field('DELETE') }}
                     <button type="submit" class="btn btn-danger btn-ok">Delete</button>
                 </form>  --}}
                  
                {{-- {{ Form::open(route( 'admin.mics.postDelete')) }}
                {{-- {{ Form::hidden('id', $microphone->id) }}
                 {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button onClick='parentNode.submit();return false;'>Delete</button>
                {{ Form::close() }} --}}


                <form action= "{{route ('admin.mics.postDelete', $microphone) }}" method="POST" class="float-center">
                 @csrf
                 {{-- {{ Form::hidden('id', $microphone->id) }} --}}
                {{-- {{ method_field('DELETE') }} --}}
                {{-- <button type="submit" class="btn btn-danger">Delete</button>
                </form>  --}}
                
            
            </div>
         </div>
      </div>
    </div>
    </div>
@endsection



        {{-- <a href="{{ action('EquipmentController@getIndex') }}" class="btn btn-default">Cancel</a>
        <a href="{{ action('EquipmentController@getEdit', $equipment->id) }}"  class="btn btn-default">Edit</a>
        <a href="{{ action('EquipmentController@getDelete', $equipment->id) }}" class="btn btn-danger">Delete</a> --}}