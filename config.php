<?php
  $DBSERVER = 'localhost'; // define database server
  $DBUSERNAME = 'root'; // define database Username
  $DBPASSWORD = ''; // define database password
  $DBNAME = 'askcode_db'; // define database name

  // connect to mysql database
  $db = mysqli_connect($DBSERVER, $DBUSERNAME, $DBPASSWORD, $DBNAME)
   or
    die("Error: connection error! ");

  $select_db = mysqli_select_db($db, $DBNAME)
  or die("Error: selecting DB error! ");
?>
