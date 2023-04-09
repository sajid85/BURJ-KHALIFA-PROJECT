<?php 
require_once '../models/productmodel.php';
session_start();

?>
<html>
<head>
    <title>Search</title>
</head> 
<body>
    <table>

<tr>
    <td>
    <table>
        
            <a><a href="addproduct.php">Add</a> <br>
            
            <a href="display.php">Display</a> <br>
            <a href="editproduct.php">Edit</a> <br>
            <a href="search.php">Search</a> <br>
        
    </table>
    </td>
    <td>
    <fieldset>
    <legend>search</legend>
    <form action="search.php" method="POST">
    <input type="text" name="searchproduct" value="">
    <input type="submit" name="submit" value="search by name">
    </form>
    <table border="1">
                                    <tr> 
                                       
                                        <th>Name</th>
                                        <th>Profit</th>
                                        <th>EDIT</th>

                                        <th>Delete</th>

                                    </tr>
<?php
if(isset($_REQUEST['submit'])){
$search=$_REQUEST['searchproduct'];
search($search);
}

?>

    </fieldset>
    </td>
</tr>

    </table>
</body>
</html>