<?php

// Declaring numbers
    $a = 5;
    $b = 4; 
    $c = 1.2;
// Arithmetic operations
    echo ($a + $b) * $c."<br>";
    echo $a - $b .'<br>';
    echo $a * $b .'<br>';
    echo $a / $b .'<br>';
    echo $a % $b .'<br> <br>';
// Assignment with math operators
    $a +=$b; echo $a.'<br>'; // $a = 9
    $a = $a - $b; echo $a.'<br>'; // $a = 1
    /* $d = $a - $b;
    echo $d; */
    $a *=$b; echo $a.'<br>'; // $a = 9
    $a /=$b; echo $a.'<br>'; // $a = 9
    $a %=$b; echo $a.'<br><br>'; // $a = 9

// Increment operator
    $x = 5;
    $y = 10;
    echo $x++ .'<br>';
    echo ++$y.'<br>';
// Decrement operator
    $w = 5;
    $v = 10;
    echo $w-- .'<br>';
    echo --$v.'<br>';
// Number checking functions
    is_float(1.45); // true;
    is_double(1.45); // true;
    is_int(5); // true;
    is_numeric("3.45"); // true
    is_numeric("3g.45"); // false
// Conversion
    $strNumber = '12.34';
    $number = (float)$strNumber;
    var_dump($number);
    $number = floatval($strNumber);
    var_dump($number);
    $number = (int)$strNumber;
    var_dump($number);
    $number = intval($strNumber);
    var_dump($number);

// Number functions
    echo "<br> abs(-15) ". abs(-15) . '<br>';
    echo "pow(2, 3) ". pow(2, 3) . '<br>';
    echo 'sqrt(16) '. sqrt(16) . '<br>';
    echo "max(2, 3)" . max(2, 3) . '<br>';
    echo "min(2, 3)" . min(2, 3) . '<br>';
    echo "round(2.4)" . round(2.8) . "<br>";
    echo "floor(2.4)" . floor(2.4) . "<br>";
    echo "ceil(2.4)" . ceil(2.4) . "<br>";


// Formatting numbers
    $number = 123456789.12345;
    echo number_format($number, 2,)."<br>";
    echo number_format($number, 2, ',', ' ');
// https://www.php.net/manual/en/ref.math.php
?>