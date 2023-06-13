<?php
// Array in PHP are Heterogenous.

/**
 *In php there are 3 types of array --->
 *Indexed arrays - Arrays with a numeric index
 *Associative arrays - Arrays with named keys
 *Multidimensional arrays - Arrays containing one or more arrays
*/

//Array declaration. array() is used to create an array in PHP and count() is used to find the size of an array.

//1. Indexed Array
$arr1 = array("Hello","1");
$size = count($arr1);
$i = 0;
for($i = 0 ; $i<$size ; $i++)
{
    echo "element".$arr1[$i]; //check how to insert line break;
}


//2. Associative Array
$arr2 = array("Nehal"=>"67","Shreyanshi"=>"51");
$arr2["Shashank"]="52";  
$size2 = count($arr2);
foreach($arr2 as $key=>$value)
{
    echo "key:".$key."Value:".$value ;
}

//3. Multi-Dimensional Array


// Array to String Conversion -> Using implode();

$arr3 = array(1,"Shyam",2,"Mohan",3,"Gopal");
$str_result = implode(" ",$arr3);
echo $str_result;
?>