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

$sql = "SELECT * FROM book WHERE book_title = '$txtSearch'" ;
$result = $conn->query($sql);

if ($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "Book id: " . $row["book_id"] ."<br>" . "   Book Title: " . $row["book_title"] ."<br>" . "   Category id: " . $row["category_id"]  ."<br>" . "   Author: " . $row["author"] ."<br>" . "   Book Copies: " . $row["book_copies"] ."<br>" . "   Book Publisher: " . $row["book_pub"] ."<br>" . "   Publisher Name: " . $row["publisher_name"] ."<br>" . "   isbn: " . $row["isbn"] ."<br>" . "   Copyright: " . $row["copyright"] ."<br>" . "   Date Added: " . $row["date_added"] ."<br>" . "   Status: " . $row["status"]. "<br>" ;
        echo "<html>";
        echo "<a href='Library.php'><button>Return to Home Page</button></a>";
        echo "<a href='SearchBooks.php'><button>Search for another book</button></a>";
        echo "</html>";

    }
} else {
    echo "Book does not exist in Database! Please ensure you have entered exact book title!";
    echo "<html>";
    echo "<br>";
    echo "<a href='Library.php'><button>Return to Home Page</button></a>";
    echo "<a href='SearchBooks.php'><button>Search for another book</button></a>";
    echo "</html>";
}
?>
