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
				<h2 class="title"><a href="#">Home </a></h2>
				
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<h3>Welcome to homepage of Akash Technolabs.</h3>
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
