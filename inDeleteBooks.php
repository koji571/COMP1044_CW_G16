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

$txtBook = $_POST['txtBook'];

// database insert SQL code
$sql = "DELETE FROM book (WHERE `book_title`) VALUES ('$txtBook')";

// delte in database 

if(mysqli_query($conn, $sql))
{
	header("refresh:3;Library.php");
	echo "Book Details Deleted! Redirecting to Home Page in 3 seconds...";
}
else
{
	echo "Failed to delte book" . mysqli_error($conn);
	
}
?>