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
                <li><a href="SearchBooks.php">SearchBooks</a></li>
                <li><a href="members.php">AddMembers</a></li>
                <li><a href="SearchMembers.php">SearchMembers</a></li>
                <li><a href="BorrowingDetail.php">Borrowing Details</a></li>
                <li><a href="Library.php">Home</a></li>
                <li><a href="DeleteMembers.php">DeleteMembers</a></li>
                <li><a href="UpdateMembers.php">UpdateMembers</a></li>
            </ul>
        </nav>
	&nbsp;	
	</section>

    &nbsp;
<div class="space_lg">&nbsp;</div>
<div class="container">
<div class="py-5 text-center">
        <h2><i>Deleting Books To DataBase</i></h2>
        <p class="lead">Please fill in following details of the Book you want to delete to DataBase</p>
      </div>
<fieldset>
  
  <form name="frmContact" class="needs-validation " method="post" action="inDeleteBooks.php">
    
    <p>
      <label for="Author Name">Book Name</label>
      <input type="text"  class="form-control"  name="txtBook" id="txtAuthor" placeholder="Name" value="" required>
    </p>
    
    <p>&nbsp;</p>
    <p>
      <input type="submit" name="Submit" id="Submit" value="Click To Delete Book In DataBase"  class="btn btn-primary btn-lg btn-block">
    </p>
  </form>
</fieldset>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
</body>

</html>