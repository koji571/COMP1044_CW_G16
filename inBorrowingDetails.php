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

$txtID=$_POST['txtID'];
$txtStat=$_POST['BorrowStat'];
$txtDate=$_POST['txtDate'];

//Check if date is empty
if (empty($txtDate)==1){
    $sql = "UPDATE borrowdetails SET `borrow_status`='$txtStat' , `date_return`=NULL WHERE `borrow_details_id`='$txtID'";
} else {
    $sql = "UPDATE borrowdetails SET `borrow_status`='$txtStat' , `date_return`='$txtDate' WHERE `borrow_details_id`='$txtID'";
}

if ($conn->query($sql)==TRUE && $conn->affected_rows>0){
    echo "Borrow details updated!";
    echo "<a href='Library.php'><button>Return to Home Page</button></a>";
    echo "<a href='BorrowingDetails.php'><button>Update another borrow detail</button></a>";
    echo "</html>";
} else {
    echo "Borrow Detail does not exist in DataBase! No records updated! Please ensure you have entered correct Borrow Details ID!";
    echo "<html>";
    echo "<br>";
    echo "<a href='Library.php'><button>Return to Home Page</button></a>";
    echo "<a href='BorrowingDetails.php'><button>Update another Borrow detail</button></a>";
    echo "</html>";
}

?>