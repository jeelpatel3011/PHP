<?php

$a = array(0=>5,1=>"Fruit",2=>"Red",3=>"Yellow");
$b = array(4=>5,5=>"Fruit",6=>"Red");

echo "Differnce:<br>";
$differnce = array_diff($a,$b);
print_r($differnce);
echo "<br><br>";

echo "Intersect:<br>";
print_r(array_intersect($a,$b));
echo "<br><br>";

echo "array_value():<br>";
$arrvalue = array_values($b);
print_r($arrvalue);
echo "<br><br>";

echo "Push:<br>";
array_push($b,"Yellow","Orange");
print_r($b);
echo "<br><br>";

echo "Pop:<br>";
array_pop($b);
print_r($b);
echo "<br>";
array_pop($b);
print_r($b);
echo "<br><br>";