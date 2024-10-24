<?php include 'database.php';

if(isset($_POST['submit'])){
$file=$_POST['file'];
$dic=$_POST['dic'];
$price=$_POST['price'];
$sql="insert into image(file,dic,price) values('$file', '$dic' , '$price')";
if(mysqli_query($conn, $sql)){
    ?>
    <a href="./index.php">Back To Home Page</a> <br>
    
    <?php
    echo "ok data save successfully";
   
}
else{
    echo "not";
}


}


?>