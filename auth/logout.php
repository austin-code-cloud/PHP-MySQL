<?php
include('../config/db_connect.php');
session_start();
if (isset($_POST['logout'])) {
    session_unset();
    header("location: ../index.php");
} 
