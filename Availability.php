<!DOCTYPE html>
<html lang="en">
<head>
  <title>Buy Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <img src="logo5.jpg" alt="Logo" style="width:180px;height:50px;">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
	  <li>
		<div class="dropdown">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:transparent; color:black;">
				Services
			</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="Buy2.html">Buy</a>
					<a class="dropdown-item" href="Sell1.html">Sell</a>
					<a class="dropdown-item" href="Petcare.html">Hostile</a>
				</div>
		</div>
      <li class="nav-item">
        <a class="nav-link" href="AboutUs.html">About Us</a>
      </li>
    </ul>
  </div>
</nav>

<?php
    $mysqli = new mysqli('localhost','root','','Petshop') or die(mysqli_error($mysqli));
    $ids = $_GET['id'];
    $query = "SELECT Sid, Petname, Breed, Petage, Price, Address, Contactno from Sellers where Petcategory ='" . $ids . "'";
    $result = $mysqli->query($query) or die($mysqli->error);
    ?>

 <div class="table-responsive" style="margin-top: 15%; overflow-x:auto; margin-left:10%; margin-right:10%; padding: 20px; background-color:whitesmoke; width:auto;">
 <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Pet's Name</th>
      <th scope="col">Breed</th>
      <th scope="col">Age</th>
      <th scope="col">Price</th>
      <th scope="col">Address</th>
      <th scope="col">Description</th>
      <th scope="col">Owner's Contact</th>
    </tr>
  </thead>
<?php
    while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row["Sid"]; ?></td>
            <td><?php echo $row["Petname"]; ?></td>
            <td><?php echo $row["Breed"]; ?></td>
            <td><?php echo $row["Petage"]; ?></td>
            <td><?php echo $row["Price"]; ?></td>
            <td><?php echo $row["Address"]; ?></td> 
            <td id='demo'><button type="button" onclick=loadDoc(<?php echo $row["Sid"]?>)>View Description</button>
            <script>
              function loadDoc(petId) {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo").innerHTML =
                    this.responseText;
                  }
                };
                xhttp.open("GET", "getdescription.php?q=" + petId, true);
                xhttp.send();
              }
            </script>
            </td>
            <td><?php echo $row["Contactno"]; ?></td>
        </tr>
<?php endwhile; ?>
</table>
</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
