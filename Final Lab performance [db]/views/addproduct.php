<html>
<head>
    <title>Add Products</title>
</head> 
<body>
    <table>

<tr>
    <td>
    <table>
        
            <a href="addproduct.php">Add</a> <br>
           
            <a href="display.php">Display</a> <br>
            
            <a href="search.php">Search</a>  <br>
        
    </table>
    </td>
    <td>
    <fieldset>
    <legend>ADD PRODUCT</legend>
    <table>
    
       <form action="../controllers/addhandler.php" method="POST">
        
      
        <tr>
            <td>Name:</td>
        </tr>
        <tr>
            <td><input type="text" name="name" value=""></td>
        </tr>
        <tr>
            <td>Buying Price:</td>
        </tr>
        <tr>
            <td><input type="number" name="buyingprice" value=""></td>
        </tr>
        <tr>
            <td>selling Price:</td>
        </tr>
        <tr>
            <td><input type="number" name="sellingprice" value=""></td>
        </tr>
        <tr>
            <td><hr></td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="submit">
            </td>
        </tr>
        </form>
    </table>
    </fieldset>
    </td>
</tr>

    </table>
</body>
</html>