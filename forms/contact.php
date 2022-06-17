<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "kulture";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (isset($_POST['submit'])) {
  if (!empty(($_POST['name'])) && !empty(($_POST['email'])) && !empty(($_POST['message']))) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $sql = "INSERT INTO comments(name,email,message) VALUES ('$name','$email','$message')";

    $run = mysqli_query($conn, $query);

    if ($run) {
      echo " Form submitted successfully";
    } else {
      echo "not submitted";
    }
  } else {

    echo "all fields required";
  }
}
