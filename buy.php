<!-- <html lang="en">
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


  $fname=$_GET["first_name"];
  $lname=$_GET["last_name"];
  $email=$_GET["email"];
  $phone=$_GET["phone"];
  $institute=$_GET["state"];
  $hosteller=$_GET["hosting"];
  $tablename=$_GET["tablename"];

  switch($tablename){
    case "book":
          {$id=$_GET["id"];

          $sql1 = "DELETE FROM $tablename where bookid=$id;";

          $result1 = $conn->query($sql1);
          break;}
    case "electronic":
          {$id=$_GET["id"];
          $sql1 = "DELETE FROM $tablename where eid=$id;";
          $result1 = $conn->query($sql1);
          break;}
    case "misc":
          {$id=$_GET["id"];
          $sql1 = "DELETE FROM $tablename where mid=$id;";
          $result1 = $conn->query($sql1);
          break;}
    default:
                echo "FAILED";
                break;
        }




$id = $_GET["id"];
  $sql = "INSERT INTO buyer
          VALUES('$fname','$lname','$email','$phone','$institute','$hosteller','$tablename','$id');";
          $result = $conn->query($sql);


  $conn->close();

  //
  header("Location: http://192.168.64.2/a/$tablename.php");
  die();
  ?>

<!-- </body>
</html> -->
