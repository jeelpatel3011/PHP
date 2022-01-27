<?php

$a = $_GET['num1'];
$b = $_GET['num2'];
$c = $_GET['num3'];

if ($a > $b && $a > $c) {
    echo "<strong style='color:blue;'><q>$a</q></strong> is maximum which is greater than <strong>$b</strong> and <strong>$c</strong>";
} else if ($b >= $c) {
    echo "<strong>$b</strong> is maximum which is greater than <strong>$a</strong> and <strong>$c</strong>";
} else {
    echo "<strong>$c</strong> is maximum which is greater than <strong>$a</strong> and <strong>$b</strong>";
}
?>s