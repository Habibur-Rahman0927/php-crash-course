<?php

// Create simple string
    $name = "Zura";
    $string = "Hello ".$name;
    $string2 = "Hello ".$name;
    $string3 = "Hello $name. I am 28 years old";
    $string4 = 'Hello $name. I am 28 years old';

    echo $string .'<br>';
    echo $string2 .'<br>';
    echo $string3 .'<br>';
    echo $string4 .'<br>';

// String concatenation
    echo 'Hello '.'world'.' and Php'.'<br>';
// String functions
    $stringFun = "      Hello world         ";
    echo "1 - " . strlen($stringFun) . '<br>';
    echo "2 - " . trim($stringFun) . '<br>';
    echo "3 - " . ltrim($stringFun) . '<br>';
    echo "4 - " . rtrim($stringFun) . '<br>';
    echo "5 - " . str_word_count($stringFun) . '<br>';
    echo "6 - " . strrev($stringFun) . '<br>';
    echo "7 - " . strtoupper($stringFun) . '<br>';
    echo "8 - " . strtolower($stringFun) . '<br>';
    echo "9 - " . ucfirst('hello') . '<br>';
    echo "10 - " . lcfirst('HELLO') . '<br>';
    echo "11 - " . ucwords('hello world') . '<br>';
    echo "12 - " . strpos($stringFun,'World') . '<br>';
    echo "13 - " . stripos($stringFun,'hello world') . '<br>';
    echo "14 - " . substr($stringFun,8) . '<br>';
    echo "15 - " . str_replace("world","PHP",$stringFun) . '<br>';
    echo "15 - " . str_ireplace("World","PHP",$stringFun) . '<br>';

// Multiline text and line breaks
    $longText = "
        Hello, My name is <b>Zura</b>,
        I am 27,
        I love myself.
    ";
    echo "1 - ".$longText.'<br>';
    echo "2 - ". nl2br($longText). "<br>";
    echo "3 - ". htmlentities($longText). "<br>";
    echo "4 - ". nl2br(htmlentities($longText)). "<br>";
    echo html_entity_decode('&lt;b&gt;Zura&lt;/b&gt');

// Multiline text and reserve html tags

// https://www.php.net/manual/en/ref.strings.php