<?php
  // start the session
  session_start();
  if (session_destroy()) {
    // redirect to the login page
    header("location: login_form.php");
    exit;
  }
?>
