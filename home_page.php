
<?php
//error_reporting(0);
require ('config.php');
require('values.php');
  ob_start();
   session_start();
?>

<?php
//$array = $stmt->fetchAll(PDO::FETCH_COLUMN);

  $stmt = $conn->prepare(
       "SELECT * FROM posts");
  $stmt->execute();
   $posts = $stmt->fetchAll(PDO::FETCH_COLUMN['conetent']);





?>

<body>
  <nav class="menu">
    <a href="login_.php" target="_blank">  Login, </a> <a target="_blank" href="registrasion.php">  Create Account ,</a>
    <a href="New_Post.php" target="_blank">Create New Post </a>
  </nav>
<h1>

  <td>
   <?php
 foreach($posts as $post){
  //Print data
  //There is a bug here where the data prints twice
       echo implode($post, "<br>");
       print("<br>");
 }
  

?>
</td>
</h1>
   </body>

<style>
body{
  text-align: center;
	color: black;
    border:5px solid #ffccff;
    border-radius:10px;
    background:#7FFFD4;
    padding: 10px;
}
nav{
     background-color:#E0FFFF;
     border-radius:5000px;
}
h1{
 background:white;
 border-radius:5000px;
 font-size:20px;
}
</style>
