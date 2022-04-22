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


if(isset($_POST['txtBook']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','library');

// get the post records

$txtBook = $_POST['txtBook'];
$txtAuthor = $_POST['txtAuthor'];
$txtBp = $_POST['txtBp'];
$txtPub = $_POST['txtPub'];
$txtIsbn = $_POST['txtIsbn'];
$txtCpr = $_POST['txtCpr'];
$txtDate = $_POST['txtDate'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`book_id`, ``book_title`, `category_id`, `author`, `book_copies`,book_pub`, `publisher_name`, `isbn`, `copyright`, `date_added`, `status`) VALUES ('0', '$txtBook', '0', '$txtAuthor', '0', '$txtBp', '$txtPub', '$txtMessage', '$txtIsbn', '$txtCpr', '$txtDate', '0')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Book Details Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>
