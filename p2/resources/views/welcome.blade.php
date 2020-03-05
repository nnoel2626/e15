<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bill Splitter</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/billSpliter.css">
        <!-- Styles -->

    </head>
    <body>
       <div class="wrapper">
  <div class="header">
    Bill Splitter
  </div>
    <form class="insert">
        <label ><i class="fas fa-coins"></i> How much was the Bill?</label>
        <input type="number" id="total" placeholder="add the total">

        <label><i class="fas fa-users"></i> How many people?</label>
        <input type="number" id="people" placeholder="add the number of people">

        <label><i class="fas fa-heart"></i>Add a tip ?</label>
        <select class="btn mybtn">
        <option>Being stingy ( 10% )</option>
        <option>Average tip (15%) </option>
        <option>Feelin' generous (20%) </option>
        </select>
         <input type="checkbox" id="roundUp" name="roundUp" value="roundUp">
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
    </body>
</html>
