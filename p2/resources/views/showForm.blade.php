@extends('layout.master')


@section('head')
{{-- custom css links for individual pages goes here--}}
@endsection

@section('content')

    <div class="wrapper">
    <div class="header">
        Bill Splitter
    </div>
        {{  Form::open( ['action' => 'TipController@splitTotal']) }}
        {{ csrf_field() }}
    <div>
        {{ Form::label('How much was the Bill ?',null, ['class' => '']) }}
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


    {{-- <fieldset> --}}
        {{-- @if($splitAmount = null)
            <div class='results alert alert-warning'>
            Please, fill out the form fields
            </div>
        @else
            <div class='results alert alert-primary'>
                <ul>
                    <li>{{ $splitAmount }}</li>
                    {{-- <li>{{ $splitAmount }}</li>
                    <li>{{ $splitAmount }}</li>

                </ul>
            </div>
        @endif --}}


    {{-- </fieldset> --}}

    <div class='buttonSpace'>
        {!! Form::button('Submit', ['class' => '', 'child' => '<i class="fa fa-plus"></i>',  'type' => 'submit']) !!}
        {!! Form::button('Reset', ['class' => '', 'child' => '<i class="fa fa-plus"></i>',  'type' => 'reset']) !!}
    </div>
    {!! Form::close() !!}
    </div>



@endsection

