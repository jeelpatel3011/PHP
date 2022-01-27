<?php

$year = $_GET['year'];

if ($year % 4 == 0 && $year % 400 == 0 || $year % 100 !== 0) {
    echo "<strong style='color:blue;'>$year</strong> is a leap year.";

} else {
    echo "<strong style='color:blue;'>$year</strong> is not a leap year.";
}