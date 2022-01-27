<?php

//Method 1
//Index Value
$a[0] = 10;
$a[1] = 20;
$a[2] = 30.87;
$a[3] = 'C';
$a[4] = 'PHP';

//Method 2
//Dynamic Array
$a[] = 10;
$a[] = 20;
$a[] = 30.87;
$a[] = 'C';
$a[] = 'PHP';

//Method 3
$a = array(10,20,30.35,'C','PHP');

//Print Array
echo "Value is ".$a[0];

//Print Whole Array Using Loop
for($i=0;$i<count($a);$i++)
{
    echo "<br/> ".$a[$i];
}

//Inbuilt Function to Debug Array
echo "<pre>";
print_r($a);
var_dump($a);
var_export($a);