

<?php
error_reporting(0);
require_once('config.php');

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


if($row == TRUE){
  echo "login Succesfull!";
    header('Location: home_page.php');
    $logged_in = true;
}

         ?>
         <html lang = "en">

            <head>
               <title>The Meow Social-Login</title>
               <nav class="menu">
           <a target="_blank" href="registrasion.php">  Create Account ,</a>
         </nav>
               <style>
               nav{
                    background-color:#E0FFFF;
                    border-radius:5000px;
               }
                  body {
                     padding-top: 40px;
                     padding-bottom: 40px;
                     background-color: #7FFFD4;
                        text-align: center;
                  }

                  form{
                       text-align: center;
                     max-width: 330px;
                     padding: 15px;
                     margin: 0 auto;
                     color: black;
                     background-color: white;
                     border-radius: 5000px;
                  }
                    input{
                      width:250px;
                      hight:500px;
                      border-radius:5000px;
                    }

                  h2{
                     text-align: center;
                     color:black;
                  }
               </style>

            </head>

            <body>

               <h2>The Meow Social</h2>
                <div><a href="registrasion.php">Crete Account</a> </div>
               <div class = "container form-signin">
         </div> <!-- /container -->

         <div class = "container">

         <form class = "form-signin" role = "form"
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
            ?>" method = "post">
            <input type = "text" class = "form-control"
               name = "username" placeholder = "username"
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit"
               name = "login">Login</button>
         </form>


         </div>

         </body>
         </html>
         <?php
         $logged_in = false;
         ?>
