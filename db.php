
  <?php
  $servername = "localhost";
  $username = 'php_admin';
  $password = 'MyAdminPass';
  $dbname = "php_admin";


        try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->exec($sql);

    echo("Login Sucessful");
  }
 catch(PDOException $e) {
 }
$conn = null;

  ?>
  <html><DO("mysql:host=$servername;dbname=$dbname", $username, $password);
  ?>
