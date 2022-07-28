<?php

//create connection
$conn= new mysqli("localhost","root","","kulture");
if($conn->connect_error){
    die("Connection error ".$conn->$connect_error);
}

$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$username=$_POST['username'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];

$sql="INSERT INTO user (name,email,address,username,password,confirm_password) VALUES('$name','$email','$address','$username','$password','$confirm_password')";

if($conn->query($sql) === TRUE){
    header("Location: login.php");
}
else{
    echo "Error ".$sql."<br>".$conn->error;
}

$conn->close();

?>