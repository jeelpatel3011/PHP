<?php

$name = $_POST["name"];
$marks1 = $_POST["maths"];
$marks2 = $_POST["physics"];
$marks3 = $_POST["chemistry"];

$total = $marks1 + $marks2 + $marks3;
$percentage = ($marks1 + $marks2 + $marks3) / 3;
$grade = 0;

echo "<table border='1' bgcolor='black'>";
echo "<tr bgcolor='lightgreen'>"
 . "<th>Name</th>"
 . "<th>Maths</th>"
 . "<th>Physics</th>"
 . "<th>Chemistry</th>"
 . "<th>Total Marks</th>"
 . "<th>Percentage</th>"
 . "<th>Grade</th></tr>";

if ($marks1 > 35 && $marks2 > 35 && $marks3 > 35) {
    if ($percentage > 90 && $percentage <= 100) {
        $grade = "A";
    } else if ($percentage > 75 && $percentage <= 90) {
        $grade = "B";
    } else if ($percentage > 60 && $percentage <= 75) {
        $grade = "C";
    } else if ($percentage > 50 && $percentage <= 60) {
        $grade = "D";
    } else {
        $grade = "E";
    }
} else {
    $grade = "Fail";
}


echo "<tr bgcolor='lightblue'>"
 . "<td>$name</td>"
 . "<td>$marks1</td>"
 . "<td>$marks2</td>"
 . "<td>$marks3</td>"
 . "<td>$total</td>"
 . "<td>$percentage</td>"
 . "<td>$grade</td></tr>";
?>

