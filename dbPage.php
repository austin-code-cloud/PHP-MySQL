<?php

session_start();

include('./config/db_connect.php');

    if($_SESSION['username'] == ''){
        header('location: index.php');
    } 

?>

<?php include('template/header.php') ?>


<div class="container" id="container">



    <div class="form-container  sign-in-container">
        <form action="view.php" method="POST">
            <div class="header">Database</div>
            <div class="social__media__container">
                <a href="#" target="_blank" class="social codepen">
                    <i class="fa-brands fa-codepen"></i>
                </a>
                <a href="#" class="social google">
                    <i class="fa-brands fa-google"></i>
                </a>
                <a href="#" target="_blank" class="social instagram">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
            <span class="under__social">
                <a href="#" class="link signup-link">click view to continue</a>
            </span>

            <div class="button-input-group">
                <div class="group button-group">
                    <button name="view" class="signin-btn">View</button>
                </div>
            </div>
        </form>
    </div>






</div>

<?php include('template/footer.php') ?>