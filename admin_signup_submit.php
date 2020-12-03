<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "KC";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("Connection Failed".mysqli_connect_error());
    }

    $fname = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password1'];
    
    $sql = "INSERT INTO `admin`(`name`, `email`, `password`)
     VALUES ('$fname', '$email', '$password')";
     
    if(mysqli_query($conn, $sql)){
        mysqli_close($conn);
        header("Location:index.php");
    }
    else{
        mysqli_close($conn);
        header("Location:signup.php");
    } 
    
    ?>