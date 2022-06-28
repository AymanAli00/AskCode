<?php
  // start the Session
  session_start();
  // check if the user logged in, then redirect the user to the login page
  if (!isset($_session["userID"]) || $_session["userID"] !== true) {
    header("location: login_form.html");
    exit;
  }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Ayman F. Ali">
    <meta name="description" content="AskCode Homepage">
    <meta name="keywords" content="AskCode">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling.css" text\css>
    <title>AskCode</title>
  </head>
  <body>
    <header>
      <div class="navbar">
        <img class="txt_logo" src="img/askcode_logo.png" alt="askcode_logo">
        <a href="welcome.html">Home</a>
        <a href="#">Programming</a>
        <div class="dropdown">
          <button class="dropbtn">SmartPhones</button>
          <div class="dropdown-content">
            <a href="#">Android</a>
            <a href="#">iOS</a>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">Desktops</button>
          <div class="dropdown-content">
            <a href="#">Windows</a>
            <a href="#">macOS</a>
            <a href="#">Linux</a>
          </div>
        </div>
        <div class="login">
          <a href="logout.php">LOGOUT</a>
        </div>
      </div>
    </header>
    <div class="item-padding">
      <div class="solving">
        <h2>This is the title of the problem</h2>
        <hr>
        <p>this is the description of the problem</p>
        <button class="solve-btn" type="button" name="submit">Solve</button>
      </div>
      <div class="solving">
        <h2>This is the title of the problem</h2>
        <hr>
        <p>this is the description of the problem</p>
        <button class="solve-btn" type="button" name="submit">Solve</button>
      </div>
      <div class="solving">
        <h2>This is the title of the problem</h2>
        <hr>
        <p>this is the description of the problem</p>
        <button class="solve-btn" type="button" name="submit">Solve</button>
      </div>
      <div class="solving">
        <h2>This is the title of the problem</h2>
        <hr>
        <p>this is the description of the problem</p>
        <button class="solve-btn" type="button" name="submit">Solve</button>
      </div>
    </div>
  </body>
  <footer>
    <div class="footer">
      <caption class="design">Designed by Ayman F. Ali</caption>
    </div>
  </footer>
</html>
