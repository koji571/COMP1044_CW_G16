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
                <li><a href="addBooks.php">AddBooks</a></li>
                <li><a href="SearchBooks.php">SearchBooks</a></li>
                <li><a href="members.php">AddMembers</a></li>
                <li><a href="SearchMembers.php">SearchMembers</a></li>
                <li><a href="Library.php">Home</a></li>
                <li><a href="DeleteBooks.php">DeleteBooks</a></li>
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
        <h2><i>Update Borrowing Details</i></h2>
        <p class="lead">Please fill in the following details</p>
      </div>
<fieldset>
  
  <form name="frmContact" class="needs-validation " method="post" action="inBorrowingDetails.php">
    <p>
      <label for="borrow_details_id">Borrow Details ID:</label>
      <input type="number" class="form-control"  name="txtID" id="txtID"  placeholder="Borrow Details ID you would like to update" value="" required>
    </p>
    <p>
      <label for="BorrowStat">Borrow Status:</label>
		<select name="BorrowStat" id="BorrowStat">
			<option value="pending">pending</option>
			<option value="returned">returned</option>
		</select>
    </p>
    <p>
      <label for="Date">Date of Return (leave empty if not returned!)</label>
      <input type="datetime-local" class="form-control"  name="txtDate" id="txtDate"  placeholder="Datetime">
    </p>
    
    <p>&nbsp;</p>
    <p>
      <input type="submit" name="Submit" id="Submit" value="Click To Update Borrowing Details"  class="btn btn-primary btn-lg btn-block">
    </p>
	
  </form>
</fieldset>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
