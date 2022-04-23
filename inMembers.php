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

// get the post records

$txtfname = $_POST['txtfname'];
$txtlname = $_POST['txtlname'];
$Gender = $_POST['Gender'];
$txtAddress = $_POST['txtAddress'];
$txtContact = $_POST['txtContact'];
$txtYear = $_POST['txtYear'];
$Type = $_POST['Type'];

//Convert it to int to store in database
if ($Type==="Teacher"){
    $txtType=2;
} elseif ($Type==="Employee"){
    $txtType=20;
} elseif ($Type==="Non-Teaching"){
    $txtType=21;
} elseif ($Type==="Student"){
    $txtType=22;
} elseif ($Type==="Construction"){
    $txtType=32;
}

// database insert SQL code
$sql = "INSERT INTO member ( `firstname` , `lastname` , `gender` , `address` , `contact` , `type` , `year_level`)  VALUES ('$txtfname' , '$txtlname' , '$Gender' , '$txtAddress' , '$txtContact' , '$txtType' , '$txtYear')";

// insert in database 

if(mysqli_query($conn, $sql))
{
	header("refresh:3;Library.php");
	echo "New member added! Redirecting to Home Page in 3 seconds...";
}
else
{
	echo "Failed to add new member" . mysqli_error($conn);
	
}
?>