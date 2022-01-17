

<?php
require_once('config.php');
require ('index.html');

 if(isset($_POST['username'])  && isset($_POST['password'])) {
 $e = $_POST['username'];
 $p = $_POST['password'];

 $sql = "SELECT name FROM login_form WHERE name = '$e' AND password = '$p'";

 //echo "<p>$sql</p>";

 $stmt = $conn->query($sql);
 $row = $stmt->fetch(PDO::FETCH_ASSOC);

 var_dump($row);

 echo $row;
               }
if($row == FALSE){
  echo "Login Unsuccesfull";
}

if($row == TRUE){
  echo "login Succesfull!";
    header('Location: home_page.php');
}

         ?>
