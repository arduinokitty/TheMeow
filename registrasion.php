
  <?php
  $servername = "localhost";
  $username = 'meow1234';
  $password = 'MyAdminPass1234!';
  $dbname = "mydatabse";

    if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
        try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO login_form (name, password, email)
    VALUES (:name, :password, :email)";
#  echo("<pre>\n".$sql."\n</pre>\n");
  $stmt = $conn->prepare($sql);
  $stmt->execute(array(
    ':name' => $_POST['name'],
      ':password' => $_POST['password'],
        ':email' => $_POST['email'],
  ));

    $conn->exec($sql);
echo "Test";
  }
 catch(PDOException $e) {
   echo "Test";
 }
$conn = null;
}

  ?>
  <html><head></head><body>
    <nav class="menu">
      <a href="login_.php" target="_blank">  Login, </a> <a target="_blank" href="registrasion.php">  Create Account ,</a>
      <a href="New_Post.php" target="_blank">Create New Post </a>
    </nav>
    <style>
    body{
      text-align: center;
    	color: black;
        border:1px solid #000;
        background: #008B8B;
        padding: 10px;
    }
    nav{
         border-top: 5px solid black;
         border-bottom: 5px solid black;
         background-color:black;
    }
    </style>
    <a href="login_.php">Login</a>
<form method="post">
  <p>name:
    <input type="text" name="name">
  </p>
    <p>email:
        <input type="text" name="email">
    </p>
      <p>password:
  <input type="password" name="password">
      </p>
      <p>
  <input type="submit" value="Create">
      </p>
</form>
</body>
</html>
