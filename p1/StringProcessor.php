<?php


class StringProcessor
{
    # define a property or properties with visibility( private or public)
    private $sanitizedInputString;

    # define all  Methods (which are functions)

    public function __construct($sanitizedInputString)
    {
        $this->inputString = $sanitizedInputString;
    }

    #Reverse string function
    public function stringReverse()
    {
        // var_dump($this->inputString);

        $outputString ="";

        $len = strlen($this->inputString);

        for ($i = $len; $i>= 0; $i--) {
            $outputString .= substr($this->inputString, $i, 1);
        }
       
        return  $outputString;
    }

    #Passing sanitizedString to Palindrome function
    public function isPalindrome()
    {
        #compare the reverse sanitized string with the sanitized string or empty string
        if ($this->inputString == strrev($this->inputString) || strlen($this->inputString) == 0) {
            return 'Yes';
        } else {
            return "no";
        }
    }
    
    # 2. (Required) Vowel count
    public function vowelCount()
    {
        #Searches inputString for all matches to the regular expression given in pattern and count all that matches
        preg_match_all('/[aeiou]/i', $this->inputString, $matches);
        return count($matches[0]);
    }

    # 3. (Optional) Letter shift
    public function letterShift()
    {
        $shift = 1;
        $shiftedString = "";

        for ($i = 0; $i < strlen($this->inputString); $i++) {
            $ascii = ord(substr($this->inputString, $i, 1));
            $shiftedLetters = chr($ascii + $shift);
            $shiftedString .= $shiftedLetters;
        }
        return $shiftedString;
    }
}
