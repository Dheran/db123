<?php
session_start();
require_once('connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM tbl_user
            WHERE username='$username' 
                AND password='$password'";
    
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $username;
        if ($row["usertype"] == "admin") {
            header("Location: ../Pages/admin_dashboard.php");
        } else {
            header("Location: ../Pages/member_dashboard.php");
        }
    } else {
        $error = "Invalid email or password";
    }
}
?>