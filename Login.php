<?php
// database connection code
$servername = "35.240.136.151";
$username = "root";
$password = "root";
$dbname = "LibraryDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(!empty($_POST['save'])){
    $username=$_POST['usr'];
    $password=$_POST['pw'];
    $query="select * from users where username='$username' and password ='$password';
    $result=mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
    if($count>0)
        echo 'Login Successful';
    else
        echo 'Login Not Successful'
    }
?>