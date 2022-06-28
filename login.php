<?php
  include 'config.php';

  if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if (empty($username) || empty($password)) {
      echo "please fill up all fields";
    }
    else {
      $select_info = mysqli_query($db, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
      $row = mysql_fetch_array($select_info);
      if ($row["username"] == $username && $row["password"] == $password) {
        echo '<script type="text/javascript">alert("Welcome ")</script>';
      }
    }
  }

?>
