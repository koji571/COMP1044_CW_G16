<?php
// database connection code
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "LibraryDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$conn =new mysqli($servername, $username,$password,$dbname);

$txtSearch = $_POST["txtSearch"];
$txtSearch2 = $_POST["txtSearch2"];

$sql = "DELETE FROM `member` WHERE `firstname`='$txtSearch' AND `lastname`='$txtSearch2'" ;

//To check if record exists or not
if ($conn->query($sql)==TRUE && $conn->affected_rows>0){
    header("refresh:3;Library.php");
    echo "Member Deleted! Redirecting to Home Page in 3 seconds...";
} else {
    header("refresh:3;Library.php");
    echo "Member does not exist in DataBase! No records deleted! Redirecting to Home Page in 3 seconds...";
}


?>