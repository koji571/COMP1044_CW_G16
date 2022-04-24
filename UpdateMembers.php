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
                <li><a href="BorrowingDetails.php">Borrowing Details</a></li>
                <li><a href="DeleteBooks.php">DeleteBooks</a></li>
                <li><a href="DeleteMembers.php">DeleteMembers</a></li>
                <li><a href="Library.php">Home</a></li>   
            </ul>
        </nav>
&nbsp;
</section>
&nbsp;
<div class="space_lg">&nbsp;</div>
<div class="container">
<div class="py-5 text-center">
        <h2><i>Update Member Details</i></h2>
        <p class="lead">Please fill in ALL follwing Info of the Member you want to update</p>
      </div>
<fieldset>
  
  <form name="frmContact" class="needs-validation " method="post" action="inUpdateMembers.php">
    <p>
      <label for="member_id">Member ID</label>
      <input type="number" class="form-control"  name="txtID" id="txtID"  placeholder="Member ID" value="" required>
    </p>
    <p>
      <label for="First Name">First Name</label>
      <input type="text" class="form-control" name="txtfname" id="txtfname" placeholder="First Name" value="" required>
    </p>
    <p>
      <label for="Last Name">Last Name</label>
      <input type="text"  class="form-control"  name="txtlname" id="txtfname" placeholder="Last Name" value="" required>
    </p>
    <p>
      <label for="Gender">Member Gender:</label>
		<select name="Gender" id="Gender">
			<option value="Male">Male</option>
			<option value="Female">Female</option>
		</select>
    </p>
    <p>
      <label for="Address">Address</label>
      <input type="text" class="form-control"  name="txtAddress" id="txtAddress"  placeholder="Address" value="" required>
    </p>
    <p>
      <label for="Type">Member Type:</label>
		<select name="Type" id="Type">
			<option value="Teacher">Teacher</option>
			<option value="Employee">Employee</option>
      <option value="Non-Teaching">Non-Teaching</option>
      <option value="Student">Student</option>
      <option value="Construction">Construction</option>
		</select>
    </p>
    <p>
      <label for="txtYear">Year level:</label>
		<select name="txtYear" id="txtYear">
			<option value="First Year">First Year</option>
			<option value="Second Year">Second Year</option>
      <option value="Third Year">Third Year</option>
      <option value="Fourth Year">Fourth Year</option>
      <option value="Faculty">Faculty</option>
		</select>
    </p>
    <p>
    <p>
      <label for="txtStat">Status:</label>
		<select name="txtStat" id="txtStat">
			<option value="Active">Active</option>
			<option value="Banned">Banned</option>
        </select>
	<p>
      <label for="Contact">Contact</label>
      <input type="number" class="form-control"  name="txtContact" id="txtContact"  placeholder="Contact Number" value="" required>
    <p>&nbsp;</p>
    <p>
      <input type="submit" name="Submit" id="Submit" value="Click To Update Member Details"  class="btn btn-primary btn-lg btn-block">
    </p>
	
  </form>
</fieldset>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
