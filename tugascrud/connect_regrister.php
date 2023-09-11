<?php
  include 'connect.php';
  $email = $_POST['email'];
  $password = $_POST['password'];
  if($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
  } else {
    $stmt = $conn->prepare("insert into admin(email, password) values(?, ?)");
    $stmt->bind_param("ss", $email, md5($password));
    $stmt->execute();
    header(location:login.php);
    $stmt->close();
    $conn->close();
  } 
  ?>