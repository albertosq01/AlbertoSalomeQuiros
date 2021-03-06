<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact us</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="styles.css" rel="stylesheet" type="text/css">


  <div class="container">
    <header style="background-image:url(imagenes/Background.svg)" class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom header-image">
      <a href="indexloged.php" class="d-flex align-items-center col-md-1 mb-2 mb-md-0 text-dark text-decoration-none">
        <img class="logo" src="imagenes/balon.png" alt="logo">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 headerpadding">
        <li><a href="indexloged.php" class="nav-link px-2 link-dark header-li">Home</a></li>
        <li><a href="catologueloged.php" class="nav-link px-2 link-dark header-li">Catalogue</a></li>
        <li><a href="contactloged.php" class="nav-link px-2 link-secondary header-li">Contact us</a></li>
      </ul>

      <div class="col-md-3 text-end">
      <?php
        echo '<a href="#">
        <img width=30px height=30px src="imagenes/usericon.png" alt="logo">
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
        echo "<a type='button' class='btn btn-primary' style='background-color: #008952; border: 2px solid #ffffff;' href='logout.php'>Log out</a>";
        ?>
      </div>
    </header>
  </div>
</head>


<body>
  <a name="Contact us"></a>
    <section class="py-5">
        <div class="container">

            <h1 style="padding-bottom: 8px;">
                Contact
                <small>with us</small>
            </h1>

            <div class="row">

                <div class="col-lg-8 mb-4">
                    <!-- Google Maps-->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1242.3294956510124!2d10.31076381767737!3d44.803699478607435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47806b9caca0a33f%3A0xb13f98dcef76daae!2sVia%20Pietro%20Rubini%2C%2027%2C%2043125%20Parma%20PR!5e0!3m2!1ses!2sit!4v1654432937090!5m2!1ses!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"
                </div>
                <!-- DEtalles contacto-->
                <div class="col-lg-4 mb-4">

                    <h3>Contact us</h3>
                    <p>
                        Via Pietro Rubini
                        <br />
                        27,43125
                        <br />
                    </p>
                    <p>
                        Parma, Italy

                    </p>
                    <p>
                        <u title="Email">Email</u>
                        :
                        <a href="">alberto.salomequiros@studenti.unipr.it</a>
                    </p>
                    <p>
                      <a title="Telephone">Telephone</a>
                        : 0521 294384
                    </p>
                    <p>
                        <a title="Hours">Schedule</a>
                        : Monday - Friday: 9:00 AM - 22:00 PM
                    </p>
                </div>
            </div>
    </section>
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
    <div class="text-center p-3" style="background-color:  #05b802;">
      ?? 2022 Copyright:
      <a class="text-white" href="indexloged.php">CheapFootballShirts.com</a>
    </div>
    <!-- Copyright -->
  </footer>
</html>