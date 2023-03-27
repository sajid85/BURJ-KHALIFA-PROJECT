<?php 
    session_start();
?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
    
        <table height="100" width="700">
            <tr>
                <td>
                <fieldset>
                        <legend><h2>Login</h2></legend>
                    
                <form method="POST" action="http://localhost/PRD%20management/login_check.php"> 
                              Username: <input type="text" name="username" value=""/> <br>
                              Password: <input type="password" name="password" value=""/> <br> 
                              <hr>
                              <input type="checkbox" name="rememberme" value="rememberme"/> Remember Me <br/>
                              <input type="submit" name="submit" value="Submit"/>

                            <a href="http://localhost/PRD%20management/registration.php">New user?</a>
                </form>
                </fieldset>
        </table>
    
    </body>
</html>