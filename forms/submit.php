<?php

$conn=new mysqli("localhost","root","","kulture");
  if($conn->connect_error){
    echo("failed to connect".$conn->connect_error);
  }

  $name=$_POST['name'];
  $email=$_POST['email'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];

  $date=date('Y-m-d h:s');

  $sql="INSERT INTO comments(name,email,subject,message,date) VALUES('$name','$email','$subject','$message','$date')";
  if($conn->query($sql) === TRUE){
    
    // echo'<script>alert("Thanks for your message")</script>';
    // header("Location: ../index.php");

    echo "<script>
     window. location. href = '../index.php';
     alert('Thank you for your message');
    </script>";
   }
  else{
    echo "Error ".$sql."<br>".$conn->error;
  }

$conn->close();
?>