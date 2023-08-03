<?php

include('config/db_connect.php');

if (isset($_POST['view'])) {

    $sql = 'SELECT email, password FROM users';

    //make query & get result

    $result = mysqli_query($dbConnect, $sql);

    //fetch the resulting rows as an array
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);

    // close connection
    mysqli_close($dbConnect);
    print_r($users);

}
