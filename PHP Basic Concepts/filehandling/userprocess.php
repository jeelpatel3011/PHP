<?php

$filename = $_GET["filename"];
$content = $_GET["content"];


touch($filename);

file_put_contents($filename, $content);
echo "Created file name:<br> $filename<br><br> Content:<br> ".file_get_contents($filename);

