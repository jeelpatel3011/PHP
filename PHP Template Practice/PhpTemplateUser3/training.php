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
                        <h2>Apply For Training</h2>
                        <form method="post" action="trainingprocess.php">
                            <table border='0'>
                                <tr>
                                    <td>Name</td>
                                    <td><input title="Enter Your Name" type="text" name="txt1" placeholder="Enter Your Name" required></td>
                                </tr>

                                <tr>
                                    <td>Email</td>
                                    <td><input type="email" name="email" placeholder="Enter Your Email ID" required></td>
                                </tr>    

                                <tr>
                                    <td>Mobile</td>
                                    <td>
                                        <input type="tel" name="txt2" value="" placeholder="Enter Your Mobile number" required>

                                    </td>
                                </tr>

                                <tr>
                                    <td>Profession</td>
                                    <td>
                                        <select name="profession">
                                            <option selected disabled>I am?</option>
                                            <option value="student">Student</option>
                                            <option value="faculty">Faculty</option>
                                            <option value="developer">Developer</option>
                                        </select>
                                    </td>    
                                </tr>

                                <tr>
                                    <td>Courses</td>
                                    <td>
                                        <select name="course">
                                            <option selected disabled>Choose Courses</option>
                                            <option value="android">Android</option>
                                            <option value="angular">Angular</option>
                                            <option value="flutter">Flutter</option>
                                            <option value="ios">IOS</option>
                                            <option value="laravel">Laravel</option>
                                            <option value="node">NodeJS</option>
                                            <option value="python">Python</option>
                                            <option value="react">ReactJs</option>
                                        </select>
                                    </td>    
                                </tr>

                                <tr>
                                    <td>Mode</td>
                                    <td>
                                        <select name="mode">
                                            <option selected disabled>Choose mode</option>
                                            <option value="online">Online</option>
                                            <option value="offline">Offline</option>

                                        </select>
                                    </td>    
                                </tr>

                                <tr>
                                    <td>Purpose</td>
                                    <td><textarea name="txtarea" cols="50" rows="4" placeholder="Write your purpose of training here..."></textarea> </td>
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