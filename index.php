<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DORM BAZAAR</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>
  <style>

    body{
      background: black;
    }

    .footerDorm {
      padding: 0;
      position: fixed;
      bottom: 0;
    }

    .buyImage{
      height: 4em;
    }

    .buyButton {
      background: #868e96;
      color: white;
      padding: .5rem 1rem;
      font-size: 1.25rem;
      border-radius: .3rem;
      height: 3em;
      display: flex;
      align-items: center;
    }

  </style>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">DORM BAZAAR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="http://192.168.64.2/a">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://192.168.64.2/a/aboutus.php">About Us</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- /.col-lg-3 -->

        <div class="col-lg-12">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="http://salars.net/wp-content/uploads/2017/05/1291_2951568102-1200x350.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://www.discoverclifton.co.uk/wp-content/uploads/2014/09/Clifton-arcade-11-1200x350.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://ilsi.org/taiwan/wp-content/uploads/sites/19/2017/02/taiwan-night-market-1200x350.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>




      <div class="row">
        <div class="col-lg-6 text-center py-5">
          <div class="col-lg-12  d-flex justify-content-center">
            <img src="./images/buy.png" class="buyImage" alt="buy"/>
            <a class="buyButton" href='http://192.168.64.2/a/home.php'>BUY</a>
            </div>
          </div>
          <div class="col-lg-6 text-center py-5">
            <div class="col-lg-12 d-flex justify-content-center">
              <img src="./images/sell.png" class="buyImage" alt="sell"/>
              <a class="buyButton" href='http://192.168.64.2/a/formsell.php'>SELL</a>
            </div>
          </div>

        </div>

    </div>


    </div>
    <!-- /.container -->

    <!-- Footer -->
    <div class="col-lg-12 footerDorm">
    <footer class="py-1 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Wayne Enterprises 2017</p>
      </div>
      <!-- /.container -->
    </footer>
  </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
