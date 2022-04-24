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

$sql = "SELECT * FROM `member`LEFT JOIN `type` ON member.type = type.id WHERE `firstname`='$txtSearch' AND `lastname`='$txtSearch2'" ;
$result = $conn->query($sql);

if ($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "Member id: " . $row["member_id"] ."<br>" . "   First name: " . $row["firstname"] ."<br>" . "   Last name: " . $row["lastname"]  ."<br>" . "   Gender: " . $row["gender"] ."<br>" . "   Address: " . $row["address"] ."<br>" . "   Contact: " . $row["contact"] ."<br>" . "   Type: " . $row["borrowertype"] ."<br>" . "   Year Level: " . $row["year_level"] ."<br>" . "   Status: " . $row["Status"] ."<br>" ;
        echo "<a href='Library.php'><button>Return to Home Page</button></a>";
        echo "<a href='SearchBooks.php'><button>Search for another member</button></a>";
        echo "</html>";

    }
} else {
    echo "Member does not exist in Database! Please ensure you have entered exact name of member!";
    echo "<html>";
    echo "<br>";
    echo "<a href='Library.php'><button>Return to Home Page</button></a>";
    echo "<a href='SearchMembers.php'><button>Search for another member</button></a>";
    echo "</html>";
}
?>
