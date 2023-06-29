<?php 
session_start(); 

$con=mysqli_connect('localhost','root','','showroom') or die(mysqli_error());

    
    $uname = $_POST['uname'];
    $pass = $_POST['password'];

        $sql = "SELECT * FROM signup WHERE u_name='$uname' AND u_pass='$pass'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['u_name'] === $uname && $row['u_pass'] === $pass) {
                echo '<script>alert("Login Succesfull")</script>';
                header("Location: home.html");
                exit();
            }else{
                echo '<script>alert("Invalid Username and Password")</script>';
            }
        }else{
            echo '<script>alert("Invalid Username and Password")</script>';
        }
  


















