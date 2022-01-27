<html>
    <body>
        <form method="post" action="gradesProcess.php">
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" placeholder="Enter your name" pattern="[a-z A-Z]{1,}" maxlength="25" required></td>
                </tr>
                <tr>
                    <td>Maths</td>
                    <td><input type="number" style="width:177;" name="maths" min="0" max="100" placeholder="Enter maths marks" required></td>
                </tr>
                <tr>
                    <td>Physics</td>
                    <td><input type="number" style="width:177;" name="physics" min="0" max="100" placeholder="Enter physics marks" required></td>
                </tr>
                
                <tr>
                    <td>Chemistry</td>
                    <td><input type="number" style="width:177;" name="chemistry" min="0" max="100" placeholder="Enter chemistry marks" required></td>
                
                </tr>
                <tr>
                    <td><br><input type="submit" name="submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>