<?php

require('StringProcessor.php');

session_start();


# 1. (Required) Is palindrome?
    # Get input the string value from post super global
    $inputString = $_POST['inputString'];
    
     # remove special characters, spaces and number from input stringe
    $sanitizedInputString = preg_replace("/[^a-zA-Z]/", "", strtolower($inputString));
       # Reduce string down to just letters a-z
    // $string = preg_replace("/[^a-z]/", '', strtolower($string));


    # Create a new instance of the class StringProcessor
    $stringProcessor = new StringProcessor($sanitizedInputString);

    # Get all the output results of each functions or methods
    $stringReverse = $stringProcessor->stringReverse();
    $isPalindrome = $stringProcessor->isPalindrome();
    $vowelCount = $stringProcessor->vowelCount();
    $shiftedString = $stringProcessor->letterShift();

    #Store all our results in one array in the global session
    $_SESSION['results'] =[
        'stringReverse' => $stringReverse,
        'isPalindrome' => $isPalindrome,
        'vowelCount' => $vowelCount,
        'shiftedString' => $shiftedString
    ];

# redirect to index.php
header('LOCATION: index.php');
