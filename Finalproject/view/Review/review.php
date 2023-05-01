<html>
    <head>
        <title>Review & Rating</title>
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
        <fieldset>
            <legend><b>Review & Ratings</b></legend>

                <form method="POST">
                    <label for="book">Book Name:</label>
                    <input type="text" name="book"><br><br>

                    <label for="writterName">Writter Name:</label>
                    <input type="text" name="writterName"><br><br>
                    
                    <label for="rating">Rating:</label>
                    <select name="rating">
                        <option value="1">1 Star</option>
                        <option value="2">2 Stars</option>
                        <option value="3">3 Stars</option>
                        <option value="4">4 Stars</option>
                        <option value="5">5 Stars</option>
                    </select><br><br>
                    
                    <label for="review">Review:</label>
                    <textarea name="review"></textarea><br><br>
                    <input type="button" name="click" value="re_Check" onclick="ajax()">
                    <button type="submit" name="submit">Submit Review</button>
                </form>

                
        </fieldset>
    </body>
</html>
<script>  
function validateform(){  
var title = document.ReviewForm.title.value;  
var description=document.ReviewForm.description.value;  
  
if (book==null || book==""){  
  alert("book can't be blank");  
  return false;  
}else if(writterName==null || writterName==""){  
  alert("writterName can't be blank.");  
  return false;  
  }  
} 


        
</script>  