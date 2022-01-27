<?php

$filename = "jeel.txt";

//open
//write
/*$handle = fopen($filename, 'w');
fwrite($handle, "This is my File");
fclose($handle);
*/
//read
$handle2 = fopen($filename, 'r');
$data = fread($handle2, filesize($filename));
echo $data;
fclose($handle2);

//append
$handle3 = fopen($filename, 'a');
fwrite($handle3, "<br>This is my new File");
fclose($handle3);