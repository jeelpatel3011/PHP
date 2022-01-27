<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Template</title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
include './folder/menu.php';
include './folder/logo.php';

?>

<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
		<div><img src="images/pics01.jpg" width="920" height="300" alt="" /></div>
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Contact Us </a></h2>
				
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<form method="post" action="process.php">
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
			
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<?php
                include './folder/sidebar.php';
                ?>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
<?php
include './folder/footer.php';
?>
<!-- end #footer -->
</body>
</html>
