
<?php

$name = $_POST["txt1"];
$email = $_POST["email"];
$gender = $_POST["txt2"];
$language = $_POST["language"];
$location = $_POST["location"];
$password = $_POST["password"];
$feedback = $_POST["txtarea"];

echo "<table border='1' color:'black'><tr><td>Name</td><td>$name</td></tr>"
        . "<tr><td>Email</td><td>$email</td></tr>"
        . "<tr><td>Gender</td><td>$gender</td></tr>"
        . "<tr><td>Languages</td><td>$language</td></tr>"
        . "<tr><td>Location</td><td>$location</td></tr>"
        . "<tr><td>Password</td><td>$password</td></tr>"
        . "<tr><td>Feedback</td><td>$feedback</td></tr></table>";

