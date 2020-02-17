<!DOCTYPE html>
<html lang='en'>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> E15-P1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/p1.css">
    <!-- <script src='js/wordGuess.js' defer></script> -->


</head>

<body>
    <div class="container">
        <div>
            <h1 class='underline'>E-15 Project One </h1>
            <h2>String Processor</h2>
            <form method='post' action='process.php'>
                <label for='inputString'><strong>Enter a word:</strong></label>
                <input type='text' name='inputString' id='inputString'>
                <button class="startBtn" type='submit'>Process</button>
                <button class="reset" type="button" value="Link" onclick="location.href='index.php'">Reset</button>
            </form>
            <br>

        </div>
        <div class='response'>
            <?php if (isset($results)) : ?>
            <h4>The input string reverse</h4>
            <?=$stringReverse ?>
            <h4>Is palindrome ?</h4>
            <?=$isPalindrome ?>
            <h4>The number of vowels in the input string</h4>
            <?=$vowelCount ?>
            <h4>The input string after all letters are shifted</h4>
            <?=$shiftedString ?>
            <?php endif ?>
        </div>
    </div>
</body>

</html>