<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cheap Football Shirts</title>
    <!-- CSS only -->
<link href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="styles.css" rel="stylesheet" type="text/css">



  <div class="container">
    <header style="background-image:url(imagenes/Background.svg)" class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom header-image">
      <a href="indexloged.php" class="d-flex align-items-center col-md-1 mb-2 mb-md-0 text-dark text-decoration-none">
        <img class="logo" src="imagenes/balon.png" alt="logo">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 headerpadding">
        <li><a href="indexloged.php" class="nav-link px-2 link-secondary header-li">Home</a></li>
        <li><a href="catologueloged.php" class="nav-link px-2 link-dark header-li">Catalogue</a></li>
        <li><a href="contactloged.php" class="nav-link px-2 link-dark header-li">Contact us</a></li>
      </ul>
      <div class="col-md-3 text-end">
        <?php
        echo '<a href="#">
        <img width=30px height=30px src="imagenes/usericon.png" alt="usericon">
        </a>';
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "cheapfootballshirts";

        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        if(!$conn){

          die("No hay conexion: ".mysqli_connect_error());
        }
        $query = "SELECT user from userloged";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          echo '<b  style="color:black; font-size:18px;">   '.$row["user"].'</b>'; 
          echo " ";
        } else {
          echo "0 results";
        }
        echo "<a type='button' style='background-color: #008952; border: 2px solid #ffffff;' class='btn btn-primary' href='logout.php'>Log out</a>";
        ?>
      </div>
    </header>
  </div>
</head>


<body>
  <header>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <svg class="bd-placeholder-img"  height="450" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/> <image href="imagenes/camisetascarousel.jpg" width= "100%"/>
          </svg>
  
          <div class="container">
            <div class="carousel-caption text-start">
              <h1><span class="textcarousel"> The 2022/23 shirts are now available </span></h1>
              <p><span class="textcarousel"> Take a look at our new catalogue and buy the new shirt of your favorite team.</span></p>
              <p><a class="btn btn-lg btn-primary" style="background-color: #008952; border: 2px solid #ffffff;" href="catologueloged.php">Visit catalogue</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" height="450" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
            <image href="imagenes/camisetascarousel2.jpeg" width= "100%"/></svg>
  
          <div class="container">
            <div class="carousel-caption">
              <h1><span class="textcarousel"> National team jerseys also available. </span></h1>
              <p><span class="textcarousel">Buy your country's shirt now and support it in the UEFA Nations Cup.</span></p>
              <p><a class="btn btn-lg btn-primary" style="background-color: #008952; border: 2px solid #ffffff;" href="catologueloged.php">Visit catalogue</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" height="450" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/><image href="imagenes/customer-services.jpg" width= "100%" />
          </svg>
  
          <div class="container">
            <div class="carousel-caption text-end">
              <h1><span class="textcarousel"> Our customer service team at your service </span></h1>
              <p><span class="textcarousel">Contact us if you have any questions, by phone or email.</span></p>
              <p><a class="btn btn-lg btn-primary" style="background-color: #008952; border: 2px solid #ffffff;" href="contactloged.php">Contact us</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </header>
  
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <hr class="featurette-divider">  
    <div class="container marketing">
    
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" />
          <image href="imagenes/catalogue.png" height="140" width="140"/></svg>
  
          <h2 class="fw-normal">Visit our Catalogue</h2>
          <p>Top quality t-shirts at a very low price, shipping throughout Europe. Enjoy your favorite teams in the best possible way.</p>
          <p><a class="btn btn-secondary" style="background-color: #05b802;" href="catologueloged.php">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" /> <image href="imagenes/contact.png" height="140" width="140"/></svg>
  
          <h2 class="fw-normal">Contact us</h2>
          <p>If you have any questions or problems with your order you can ask us directly, we will answer you as soon as possible.</p>
          <p><a class="btn btn-secondary" style="background-color: #05b802;" href="contactloged.php">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle"  width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" /> <image href="imagenes/socialmedia2.jpg" height="140" width="140"/></svg>
  
          <h2 class="fw-normal">Social Networks</h2>
          <p>Follow us on our social networks to find out about all our news and offers. We also do raffles every month.</p>
          <p><a class="btn btn-secondary" style="background-color: #05b802;" href="#bottom">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
  
  
      <!-- START THE FEATURETTES -->
  
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1"> Get your football shirt! </h2>
          <p class="lead">Get the shirt of your favorite teams at a very affordable price, top quality, more than 10,000 satisfied customers. Wide variety of leagues and teams. You can personalize it with the name and number you want, that of your favorite player or your own. What are you waiting for? Make your order now.</p>
        </div>
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 400x400" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/> <image href="imagenes/camisetas.webp" height="400" width="400"/> </svg>
  
        </div>
      </div>
  
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal lh-1">Contact our customer service team. </h2>
          <p class="lead">Ask us any questions you have about our website, orders, sizes... whatever comes to mind. We will attend to your request as soon as possible, you can contact us by phone (subject to schedules) or email.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 400x400" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" /> <image href="imagenes/arbitro.jpg" height="400" width="400"/></svg>
  
        </div>
      </div>
  
      <hr class="featurette-divider">

  
      <!-- /END THE FEATURETTES -->
  
    </div><!-- /.container -->
    <div id="bottom"></div>
    <!-- Bootstrap java script-->
    <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>
</body>

<footer style="background-image: url(imagenes/Background.svg);" class="bg-light text-center text-white header-image">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a 
          class="btn btn-primary btn-floating m-1 "
          style="background-color: #2323fa;"
          href="#!"
          role="button">
          <img   src="imagenes/facebook.png" alt="facebook" class="icons">
        </a>
  
        <!-- Twitter -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #55acee;"
          href="#!"
          role="button"
          ><img src="imagenes/twitter.png" alt="twitter" class="icons">
        </a>
  
        <!-- Youtube -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #ff1e00;"
          href="#!"
          role="button"
          ><img src="imagenes/youtube.png" alt="youtube" class="icons">
        </a>
  
        <!-- Instagram -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #f740d0;"
          href="#!"
          role="button"
          ><img src="imagenes/instagram.png" alt="instagram" class="icons"> 
        </a>
  
        <!-- Linkedin -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #0082ca;"
          href="#!"
          role="button"
          ><img src="imagenes/linkedin.png" alt="linkedin" class="icons">
        </a>
        <!-- Whatsapp -->
        <a
          class="btn btn-primary btn-floating m-1"
          style="background-color: #04ff00;"
          href="#!"
          role="button"
          ><img src="imagenes/whatsapp.png" alt="whatsapp" class="icons">
        </a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: #05b802;">
       2022 Copyright:
      <a class="text-white" href="indexloged.php">CheapFootballShirts.com</a>
    </div>
    <!-- Copyright -->
  </footer>
</html>