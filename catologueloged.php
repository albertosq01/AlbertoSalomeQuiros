<!DOCTYPE html>
<html lang="en">

<head>
    <title>Catologue</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="styles.css" rel="stylesheet" type="text/css">
<link href="fonts.css" rel="stylesheet">
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script src="go-up.js"></script>

<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script type="text/javascript">
        $(function() {
            var offset = $("#sidebar").offset();
            var topPadding = 15;
            $(window).scroll(function() {
                if ($(window).scrollTop() > offset.top) {
                    $("#sidebar").stop().animate({
                        marginTop: $(window).scrollTop() - offset.top + topPadding
                    });
                } else {
                    $("#sidebar").stop().animate({
                        marginTop: 0
                    });
                };
            });
        });
    </script> -->

    <script type="text/javascript">

      function confirmBuy(){

        var answer = confirm("Are you sure you want to make this purchase?");

        if(answer == true){
          return true; 
        }
        else{
          return false;
        }
      }

    </script>


  <div class="container">
    <header style="background-image:url(imagenes/Background.svg)" class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom header-image">
      <a href="index.html" class="d-flex align-items-center col-md-1 mb-2 mb-md-0 text-dark text-decoration-none">
        <img class="logo" src="imagenes/balon.png" alt="logo">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 headerpadding">
        <li><a href="indexloged.php" class="nav-link px-2 link-dark header-li">Home</a></li>
        <li><a href="catologueloged.php" class="nav-link px-2 link-secondary header-li">Catalogue</a></li>
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
  <span class="go-up-button icon-circle-up"></span>
  <!-- <div id="sidebar" class="d-flex flex-column flex-shrink-0 p-3 bg-light floatcatalogue" style="width: 128px; ">
    <b class="leagues mb-3 mb-md-0 me-md-auto">LEAGUES</b>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="#template-card" class="nav-link link-dark" aria-current="page">
          <svg class="bi pe-none me-2" width="16" height="16"><image class="flagicon" href="imagenes/espana.png"/></svg>
          La Liga
        </a>
      </li>
      <li>
        <a href="#6" class="nav-link link-dark">
          <svg class="bi pe-none me-2" width="16" height="16"><image class="flagicon" href="imagenes/italia.png"/></svg>
          Serie A
        </a>
      </li>
      <li>
        <a href="#11" class="nav-link link-dark">
          <svg class="bi pe-none me-2" width="16" height="16"><image class="flagicon" href="imagenes/england.png"/></svg>
          Premier Ligue
        </a>
      </li>
      <li>
        <a href="#17" class="nav-link link-dark">
          <svg class="bi pe-none me-2" width="16" height="16"><image class="flagicon" href="imagenes/germany.png"/></svg>
          Bundesliga
        </a>
      </li>
      <li>
        <a href="#22" class="nav-link link-dark">
          <svg class="bi pe-none me-2" width="16" height="16"><image class="flagicon" href="imagenes/france.png"/></svg>
          Ligue 1
        </a>
      </li>
      <li>
        <a href="#24" class="nav-link link-dark">
          <svg class="bi pe-none me-2" width="16" height="16"><image class="flagicon" href="imagenes/international.png"/></svg>
          International
        </a>
      </li>
    </ul>
    <hr>
  </div> -->
  <div class="container bootstrap snipets">

  <h1 class="text-center text-muted">Shirst catalogue</h1>

  <template id="template-card">
      <div  class="col-12 mb-2 col-md-4">
        <div class="card">
        <img class= "imagecatalogue" src="" alt="">
          <div class="card-body">
            <h5>Titulo</h5>
            <p>price</p>
            <button class="btn btn-dark">Add to cart</button>
          </div>
        </div>
      </div>
    </template>

  <div   class="container">
      <h4>Cart  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1     0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </svg></i></h4>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Item</th>
            <th scope="col">Quantity</th>
            <th scope="col">Acción</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody id="items"></tbody>
        <tfoot>
          <tr id="footer">
            <th scope="row" colspan="5">Empty cart</th>
          </tr>
        </tfoot>
      </table>
      <h4>Cards</h4>
      <div class="row" id="cards"></div>
    </div>

    <template  id="template-footer">
        <th scope="row" colspan="2">Total products</th>
        <td>10</td>
        <td>
            <a href="confirmbuy.php"><button type="button" class="btn btn-info btn-sm"  onclick="return confirmBuy()">
                Buy
            </button></a>
            <button class="btn btn-danger btn-sm" id="vaciar-cart">
                Delete all
            </button>
        </td>
        <td class="font-weight-bold">$ <span>5000</span></td>
    </template>
    
    <template  id="template-cart">
      <tr>
        <th scope="row">id</th>
        <td>Cafe</td>
        <td>1</td>
        <td>
            <button class="btn btn-info btn-sm">
                +
            </button>
            <button class="btn btn-danger btn-sm">
                -
            </button>
        </td>
        <td>$ <span>500</span></td>
      </tr>
    </template>

  <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>
  <script src="cart.js"></script>
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
      © 2022 Copyright:
      <a class="text-white" href="index.html">CheapFootballShirts.com</a>
    </div>
    <!-- Copyright -->
  </footer>
</html>