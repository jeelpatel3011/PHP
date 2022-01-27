<?php
//Associative Array
//Method 1
//Key = Value
$a[0] = 10;
$a['c'] = "Computer";
$a[5] = 50.5;
$a['php'] = "Web Development";
$a[10.5] = 105;

//echo $a['php'];

//Method 2
//Always use this method to create an array
$a = array(
    0 => 10,
    'c' => "Computer",
    5 => 50.5,
    'php' => "Web Development",
    10.5 => "Float",
);

//Print
echo "PHP is useful for ".$a['php'];

//Foreach
foreach ($a as $value) {
    echo "<br/>Value is $value";
}

//Foreach Key and Value
foreach ($a as $key => $value) {
    echo "<br/>Key is $key and Value is $value";
}

//Inbuilt Function to Debug Array
echo "<pre>";
print_r($a);
var_dump($a);
var_export($a);
