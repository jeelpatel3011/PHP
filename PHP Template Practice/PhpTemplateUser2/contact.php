<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Akash Technolabs</title>
  <meta name="description" content="Description of your site goes here">
  <meta name="keywords" content="keyword1, keyword2, keyword3">
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
include './elements/logo.php';
include './elements/menu.php';
?>
</div>
<div class="content">
<div class="content-left">
<div class="row1">
<h1 class="title">Contact<span> Us</span></h1>

 <form method="post" >
                    <table border='0'>
                        <tr>
                            <td>Name</td>
                            <td><input title="Enter Your Name" type="text" name="txt1" placeholder="Enter Your Name" required></td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td><input type="email" name="email" placeholder="Enter Email" required></td>
                        </tr>    

                        <tr>
                            <td>Gender</td>
                            <td>
                                <input type="radio" name="txt2" value="male" required>Male
                                <input type="radio" name="txt2" value="male">Female
                            </td>
                        </tr>


                        <tr><td>Language</td>
                            <td><input type="checkbox" name="language" value="HTML" title="Hypertext Markup Language">HTML
                                <input type="checkbox" name="language" value="CSS" title="Cascading Style Sheet">CSS
                                <input type="checkbox" name="language" value="PHP">PHP</td>    
                        </tr>

                        <tr>
                            <td>Location</td>
                            <td>
                                <select name="location">
                                    <option selected disabled>Choose Location</option>
                                    <option value="Ahmedabad">Ahmedabad</option>
                                    <option value="Gandhinagar">Gandhinagar</option>
                                    <option value="Surat">Surat</option>
                                </select>
                            </td>    
                        </tr>

                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password" required placeholder="Create a new password"></td>
                        </tr>

                        <tr>
                            <td>Feedback</td>
                            <td><textarea name="txtarea" cols="50" rows="4" placeholder="Write feedback here..."></textarea> </td>
                        </tr>   

                        <tr>
                            <td><input type="submit" value="Submit">
                            <input type="reset" name="reset" value="Reset"></td>
                        </tr>            
                     </table> 
                    </form>

</div>

</div>
<?php
include './elements/sidebar.php';
?>
</div>
<?php
include './elements/footer.php';
?>
</div>
</div>
</div>

</body>
</html>