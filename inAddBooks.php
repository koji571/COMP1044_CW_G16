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
$txtcat = $_POST['txtcat'];
$txtAuthor = $_POST['txtAuthor'];
$txtBp = $_POST['txtBp'];
$txtPub = $_POST['txtPub'];
$txtIsbn = $_POST['txtIsbn'];
$txtCpr = $_POST['txtCpr'];
$txtDate = $_POST['txtDate'];
$txtStat = $_POST['status'];

// database insert SQL code
$sql = "INSERT INTO book (`book_id`, `book_title`, `category_id`, `author`, `book_copies`,`book_pub`, `publisher_name`, `isbn`, `copyright`, `date_added`, `status`) VALUES ('0', '$txtBook', '$txtcat' , '$txtAuthor', '0', '$txtBp', '$txtPub', '$txtIsbn', '$txtCpr', '$txtDate', '$txtStat')";

// insert in database 

if(mysqli_query($conn, $sql))
{
	header("refresh:3;Library.php");
	echo "Book Details Inserted! Redirecting to Home Page in 3 seconds...";
}
else
{
	echo "Failed to insert books" . mysqli_error($conn);
	
}
?>
