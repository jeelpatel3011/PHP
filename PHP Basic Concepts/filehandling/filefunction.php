<?php

$filename = "java.txt";

//File Create
touch($filename);

//Add content into File
file_put_contents($filename, "This is my java file data");

//Print Data
echo file_get_contents($filename);

//File Size
echo "<br>File Size:".filesize($filename);

//Check File
if(file_exists($filename)){
    echo "<br>File is present";
}
 else {
    echo "<br>File is not present";
}

//Delete file
//unlink($filename);