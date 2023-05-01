<html>
<head>
    <title>Add Books</title>
    <style>
        fieldset {
            border: 2px solid black;
            padding: 20px;
            width: 50%;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 50%;
            padding: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }
        input[type="Submit Review"]:hover {
            background-color: #45a049;
        }
    </style>
</head> 
<body>
    <table>

<tr>
    <td>
    <table>
        
            <a href="addproduct.php">Add</a> <br>
           
            <a href="display.php">Display</a> <br>
            
            
        
    </table>
    </td>
    <td>
    <fieldset>
    <legend>ADD BOOKS</legend>
    <table>
    
       <form action="../controllers/addhandler.php" method="POST">
        
      
        <tr>
            <td>Name:</td>
        </tr>
        <tr>
            <td><input type="text" name="name" value=""></td>
        </tr>
        <tr>
            <td>Author name:</td>
        </tr>
        <tr>
            <td><input type="text" name="name" value=""></td>
        </tr>
        <tr>
            <td>Publication name:</td>
        </tr>
        <tr>
            <td><input type="text" name="name" value=""></td>
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