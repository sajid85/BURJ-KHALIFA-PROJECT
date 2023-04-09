<?php 
require_once '../models/productmodel.php';
session_start();

?>
<html>
<head>
    <title>Display</title>
</head> 
<body>
    <table>

<tr>
    <td>
    <table>
        <ul>
            <a href="addproduct.php">Add</a> <br>
            
            <a href="display.php">Display</a> <br>
     
            <a href="search.php">Search</a> <br>
        </ul>
    </table>
    </td>
    <td>
    <fieldset>
    <legend>DISPLAY</legend>
    <table border="1">
                                <tr> 
                               
                                    <th>Name</th>
                                    <th>Profit</th>
                                    <th>EDIT</th>
                                    <th>Delete</th>
                                    </tr>
<?php

displayproduct();

?>

    </fieldset>
    </td>
</tr>

    </table>
</body>
</html>