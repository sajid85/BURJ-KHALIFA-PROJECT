<?php 
    session_start();
?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
    <center>
        <table height="600" width="700">
            <tr>
                <td>
                <fieldset>
                        <legend><h2>Login</h2></legend>
                    
                <form method="POST" action="http://localhost/prd/loginCheck.php"> 
                              Username: <input type="text" name="username" value=""/> <br>
                              Password: <input type="password" name="password" value=""/> <br> 
                              <hr>
                              <input type="checkbox" name="rememberme" value="rememberme"/> Remember Me <br/>
                            <input type="submit" name="submit" value="Submit"/>

                            <a href="http://localhost/prd/registration.php">Registration</a>
                </form>
                </fieldset>
        </table>
    </center>
    </body>
</html>