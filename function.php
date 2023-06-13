<?php
// Function declared using function keyword.

global $a;
global $b;

function sum()
{
    //$a = 4 ; $b = 5;
    $result = $a + $b;
    echo $result;
}

sum();
?>