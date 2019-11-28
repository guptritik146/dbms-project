<!-- <html>
  <body> -->
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
  $tablename = $_GET["tablename"];
  $id="bookid";
  switch($tablename){
    case "electronic":
          {
            $id="eid";
          break;}
    case "misc":
          {
            $id="mid";

          break;}
    default:
                echo "FAILED";
                break;
        }

  $sql = "select max($id) from $tablename";
  $result = $conn->query($sql);
  $row = mysqli_fetch_array($result);
  $id = $row[0] + 1;
  echo $id;
  $name = $_GET["itemname"];
  $author = $_GET["first_name"];
  $price = $_GET["price"];
  $imgsrc = $_GET["imgsrc"];
  $sqlInsert = "INSERT INTO $tablename VALUES($id, '$name', '$author', '$imgsrc', $price);";
  echo $sqlInsert;
  $result = $conn->query($sqlInsert);


  $conn->close();


  header("Location: http://192.168.64.2/a/");
  die();
  ?>
<!-- </body>
</html> -->
