<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $validUsername = "admin";
    $validPassword = "Admin1";

    
    if ($username == $validUsername && $password == $validPassword) {
    
        $_SESSION['username'] = $username;
        
        header("Location: home.php");
        exit();
    } else {
        
        echo "<script>alert('Invalid username or password'); window.location.href='login.html';</script>";
    }
}
?>
