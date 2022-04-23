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
                <li><a href="addBooks.html">AddBooks</a></li>
                <li><a href="SearchBooks.html">SearchBooks</a></li>
                <li><a href="members.html">AddMembers</a></li>
                <li><a href="Library.html">Home</a></li>
                <li><a href="BorrowingDetails.html">Borrowing Details</a></li>
                <li><a href="DeleteBooks.html">DeleteBooks</a></li>
                <li><a href="DeleteMembers.html">DeleteMembers</a></li>
                <li><a href="UpdateMembers.html">UpdateMembers</a></li>
            </ul>
        </nav>
		
	</section>

    <form action = "members.php" method="get">
        <br>
        <br>
        <br>
        <br>
        <br>
        <center> 

            <div class="container">
            <h2 class="lead"><i>Enter the member name of the library to be searched : </i></h2>
            </div>
        
        <input type="text" name="search" size="128" placeholder= "Search Books" required>
        <br></br>
        <p>
        <input type="submit" name="Submit" id="Submit" value="Click To Search Members in DataBase"  class="btn btn-primary btn-lg btn-block">
        </p>
        </center>
        <br>
        </form>
        
</body>




</html>