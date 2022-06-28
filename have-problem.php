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
    <link rel="stylesheet" href="styling.css" text>
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
          <h3>Hello, <?php echo $_session["username"]; ?></h3>
          <a href="logout.php">LOGOUT</a>
        </div>
      </div>
    </header>
    <div class="ask">
      <input class="problem-title" type="text" name="problemTitle" placeholder="Title your problem" required>
      <textarea class="describe" name="describe" tabindex="100" rows="10" cols="80" placeholder="Describe your problem here ..."></textarea>
      <button class="submit" type="button" name="submit">Submit</button>
    </div>
    <footer>
      <div class="footer">
        <caption class="designer">Designed by Ayman F. Ali</caption>
      </div>
    </footer>
  </body>
</html>
