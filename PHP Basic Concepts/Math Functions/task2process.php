<?php

$no1 = $_POST["txt1"];
$no2 = $_POST["txt2"];
$no3 = $_POST["txt3"];
$no4 = $_POST["txt4"];
$no5 = $_POST["txt5"];
$no6 = $_POST["txt6"];
$no7 = $_POST["txt7"];
$no8 = $_POST["txt8"];
$no9 = $_POST["txt9"];
$no10 = $_POST["txt10"];

$a = array($no1,$no2,$no3,$no4,$no5,$no6,$no7,$no8,$no9,$no10);
echo "Min no:".min($a);
echo "<br>Max no:".max($a);