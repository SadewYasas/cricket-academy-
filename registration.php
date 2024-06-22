<?php
    include 'connection.php';

    $name_1 = "";
    $email_1 = "";
    $password_1 = "";


    $name_1 = $_POST['name_1'];
    $email_1 = $_POST['email_1'];
    $password_1 = $_POST['password_1'];

    $sql = "INSERT INTO register (`username`, `email`, `passwordd`) VALUES ('$name_1', ' $email_1', ' $password_1')";

    if (mysqli_query($conn, $sql)) {

        echo("Data Saved succssfully");
      } else {
        echo("Data Saved succssfull");
      }
      mysqli_close($conn);

    
?>
