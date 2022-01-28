<?php

if(isset($_POST['btnsubmit'])){
    //echo "<pre>";
    //print_r($_FILES)
    $file_name = $_FILES['file123']['name']; // File Name
    $file_path = $_FILES['file123']['tmp_name']; // File Source
    
    $q = move_uploaded_file($file_path,"uploads/". $file_name);
    if($q){
        echo "File Uploaded";
    }
}

?>

<html>
    <body>
        <form method="post" enctype="multipart/form-data">
            File: <input type="file" name="file123"/>
            <input name="btnsubmit" type="submit"/>
            </form>
        </body>
</html>