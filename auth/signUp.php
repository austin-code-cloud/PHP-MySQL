<?php 
session_start();

include('../config/db_connect.php');

if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($dbConnect, $_POST['email']);
    $name = mysqli_real_escape_string($dbConnect, $_POST['name']);
    $password = mysqli_real_escape_string($dbConnect, $_POST['password']);

    $sql = "SELECT * FROM users WHERE email = '$email'";

    //make query & get result

    $result = mysqli_query($dbConnect, $sql);

    //fetch the resulting rows as an array
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);

    // close connection
    

    if (empty($users)){
        $sql = "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$password')";

        if(mysqli_query($dbConnect, $sql)){
            $_SESSION['username'] = $email;
            header('location:view.php');
            $_SESSION['success'] = 'You are logged in';
        } else {
            echo 'query error: ' . mysqli_error($dbConnect);
        }

    } else {
        echo 'User with this email already exist !!! </br> Login/SignUp to continue';
    }

    mysqli_close($dbConnect);
}

?>