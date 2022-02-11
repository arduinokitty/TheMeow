<?php
$servername = "localhost";
$username = 'php_admin';
$password = 'MyAdminPass';
$dbname = "php_admin";
$uname;
$LoginPassword;

      try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

}
catch(PDOException $e) {
}

?>
