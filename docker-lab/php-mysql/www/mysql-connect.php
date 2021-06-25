
<h4>Attempting MySQL connection from php...</h4>
<?php
if(!empty($_ENV['MYSQL_HOST']))
   $host = $_ENV['MYSQL_HOST'];
else
   $host = 'moe-mysql-app';

if(!empty($_ENV['MYSQL_USER']))
   $user = $_ENV['MYSQL_USER'];
else
   $user = 'moeuser';

if(!empty($_ENV['MYSQL_PASSWORD']))
   $pass = $_ENV['MYSQL_PASSWORD'];
else
   $pass = 'moepass';

if(!empty($_ENV['MYSQL_DB']))
   $db_name = $_ENV['MYSQL_DB'];
else
   $db_name = 'moe_db';




$conn = new mysqli($host, $user, $pass, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if(!empty($_POST)) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO MOE_ITEM_T  VALUES ('$first_name', '$last_name','$gender')";

    if ($conn->query($sql)) {
        printf("Record inserted successfully.<br />");
    
    } else {
        printf("Could not insert record into table: %s<br />", $conn->error);
    }
}
echo "<br><br>";

$res = $conn->query("Select ITEM_NAME, ITEM_DESC, ITEM_ONHAND from MOE_ITEM_T");

for ($row_no = 0; $row_no < $res->num_rows; $row_no++) {
    $res->data_seek($row_no);
    $row = $res->fetch_assoc();
    echo " Item Name = " . $row['ITEM_NAME'] . " Item Description = " . $row['ITEM_DESC'] . " Item Onhand = " . $row['ITEM_ONHAND'];
    echo "<br>";
}

$res->close();
$conn->close();
?>