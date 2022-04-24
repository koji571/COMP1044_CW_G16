<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="BasicallyCSS.css">
    <title>Libary</title>
	<style>
	body {
		background-image: url('Library.jpg');
		background-color: rgba(255,255,255,0.6);
		background-blend-mode: lighten;
		}
</style>
</head>

<body>
    <section>
        
        <nav>
            <h1 class="logo">The Library System</h1>
            <ul>
                <li><a href="addBooks.php">AddBooks</a></li>
                <li><a href="Library.php">Home</a></li>
                <li><a href="members.php">AddMembers</a></li>
                <li><a href="SearchMembers.php">SearchMembers</a></li>
                <li><a href="BorrowingDetails.php">Borrowing Details</a></li>
                <li><a href="DeleteBooks.php">DeleteBooks</a></li>
                <li><a href="DeleteMembers.php">DeleteMembers</a></li>
                <li><a href="UpdateMembers.php">UpdateMembers</a></li>
            </ul>
        </nav>
		
	</section>
        
    <form action = "inSearchBooks.php" method="post">
        <br>
        <br>
        <br>
        <br>
        <br>
        <center> 

            <div class="container">
            <h2 class="lead"><i>Enter the exact title of the book to be searched : </i></h2>
            </div>
        
        <input type="text" name="txtSearch" id="txtSearch" size="128" placeholder= "Search Books" value="" required>
        <br></br>
        <p>
        <input type="submit" name="Submit" id="Submit" value="Click To Search Books in DataBase"  class="btn btn-primary btn-lg btn-block">
        </p>
        </center>
        <br>
        </form>
        
</body>


</html>
