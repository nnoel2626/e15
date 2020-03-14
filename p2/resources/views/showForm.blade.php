@extends('layout.master')


@section('head')
{{-- custom css links for individual pages goes here--}}
@endsection

@section('content')

    <div class="wrapper">
         @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
         @endif
    <div class="header">
        Bill Splitter
    </div>
        {{  Form::open( ['url' => '/', 'method'=>'post']) }}
        {{ csrf_field() }}
    <div>
        {{ Form::label('How much was the Bill ?', null, ['class' => '']) }}
        {{ Form::number('totalAmount', 'totalAmount'), ['placeholder'=>'Enter bill total'] }}
    </div>
        <div>
        {{ Form::label('Number of people ?', null, ['class' => '']) }}
        {{ Form::number('numberOfPeople', 'numberOfPeople'), ['placeholder'=>'Enter number of people'] }}
    </div>
    <div class='custom-select'>
        {{ Form::label('Tip Amount', null, ['class' => '']) }}
        {{ Form::select('tipPercentage',['Being stingy' => '10%', 'Average tip' => '15%', 'Feelin generous' => '20%'],  $value = null,
        ['placeholder' => 'Select Tip percetage'], ['class' => 'select-selected'] ) }}
    </div>
    <div class='inline'>
        {{ Form::label('radio', 'RoundUp Total Tip?', ['class' => 'radioLabel']) }}
        {{ Form::radio('roundUp','roundUp', false, ['class' => 'radio'])  }}
    </div>
     @if(Session::has('splitAmount'))
     <fieldset>
         <div class='results alert alert-primary'>
            <ul>
            {{-- <li>{{ $splitAmount }}</li> --}}

            </ul>
        </div>
        </fieldset>
    @endif
    <div class='buttonSpace'>
        {{ Form::button('Submit', ['class' => '', 'child' => '<i class="fa fa-plus"></i>',  'type' => 'submit']) }}
        {{ Form::button('Reset', ['class' => '', 'child' => '<i class="fa fa-plus"></i>',  'type' => 'reset']) }}
    </div>
    {!! Form::close() !!}
    </div>

@endsection



