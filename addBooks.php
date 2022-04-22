<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="BasicallyCSS.css">
<title>Contact Form - PHP/MySQL Demo Code</title>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style>
.space_lg{
	width:100px;
}
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
            <h1 class="logo">The Libary System</h1>
            <ul>
              <li><a href="Library.php">Home</a></li>
              <li><a href="SearchBooks.html">SearchBooks</a></li>
              <li><a href="members.html">AddMembers</a></li>
              <li><a href="SearchMembers.html">SearchMembers</a></li>
              <li><a href="BorrowingDetails.html">Borrowing Details</a></li>
              <li><a href="DeleteBooks.html">DeleteBooks</a></li>
              <li><a href="DeleteMembers.html">DeleteMembers</a></li>
              <li><a href="UpdateMembers.html">UpdateMembers</a></li>
            </ul>
        </nav>
&nbsp;
</section>
&nbsp;
<div class="space_lg">&nbsp;</div>
<div class="container">
<div class="py-5 text-center">
        <h2><i>Adding Books To DataBase</i></h2>
        <p class="lead">Please fill in follwing details of the Book you want to add to DataBase</p>
      </div>
<fieldset>
  
  <form name="frmContact" class="needs-validation " method="post" action="inAddBooks.php">
    <p>
      <label for="Book Title">Book Title</label>
      <input type="text" class="form-control" name="txtBook" id="txtBook" placeholder="Name" value="" required>
    </p>
    <p>
      <label for="Author Name">Author Name</label>
      <input type="text"  class="form-control"  name="txtAuthor" id="txtAuthor" placeholder="Name" value="" required>
    </p>
    <p>
      <label for="Book_Pub">Book_Pub</label>
      <input type="text"  class="form-control" name="txtBp" id="txtBp" placeholder="Name" value="" required>
    </p>
    <p>
      <label for="Publisher">Publisher</label>
      <input type="text" class="form-control"  name="txtPub" id="txtPub"  placeholder="Name" value="" required>
    </p>
	<p>
      <label for="isbn">ISBN</label>
      <input type="number" class="form-control"  name="txtIsbn" id="txtIsbn"  placeholder="ISBN Number" value="" required>
    </p>
	<p>
      <label for="Copyright">Copyright</label>
      <input type="date" class="form-control"  name="txtCpr" id="txtCpr"  placeholder="Datetime" required>
    </p>
	<p>
      <label for="Date">Date of adding Book to DataBase</label>
      <input type="date" class="form-control"  name="txtDate" id="txtDate"  placeholder="Datetime" required>
    </p>
    <p>&nbsp;</p>
    <p>
      <input type="submit" name="Submit" id="Submit" value="Click To Add Book Into DataBase"  class="btn btn-primary btn-lg btn-block">
    </p>
  </form>
</fieldset>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>
