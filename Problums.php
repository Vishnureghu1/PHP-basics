<?php

$number = 100;

for ($i = $number; $i > 2; $i--) {
    $isPrime = 1;
    for ($j = 2; $j <= ceil($i/2); $j++) {
       if ($i%$j==0) {
        $isPrime=0;
        break;
       }
    }

    if ($isPrime == 1) {
        echo "The largest prime number is:'.$i";
        break;
    }
}

$string_one = 'Anagra';
$string_two = 'Aargana';
function anagram_check($str1, $str2) {
     $str1 = strtolower(str_replace(' ', '', $str1));
     $str2 = strtolower(str_replace(' ', '', $str2));

    if (strlen($str1) !== strlen($str2)) {
          echo "Please enter valid string!";
          return false;
    }

    $char_count = array();

    for ($i = 0; $i < strlen($str1); $i++) {
          $char = $str1[$i];
          if (!array_key_exists($char, $char_count)) {
               $char_count[$char] = 0;
          } 
          $char_count[$char]++;
    }

    for ($i = 0; $i < strlen($str2); $i++) {
     $char = $str2[$i];
     if (!array_key_exists($char, $char_count) || $char_count[$char] === 0) {
          echo 'String is not anagram';
       return false;
     }
     $char_count[$char]--;
   }
   
   echo 'String is anagram';
   return true;
}

anagram_check($string_one, $string_two);

?>