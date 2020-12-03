<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "KC";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("Connection Failed".mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM admin where email = '".$_POST['email']."' AND password = '".$_POST['pass_word']."'";
    $result = mysqli_query($conn, $sql);
     
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        header("Location:index.php");
    }
    else{
        echo "<script>window.alert('Enter valid Email or Password')</script>";
        header("Location:login.php");
    }
    
?>