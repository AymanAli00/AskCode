<?php
  include 'config.php';
[
  if (isset($_POST["signin"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    if (empty($username) || empty($email) || empty($password)) {
      echo "please fill up all fields";
    }
    else {
      $insert = mysqli_query($db,"INSERT INTO `user` (`username`, `userEmail`, `userPassword`) VALUES ('$username', '$email', '$password')
");
      echo "success";
    }
  }

?>
