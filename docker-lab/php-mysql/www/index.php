<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>GFG- Store Data</title>
</head>
  
<body>
    <center>
        <h1>Storing Form data in Database</h1>
        <form action="mysql-connect.php" method="post"> 
            <p>
                <label for="firstName">Item Name:</label>
                <input type="text" name="first_name" id="firstName">
            </p>
            <p>
                <label for="lastName">Item Desc:</label>
                <input type="text" name="last_name" id="lastName">
            </p>
            <p>
                <label for="Gender">Item OnHold:</label>
                <input type="text" name="gender" id="Gender">
            </p>
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
  
</html>