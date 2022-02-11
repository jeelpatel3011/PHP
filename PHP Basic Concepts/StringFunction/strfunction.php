<?php

//nl2br()
echo nl2br("My name is\n Jeel Patel");
echo "<br><br>";

//string length
echo strlen("Jeel Patel");
echo "<br><br>";

//string position
echo strpos("Jeel Patel", "Patel");
echo "<br><br>";

//convert to lowercase
echo strtolower("Jeel Patel");
echo "<br><br>";

//convert to uppercase
echo strtoupper("Jeel Patel");
echo "<br><br>";

//convert first character of string to uppercase
echo ucfirst("jeel patel");
echo "<br><br>";

//convert first character of words to uppercase
echo ucwords("jeel patel");
echo "<br><br>";

//searches for the first occurrence of a string inside another string
echo strstr("Jeel Patel","Patel");
echo "<br><br>";

//replaces some characters with some other characters in string
echo str_replace("Patel", "Technolabs", "Jeel Patel");
echo "<br><br>";

//remove whiteapace
$a = " Jeel    Patel     ";
echo "With trim:". trim($a);
echo "<br><br>";

//reverse string
echo strrev($a);
echo "<br><br>";

//string word count
echo str_word_count("This is Jeel Patel");
print_r(str_word_count("This is Jeel Patel",2));
echo "<br><br>";

//split string
$b="jeel patel";
print_r(str_split($b,2));
echo "<br><br>";

//string shuffle
echo str_shuffle($b);
echo "<br><br>";

//repeat string 
echo str_repeat("*", 5);
echo str_repeat($b, 3);
echo str_repeat("*", 5);
echo "<br><br>";

//compare two strings
echo strcmp($b, $a);
echo "<br><br>";

//utilized to wraps a sentence into new lines using a string break character
$str = "<br/>Welcome to PHP Akash TechnoLabs";
$newtext = wordwrap($str,8,"<br>");
echo $newtext;
echo "<br><br>";

//function is used to get first occurrence of a string inside another string
$str1 = "Jeel Patel";
echo strchr($str1, "e");
echo "<br><br>";

//ASCII value of first character of string
echo ord($str1);
echo "<br><br>";

//used to determine the numeric position of the first occurrence of a string inside another string
echo stripos($str1, "el");
echo "<br><br>";

//encryption method
echo sha1($str1);
echo "<br><br>";

//similar_text()
similar_text("Patel Jeel", "Patel Iti", $per);
echo "<br>Same value in %$per";
echo "<br><br>";
echo "<br><br>";
echo "<br><br>";
echo "<br><br>";
?>