<?php
    
if(isset($_POST['submit'])){
    $string1 = $_POST['string1'];
    $string2 = $_POST['string2'];
    
    similar_text($string1, $string2,$per);
    echo "Similarity in %: $per";
    
    
}
?>


<html>
    <body>
        <form method="post">
        String 1: <input type="text" placeholder="Enter string" name="string1">
        String 2: <input type="text" placeholder="Enter string" name="string2">
        <input type="submit" name="submit"></form>
        </body>
</html>

