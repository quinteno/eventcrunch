<?php
  session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>


  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
 <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/styles.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<nav class="z-depth-0">
  <div class="nav-wrapper">
    <a id="logo-container" href="index.php" class="brand-logo">
      <p>
        event crunch
      </p>
    </a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
      <?php
        if(isset($_SESSION['logged_in'])) {
          echo '<li><a href="profile.php">Profile</a></li>';
          echo '<li><a href="include/logout.inc.php">Logout</a></li>';
        } else {
          echo '<li><a href="login.php">Login</a></li>';
        }
      ?>
    </ul>
    <ul class="side-nav" id="mobile-demo">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
      <?php
        if(isset($_SESSION['logged_in'])) {
          echo '<li><a href="profile.php">Profile</a></li>';
          echo '<li><a href="include/logout.inc.php">Logout</a></li>';
        } else {
          echo '<li><a href="login.php">Login</a></li>';
        }


      ?>
    </ul>
  </div>
</nav>




    <div id="container">

      <div id="form_box">
        <form action="include/log_in.inc.php" method="POST">
          <p id="form_heading">Login</p>
          <div id="user_error">
            <?php
              if (isset($_SESSION['user_error'])) {
                echo $_SESSION['user_error'];
                unset($_SESSION['user_error']);
              }
            ?>
          </div>
          <input type="name" name="uid" placeholder="Username" maxlength="20"><br />
          <input type="password" name="pwd" placeholder="Password" maxlength="20"><br />
          <input type="submit" name="submit" value="Login"><br />
          <p class="message" id="font_21">Not registered?
              <a href="create.php"id="font_20">Create an account!</a></p><br /><br />
        </form>
        </div>
    </div>


 <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/script.js"></script>

  </body>
</html>
