<?php
$servername = "localhost";
$username = 'php_admin';
$password = 'MyAdminPass';
$dbname = "php_admin";

  if( isset($_POST['username']) && isset($_POST['content'])){
      try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO `posts` (`name`, `content`) VALUES (:username, :content);";
#  echo("<pre>\n".$sql."\n</pre>\n");
$stmt = $conn->prepare($sql);
$stmt->execute(array(
  ':username' => $_POST['username'],
    ':content' => $_POST['content'],

));

  $conn->exec($sql);

}
catch(PDOException $e) {

}
$conn = null;
}
//  <a href="login_.php">Login</a>
?>
<html><head></head>
<style>
body{
	color: green;
    border:1px solid #000;
    background: #ccc;
    padding: 10px;
}
</style>
<body>
  <nav class="menu">
    <a href="login_.php" target="_blank">  Login, </a> <a target="_blank" href="registrasion.php">  Create Account ,</a>
    <a href="New_Post.php" target="_blank">Create New Post </a>
  </nav>
   </body>

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
<body>

<form method="post">
<p>username:
  <input type="text" name="username">
</p>

    <p>Content:
<input size="50px" id="input_box" type="text" name="content">
    </p>
    <p>
<input   type="submit" value="Create New Post">
    </p>
</form>
</body>
</html>
