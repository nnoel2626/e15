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
            <h1 class='underline'>E15 Project One </h1>
            <h2>String Processor</h2>
            <form method='post' action='process.php'>
                <label for='inputString'><strong>Enter your word:</strong></label>
                <input type='text' name='inputString' id='inputString'>
                <button class="startBtn" type='submit'>Process</button>
                <button class="restartBtn" onclick="header(parent.window.location.reload())">Reset</button>
            </form>

        </div>

        <div class='response'>
            <?php if (isset($results)) : ?>
            <h4>String reverse</h4>
            <?=$stringReverse ?>
            <h4>Is palindrome?</h4>
            <?=$isPalindrome ?>
            <h4>The number of vowels in the word </h4>
            <?=$vowelCount ?>
            <h4>Letter shift?</h4>
            <?=$shiftedString  ?>
            <?php endif ?>
        </div>
    </div>
</body>

</html>


<!-- $string = "This is some text with some more text and even more text.";
echo "There are <strong>".preg_match_all('/[aeiou]/i', $string, $matches)." vowels</strong> in the string <strong>".$string."</strong>"; -->