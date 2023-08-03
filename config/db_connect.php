<?php 
$dbConnect = mysqli_connect('localhost', 'Ocheni', 'test12345', 'user_data');

// dbConnect check

if (!$dbConnect) {
    echo 'connection error: ' . mysqli_connect_error();
}
?>