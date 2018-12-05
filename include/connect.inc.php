<?php
  //connects to Event Crunch's database
  $username = "be8b94f212dcc4";
  $password = "1fd662c7";
  $dbname = "heroku_2af2f21e8e0d20a";

  $conn = mysqli_connect("us-cdbr-iron-east-01.cleardb.net", "$username", "$password", "$dbname") or die(mysqli_connect_error());

?>
