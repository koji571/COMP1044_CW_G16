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
$sql = "DELETE FROM book WHERE book_title='$txtBook'";

//To check if record exists or not
if ($conn->query($sql)==TRUE && $conn->affected_rows>0){
    echo "Book Deleted!";
    echo "<a href='Library.php'><button>Return to Home Page</button></a>";
    echo "<a href='DeleteMembers.php'><button>Delete another book</button></a>";
    echo "</html>";
} else {
    echo "Book does not exist in DataBase! No records deleted! Please ensure you have entered exact book title!";
    echo "<html>";
    echo "<br>";
    echo "<a href='Library.php'><button>Return to Home Page</button></a>";
    echo "<a href='DeleteBooks.php'><button>Delete another book</button></a>";
    echo "</html>";
}


?>
