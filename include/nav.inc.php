<html>
<head>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>EventCrunch</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
  <!-- Nav Bar -->

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
</html>


