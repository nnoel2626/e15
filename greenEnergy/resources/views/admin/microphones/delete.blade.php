@extends('layouts.admin')

@section('title')
    Confirm deletion: {{ $microphone->name }}
@endsection

@section('content')

<!-- Main content -->
    <section class="content">

      <!-- Default box -->
       <div class="site-title col-12 text-center">
      <div class="box">
        <div class="box-header with-border">
          <h2 class="box-title">Confirm deletion</h2>

        <div class="box-body card_content">
            <div class="site-title col-12 text-center">

            <h4>Are you sure you want to delete <strong>{{ $microphone->name }}</strong>?</h4>

            <form action="{{ route ('admin.mics.destroy', $microphone->id) }}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
            <input type='submit' value='Yes, delete it!' class='btn btn-danger btn-small'>
            </form>

            <h4 class='cancel'>
                <a href='/microphones/{{ $microphone->id }}'>No, I changed my mind.</a>
            </h4>
            </div>
    </div>
        <!-- /.box-body -->


@endsection
