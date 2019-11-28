<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buy And Sell</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">

        <a class="navbar-brand" href="http://192.168.64.2/a">DORM BAZAAR</a>
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
            


          </ul>
        </div>
      </div>
    </nav>


    <div class="container" >

      <div class="row">

        <div class="col-lg-3">


          <div class="list-group">
            <a href="http://192.168.64.2/a/home.php" class="list-group-item">BOOKS</a>
            <a href="http://192.168.64.2/a/electronic.php" class="list-group-item">ELECTRONICS</a>
            <a href="http://192.168.64.2/a/misc.php" class="list-group-item">MISCELLANEOUS</a>
          </div>

        </div>


        <div class="col-lg-9">



          <div class="row">
            <?php
            $servername = "localhost";
            $username = "rizul";
            $password = "rizul";
            $dbname = "dbms";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM electronic";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                   echo "<div class='col-lg-4 col-md-6 mb-4'>";
                   echo "  <div class='card h-100'>";
                   echo "    <a href='#'><img class='card-img-top' src='".$row["imgsrc"]."' alt=''></a>";
                   echo "    <div class='card-body'>";
                   echo "      <h4 class='card-title'>";
                   echo "        <a href='http://192.168.64.2/a/formbuy.php?id=".$row['eid']."&category=electronic'>".$row["name"]."</a>";
                   echo "      </h4>";

                   echo "    </div>";
                   echo "    <div class='card-footer'>";
                   echo "        <a>".$row["description"]."<br> PRICE :".$row["price"]."</a>";
                   echo "    </div>";
                   echo "  </div>";
                   echo "</div> ";
                }
            } else {
                echo "0 results";
            }
            $conn->close();



?>
          </div>

        </div>

      </div>

    </div>

  </body>

</html>
