<?php
include('../config/db_connect.php');
session_start();

if (isset($_POST['login'])) {

    $email = mysqli_real_escape_string($dbConnect, $_POST['email']);
    $password = mysqli_real_escape_string($dbConnect, $_POST['password']);

    $sql = 'SELECT email, password FROM users';

    //make query & get result

    $result = mysqli_query($dbConnect, $sql);

    //fetch the resulting rows as an array
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);

    // close connection
    mysqli_close($dbConnect);
    

    for ($i = 0; $i < count($users); $i++) {

        if ($users[$i]['email'] === $email && $users[$i]['password'] === $password){
            $_SESSION['username'] = $email;
            header('location: ../dbPage.php');
            $_SESSION['success'] = 'you are logged in';
        } else {
            echo 'Login failed!! </br>';
        }

    }
}
