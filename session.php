<?php
  session_start(); // start the session.
  // if the user is already logged in then redirect user to the home page
  if (isset($_session["userID"]) && $_session["userID"] === true) {
    header("location: welcome.php");
    exit;
  }
?>
