@extends('layouts.admin')

@section('title')
    Delete a Tag
@endsection

@section('content')
    <div class="page-header">
        <h1>All Tag<small>Gotta catch 'em all!</small></h1>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <a href="{{ action('TagsController@create') }}" class="btn btn-primary">Create Tag</a>
        </div>
    </div>


<h1><small>Are you sure that you want to destroy this tag entry?</small></h1>

{{---- DELETE -----}}
{{ Form::open(array('url' => '/tags/delete')) }}
{{ Form::hidden('id',$tag['id']); }}
<button onClick='parentNode.submit();return false;'>Delete</button>
{{ Form::close() }}

@endsection
