<html>
<head>
  <title>Buy2</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
	<!-- Basic SEO -->
	<meta name="description" content="Creative website development with html5, css3, jQuery & bootstrap framework">
	<meta name="keywords" content="HTML5, CSS3, JQuery, Bootstrap, Web Design, Web Development, Responsive website, Creative website">

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon/favicon.ico">

    <!-- Fontawesome -->
  <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
  
  <link rel="stylesheet" type="text/css" href="css/style2.css">
	
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/stylefornav.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <!-- Header -->
    <header>
      <nav class="navbar navbar-fixed-top">
          <div class="container-fluid">
              <div class="site-nav-wrapper">

                  <div class="navbar-header">

                      <!-- Mobile Menu Open Button -->
                      <span id="mobile-nav-open-btn">&#9776;</span>

                      <!-- Logo -->
                      <a class="navbar-brand top" href="#home" style="margin-top: -10px; padding-top: 1px;">
            <!-- <img class="forextrasmall" src="img/logo/acmlogo.png" alt="logo"> -->
            <img class="forextrasmall" src="logo5.jpg" alt="Logo" style="width:180px;height:50px;">
                      </a>
                  </div>
                  <!-- class="smooth-scroll" -->
                  <!-- Main Menu -->
                  <div class="container">
                      <div class="collapse navbar-collapse">
                          <ul class="nav navbar-nav pull-right">
              <li><a href="index.html">Home</a></li>
                              <li><a href="Buy2.html">Buy</a></li>
                              <li><a href="Sell1.html">Sell</a></li>
                              <li><a href="Petcare.html">Hostile</a></li>
                              <li><a href="AboutUs.html">About</a></li>
                              <li><a href="#team">Team</a></li>
                          </ul>
                      </div>
                  </div>

                  <!-- Mobile Menu -->
                  <div id="mobile-nav">
                      <span id="mobile-nav-close-btn">&times;</span>

                      <div id="mobile-nav-content">
                          <ul class="nav">
              <li><a href="index.html">Home</a></li>
                              <li><a href="Buy2.html">Buy</a></li>
                              <li><a href="Sell1.html">Sell</a></li>
                              <li><a href="Petcare.html">Hostile</a></li>
                              <li><a href="AboutUs.html">About</a></li>
                              <li><a href="#team">Team</a></li>
                          </ul>
                      </div>
                  </div>

              </div>
          </div>
      </nav>
  </header>
<!-- Header Ends -->

 <div class="card-deck" style="margin-left:5%; margin-right:5%; margin-top:10%; margin-bottom: 10%;">
  <div class="card">
    <img class="card-img-top" src="dog1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Puppy</h5>
      <p class="card-text">Beagles, German Shepherd, Great Dane, Boxer, Labrador Retriever, Rottweiler, Pug, Golden Retriever</p>
    </div>
    <?php
        $temp = "Availability.php?id=Dog";
        echo    "<button><a href='".$temp."'>See Available List</a></button>";
    ?>
  </div>
  <div class="card">
    <img class="card-img-top" src="cat.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Cats</h5>
      <p class="card-text">Persian Cat, Russian Blue, Bengal Cat, British Shorthair, Sphynx Cat</p>
    </div>
    <?php
        $temp = "Availability.php?id=Cat";
        echo    "<button><a href='".$temp."'>See Available List</a></button>";
    ?>
  </div>
  <div class="card">
    <img class="card-img-top" src="fishes.jpeg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Fishes</h5>
      <p class="card-text">Catfish, Characins and other characiformes, Cichlids, Cyprinids, Loaches and related cypriniformes,Live-bearers and killifish</p>
    </div>
    <?php
        $temp = "Availability.php?id=Fish";
        echo    "<button><a href='".$temp."'>See Available List</a></button>";
    ?>
  </div>
</div>

<div class="card-deck" style="margin-left:5%; margin-right:5%; margin-top:10%; margin-bottom: 10%;">
  <div class="card">
    <img class="card-img-top" src="bird.gif" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Birds</h5>
      <p class="card-text">Parakeets. Mynah. Mannikins. Pigeons and Doves. Koels.</p>
    </div>
    <?php
        $temp = "Availability.php?id=Bird";
        echo    "<button><a href='".$temp."'>See Available List</a></button>";
    ?>
  </div>
  <div class="card">
    <img class="card-img-top" src="turtle1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Turtle</h5>
      <p class="card-text"> Indian Flapshell Turtle (Lissemys punctata) Indian Roofed Turtle (Pangshura tecta) Assam Roofed Turtle (Pangshura sylhetensis) Indian Softshell Turtle (Nilssonia gangetica) Red Crowned Roofed Turtle (Batagur kachuga) Indian Tent Turtle (Pangshura tentoria) </p>
    </div>
    <?php
        $temp = "Availability.php?id=Tortoise";
        echo    "<button><a href='".$temp."'>See Available List</a></button>";
    ?>
  </div>
  <div class="card">
    <img class="card-img-top" src="hamster1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Hamsters</h5>
      <p class="card-text">Wide Range of Hamsters</p>
    </div>
    <?php
        $temp = "Availability.php?id=Hamster";
        echo    "<button><a href='".$temp."'>See Available List</a></button>";
    ?>
  </div>
</div>
	<!-- JQuery -->
	<script src="js/jquery.min.js"></script>

	<!-- Custom JS -->
	<script src="js/scriptfornav.js"></script>
</body>
</html>