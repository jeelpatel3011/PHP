<?php

if(isset($_POST['submit'])){
    $string = $_POST['string'];
    echo "1. Total Character: ".strlen($string);
    echo "<br>2. In Uppercase: ". strtoupper($string);
    echo "<br>3. In Lowercase: ". strtolower($string);
    echo "<br>4. Uppercase first word: ". ucfirst($string);
    echo "<br>5. Uppercase all words: ". ucwords($string);
    echo "<br>6. Reverse String: ".strrev($string);
}

?>

<html>
    <body>
        <form method="post">
        String: <input type="text" placeholder="Enter string" name="string">
        <input type="submit" name="submit"></form>
        </body>
    </html>
