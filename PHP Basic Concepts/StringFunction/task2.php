<?php
    
if(isset($_POST['submit'])){
    $string = $_POST['string'];
    echo "1. Md5 Value: ". md5($string);
    echo "<br>2. Sha1 Value: ". sha1($string);
}
?>


<html>
    <body>
        <form method="post">
        String: <input type="text" placeholder="Enter string" name="string">
        <input type="submit" name="submit"></form>
        </body>
</html>

