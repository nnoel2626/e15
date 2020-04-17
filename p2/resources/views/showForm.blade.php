@extends('layout.master')


@section('content')

    <div class="wrapper">

    <div class="header">
        Bill Splitter
    </div>
      <div class= 'errorMessage'>
            @if( Session::has('errors') )
                <div class="alert alert-danger" role="alert" align="left">
                    <div class="errlist">
                        @foreach($errors->all() as $error)
                            {{$error}}</br>
                        @endforeach
                    </div>

                </div>
            @endif
            </div>
    {{ Form::open( ['url' => '/', 'method'=>'post']) }}
        {{ csrf_field() }}
    <div>
        {{ Form::label('How much was the Bill ?', null, ['class' => '']) }}
        {{ Form::number('totalAmount', '$totalAmount or Default'), ['placeholder'=>'Enter bill total'] }}
    </div>
        <div>
        {{ Form::label('Number of people ?', null, ['class' => '']) }}
        {{ Form::number('numberOfPeople', '$numberOfPeople or Default'), ['placeholder'=>'Enter number of people'] }}
    </div>
    <div class='custom-select'>
        {{ Form::label('Tip Amount', null, ['class' => '']) }}
        {{ Form::select('tipPercentage',['Being stingy' => '10%', 'Average tip' => '15%', 'Feelin generous' => '20%'],  '$tipPercentage or Default',
        ['placeholder' => 'Select Tip percetage'], ['class' => 'select-selected'] ) }}
    </div>
    <div class='inline'>
        {{ Form::label('radio', 'RoundUp Total Bill Amount?', ['class' => 'radioLabel']) }}
        {{ Form::radio('roundUp','$roundUp or Default', false, ['class' => 'radio'])  }}
    </div>
     @if(Session::has('splitAmount'))

     <fieldset>
         <div class='results alert alert-primary'>
              <p>Tip Amount:  {{ Session::get('tipTotal') }}</p>
              <p>Each person will pay:  {{ Session::get('splitAmount') }}</p>
              <p>Bill total plus Tips:  {{ Session::get('newBillTotal') }}</p>
        </div>
        </fieldset>
    @endif
    <div class='buttonSpace'>
        {{ Form::button('Submit', ['class' => 'submitBtn', 'type' => 'submit']) }}
        {{ Form::button('Reset', ['class' => 'resetBtn', 'type' => 'reset', 'onclick'=>'location.reload()']) }}
    </div>
    {{ Form::close() }}

    </div>

@endsection


