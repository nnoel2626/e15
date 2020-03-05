<div class="wrapper">
  <div class="header">
    Bill Splitter
  </div>

  <form class="insert">
    <label id="totalL"><i class="fas fa-coins"></i> How much?</label>
    <input type="number" id="total" placeholder="add the total">

     <label id="totalL"><i class="fas fa-users"></i> How many?</label>
    <input type="number" id="people" placeholder="add the number of people">

    <label id="tipL"><i class="fas fa-heart"></i> Feelin' generous? <button id="addTip">Add a tip</button></label>
    <div id="tipInput">
      <input type="number" id="tipPercent" placeholder="add % of the total">
    </div>
    <div class="buttonSpace">
      <button id="splitBtn">Split!</button>
      <button id="resetBtn">Reset</button>
    </div>
    <div id="perPerson">0</div>
  </form>
</div>

<footer>by Valeria Ragonese</footer>

 {!! Form::open(['route' => '']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Your Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'E-mail Address') !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('msg', 'Message') !!}
                {!! Form::textarea('msg', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
            </div>

            {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}

