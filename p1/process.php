<?php

session_start();


# 1. (Required) Is palindrome?

    $inputString = $_POST['inputString'];
    //var_dump($inputString);

    # remove special characters, spaces and make lowercase*/
    $sanitizedInputString =  preg_replace("/[^a-zA-Z]/", "", $inputString);

   // var_dump($sanitizedInputString);

#Reverse string function
function stringReverse($sanitizedInputString)
{
    $outputString ="";

    $len = strlen($sanitizedInputString);

    for ($i = $len; $i>= 0; $i--) {
        $outputString .= substr($sanitizedInputString, $i, 1);
    }
       
    return  $outputString;
}


#Passing sanitizedString to Palindrome function
function isPalindrome($sanitizedInputString)
{   
    /* compare the reverse sanitized string with the sanitized string or empty string*/
    if ($sanitizedInputString == strrev($sanitizedInputString) || $sanitizedInputString = 0) {
        return 'Yes';
    } else {
        return "no";
    }
};

#{ ($sanitizedInputString != $outputString)
// $sanitizedInputString == 0

# 2. (Required) Vowel count
function vowelCount($sanitizedInputString)
{
    preg_match_all('/[aeiou]/i', $sanitizedInputString, $matches);

    return count($matches[0]);
};


# 3. (Optional) Letter shift

function letterShift($sanitizedInputString)
{
    $InputString = $sanitizedInputString;
    $shift = 1;
    $shiftedString = "";

    for ($i = 0; $i < strlen($InputString); $i++) {
        $ascii = ord($InputString[$i]);
        $shiftedLetters = chr($ascii + $shift);
        $shiftedString .= $shiftedLetters;
    }
    return $shiftedString;
};


$stringReverse = stringReverse($sanitizedInputString);
$isPalindrome = isPalindrome($sanitizedInputString);
$vowelCount = vowelCount($sanitizedInputString);
$shiftedString = letterShift($sanitizedInputString);



$_SESSION['results'] =[
    'stringReverse' => $stringReverse,
    'isPalindrome' => $isPalindrome,
    'vowelCount' => $vowelCount,
    'shiftedString' => $shiftedString
];

//var_dump($_SESSION);


if (isset($_POST['submit'])) {
    function reset()
    {
        $reset = $_POST['submit'];
        //var_dump($inputString);
    }
};




header('LOCATION: index.php');
