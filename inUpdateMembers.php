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

$txtID = $_POST['txtID'];
$txtfname = $_POST['txtfname'];
$txtlname = $_POST['txtlname'];
$Gender = $_POST['Gender'];
$txtAddress = $_POST['txtAddress'];
$txtContact = $_POST['txtContact'];
$txtYear = $_POST['txtYear'];
$Type = $_POST['Type'];
$txtStat = $_POST['txtStat'];

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
$sql = "UPDATE member SET `firstname`='$txtfname' , `lastname`='$txtlname' , `gender`='$Gender' , `address`='$txtAddress', `contact`='$txtContact' , `type`='$txtType' , `year_level`='$txtYear' , `Status`='$txtStat' WHERE `member_id`='$txtID'";

if ($conn->query($sql)==TRUE && $conn->affected_rows>0){
    echo "Member details updated!";
    echo "<a href='Library.php'><button>Return to Home Page</button></a>";
    echo "<a href='UpdateMembers.php'><button>Update another member's details</button></a>";
    echo "</html>";
} else {
    echo "Member does not exist in DataBase! No records deleted! Please ensure you have entered correct member ID!";
    echo "<html>";
    echo "<br>";
    echo "<a href='Library.php'><button>Return to Home Page</button></a>";
    echo "<a href='DeleteBooks.php'><button>Update another member's details</button></a>";
    echo "</html>";
}


?>