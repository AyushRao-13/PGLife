<?php 
session_start();
require("../include/database_connect.php");

$email = $_POST['email'];
$password = $_POST['passsword'];
$password = sha1($password);

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);
if(!result)
{
        echo "Something went wrong";
        exit;
}

$row_count = mysqli_num_rows($result);
if ($row_count == 0)
{
    echo "Login failed! Invalid email or password.";
    exit;
}

$row = mysqli_fetch_assoc($result);
$_SESSION['user_id']=$row['id'];
$_SESSION['full_name']=$row['fill_name'];
$_SESSION['email']=$row['email'];

header("location: ../index.php");
mysqli_close($conn);

?>