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

  $id=$_GET["mid"];


  $fname=$_GET["first_name"];
  $lname=$_GET["last_name"];
  $email=$_GET["email"];
  $email=$_GET["phone"];
  $institute=$_GET["state"];
  $hosteller=$_GET["hosting"];



  //$sql = "INSERT INTO buyer(firstname,lastname,email,phone,institute,hosteller)
    //       VALUES('$fname','$lname','$email','$institute','$hosteller');";

  //$result = $conn->query($sql);


  $sql1 = "DELETE FROM misc where mid=$id;";
  $result1 = $conn->query($sql1);
  $conn->close();


  header("Location: http://192.168.64.2/a/home.php");
  die();
  ?>
<!--
</body>
</html> -->
