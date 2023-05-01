<?php 
require_once '../model/bookmodel.php';
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
            <a href="addbook.php">Add</a> <br>
            
            <a href="display.php">Display</a> <br>
     
          
        </ul>
    </table>
    </td>
    <td>
    <fieldset>
    <legend>DISPLAY</legend>
    <table border="1">
                                <tr> 
                               
                                    <th>Name</th>
                                    <th>EDIT</th>
                                    <th>Delete</th>
                                    </tr>
<?php



?>

    </fieldset>
    </td>
</tr>

    </table>
</body>
</html>