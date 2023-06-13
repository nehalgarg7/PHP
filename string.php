<?php
// String

$str = "Hello World!";

/**
 * Commonly used String Functions
 * 1. strlen() - return string length
 * 2. str_word_count() - return count of words
 * 3. strrev() - reverse the string
 * 4. strpos("Hello world i am nehal!","am") - return pos of pattern in string if found. else return -1 
 * 5. str_replace("world", "Dolly", "Hello world!"); - return Hello Dolly!
 */

 // string to array conversion -> done using explode();

 $rollNum = "1 2 3 4 5 6";
 $arr = explode(" ",$rollNum);
 //echo var_dump($arr);
 for($i = 0 ; $i<count($arr) ; $i++)
{
    echo $arr[$i]."<br>";
}
?>