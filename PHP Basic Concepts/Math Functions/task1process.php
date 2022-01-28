<?php

$no = $_POST["txt1"];

echo "<pre>decimal:".$no;
echo "<br>binary:".decbin($no);
echo "<br>octal:".decoct($no);
echo "<br>Sin value:".sin($no);
echo "<br>Cos value:".cos($no);
echo "<br>Tan value:".tan($no);

if(fmod($no,4)==0)
{
    echo "<br>$no is leap year";
}
 else {
     echo "<br>$no is not a leap year";
}
