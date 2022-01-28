<?php

$a = "I love PHP language";
$explode = explode(" ",$a);
echo "<pre>";
print_r($explode);

$b = array("I","love","PHP","language");
$implode = implode(" ", $b);
echo $implode;
echo "<br><br>";

echo "Random Key: ";
$rand = array_rand($b);
echo $b[$rand];
echo "<br><br>";

echo "Multiple Keys at Random:<br>";
$random = array_rand($b,2);
foreach ($random as $key => $value) {
    echo "<br>$key ".$b[$value];
}
