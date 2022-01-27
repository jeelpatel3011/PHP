<?php

$name = $_POST["txt1"];
$email = $_POST["email"];
$mobile = $_POST["txt2"];
$profession = $_POST["profession"];
$course = $_POST["course"];
$mode = $_POST["mode"];
$purpose = $_POST["txtarea"];

echo "<pre><br>Name: ".$name;
echo "<br>Email:".$email;
echo "<br>Mobile:".$mobile;
echo "<br>Profession:".$profession;
echo "<br>Course:".$course;
echo "<br>Mode:".$mode;
echo "<br>Purpose:".$purpose;