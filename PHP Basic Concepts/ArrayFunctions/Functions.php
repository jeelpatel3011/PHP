<?php

$a = array(
    "Banana" => "Yellow",
    "Mango" => "Green",
    "Apple" => "Red",
    5 => 50
    
);//Associative array

$arr = array(4,1,1,6,);//Numerical Array
echo "<pre>";
//count() : count number of elements in array
echo "1. No of elements: " .count($arr);

//array_count_values() : Count values in array
echo "<br><br>Count value:<br>";
$count = array_count_values($arr);
print_r($count);

//array_sum() : calculate sum of all values of an array
echo "<br/><br/>2. Sum of value: ".array_sum($arr);

//array_product() : multiply each value of an array
echo "</br><br/>3. Product of value:". array_product($arr);

//array_reverse() : reverse the elements of an array
echo "<br/><br/>4. Reverse of an array:<br>";
$reva = array_reverse($a);
print_r($reva);

//in_array() : Is a certain value exist in array
$temp = in_array('php', $arr  );
echo "<br/><br/>5. Is <q>php</q> exist in array? :".$temp;

//array_unique() : Remove all duplicate value from an array
echo "<br/><br/>6. Remove duplicate values...<br/>";
print_r(array_unique($arr));

//array_merge() : Merge multiple arrray
$Newarr = array_merge($a,$arr);
echo "<br/><br/>7. Merged Array:<br/>";
print_r($Newarr);

//array_search() : Search in an array for a specific value
$arrsrch = array_search('6', $arr);
echo "<br/><br/>8. Searched for <q>6</q> in an array (It shows index || Empty if value is not in an array):".$arrsrch;

//range() : 
$rng = range("A","J");
echo "<br/><br/>9. Range(A-J):<br>";
foreach ($rng as $key => $value) {
    echo "$value<br>";
}

//sort() : Sort an array
sort($a);
echo "<br/><br/>10.Sorted array:<br/>";
print_r($a);

//rsort() : Sort array in descending 
rsort($a);
echo "<br/><br/>11.Reverse Sorted array:<br/>";
print_r($a);

//asort() : Sort an array in ascending order according to the values
asort($arr);
echo "<br/><br/>12.a-sorted array(Index value remains same):<br/>";
print_r($arr);

//ksort() : Sort an array according to their key value
ksort($a);
echo "<br><br>13.Key sort:<br>";
print_r($a);

//krsort() : Sort an array in reverse according to key
krsort($a);
echo "<br><br>14.Reverse Key sort:<br>";
print_r($a);

//shuffle() : Shuffle elements of an array
shuffle($a);
echo "<br/><br/>15.Shuffle Array:<br>";
print_r($a);

//array_key_exists() : Check if a certain key exist in an array or not
echo "<br><br>16.<q>Apple</q>(key) is exist in an array or not?:"; 
echo array_key_exists('Apple', $a);

//array_change_key_case() : Change case of all keys in an array
echo "<br><br>17.Change case to upper of all keys in array:<br>";
$uppercase = array_change_key_case($a,CASE_UPPER);
print_r($uppercase);

//end() : Return last value of an array
echo "<br><br>18.Return last value of an array: ";
echo end($a);

//array_combine : Create an array by using one array for keys and one array for value
$combine = array_combine($arr, $a);
echo "<br><br>19.Combine two arrays(one array for key and one array for value || Only for 3 keys and values):<br> ";
echo print_r($combine);

//compact() :  Create an array from variables and its value
$name = 'jeel';
$age = '21';
$bio = compact("name","age");
echo "<br><br>20.Create an array from two variables and its values(compact): ";
print_r($bio);

//array_flip() : Flip all keys with their associated value
$fliparray = array_flip($bio);
echo "<br><br>21.Flip all keys with their value:<br>";
echo print_r($fliparray);


?>
