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
    echo "Member Deleted!";
    echo "<a href='Library.php'><button>Return to Home Page</button></a>";
    echo "<a href='DeleteMembers.php'><button>Delete another member</button></a>";
    echo "</html>";
} else {
    echo "Member does not exist in DataBase! No records deleted! Please ensure you have entered exact name of member!";
    echo "<html>";
    echo "<br>";
    echo "<a href='Library.php'><button>Return to Home Page</button></a>";
    echo "<a href='DeleteMembers.php'><button>Delete another member</button></a>";
    echo "</html>";
}


?>
