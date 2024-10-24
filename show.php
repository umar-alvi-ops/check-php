
<!DOCTYPE html>
<html>
<head>
<style>
 th, td {
    border: 1px solid black;
}
table{
    display: flex;
    flex-direction: row;
    justify-content: center;
}
img{
    width: 400px;
}
</style>
</head>
<body>
<a href="./index.php">Home Page</a>
<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "imagetest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select  id,file, dic , price FROM image";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // echo "<table><tr><th>Name</th><th>Email</th></tr>";
    // output data of each row
    while($row = mysqli_fetch_array($result)) {
         echo"<div>
        <img src=".$row['file'].">
      <i> ".$row["dic"]." </i>
        <i> ".$row["price"]." </i>
        <i> ".$row["id"]." </i>

        </div>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
</body>
</html>