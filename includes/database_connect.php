<?php
$conn = mysqli_connect("127.0.0.1","root","","PGLIFE");

if(mysqli_connect_error())
{
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
?>