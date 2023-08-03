<?php 

if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($dbConnect, $_POST['email']);
    $name = mysqli_real_escape_string($dbConnect, $_POST['name']);
    $password = mysqli_real_escape_string($dbConnect, $_POST['password']);

    $sql = "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$password')";

    if(mysqli_query($dbConnect, $sql)){
        echo 'success';
    } else {
        echo 'query error: ' . mysqli_error($dbConnect);
    }
}

?>