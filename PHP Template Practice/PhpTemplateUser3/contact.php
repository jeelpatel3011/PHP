<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Akash Technolabs</title>
<meta name="description" content="A description of your website">
<meta name="keywords" content="keyword1, keyword2, keyword3">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="wrapper"> 
  
<?php
include './elements/logo.php';
include './elements/menu.php';
include './elements/sidebar.php';
?>  
  <div id="page_content">
    <div class="left_section">
      <div class="common_content">
        <h2>Contact Us</h2>
        <form method="post" >
                    <table>
                        <tr>
                            <td>Name</td>
                            <td><input title="Enter Your Name" type="text" name="txt1" placeholder="Enter Your Name" required></td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td><input type="email" name="email" placeholder="Enter Email" required></td>
                        </tr>    

                      

                        <tr>
                            <td>Message</td>
                            <td><textarea name="txtarea" cols="50" rows="4" placeholder="Write your message/query here..."></textarea> </td>
                        </tr>   

                        <tr>
                            <td><input type="submit" value="Submit">
                            <input type="reset" name="reset" value="Reset"></td>
                        </tr>            
                     </table> 
                    </form>

       </div>

    
    </div>
    
    
  <div class="clear"></div>
  
  <?php
  include './elements/footer.php';
  ?>
</div>
</div>

</body></html>