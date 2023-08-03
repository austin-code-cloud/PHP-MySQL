<?php

include('config/db_connect.php');
include('signUp.php');

?>



<html lang="en">

<head>
    <title style="color: brown">LOGIN/SIGN UP WITH ZAUR</title>
    <meta name="author" content="Zaur">
    <meta descryption content="Presentation of website">
    <meta name="keywords" content="technology, cyber security, software">
    <meta http-equiv="refresh" content="100">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container  sign-up-container">
            <form action="index.php" method="POST">
                <div class="header">Sign Up</div>
                <div class="social__media__container">
                    <a href="https://codepen.io/Rittenhouse" target="_blank" class="social codepen">
                        <i class="fa-brands fa-codepen"></i>
                    </a>
                    <a href="#" class="social google">
                        <i class="fa-brands fa-google"></i>
                    </a>
                    <a href="https://www.instagram.com/zaur.suleymnv/" target="_blank" class="social instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
                <span class="under__social">
                    <a href="#" class="link signin-link">or use your email for registration
                    </a>
                </span>

                <div class="button-input-group">
                    <div class="group input-group">
                        <input type="text" placeholder="Name" name="name" value="" required>
                    </div>
                    <div class="group input-group">
                        <input type="email" placeholder="Email" name="email" value="" required>
                    </div>
                    <div class="group input-group">
                        <input type="password" placeholder="Password" name="password" value="" required pattern=".{8,}">
                    </div>
                    <div class="alert-text signup__alert">
                        <span class="help__text">At least 8 character</span>
                    </div>
                    <div class="group button-group">
                        <button type='submit' name='submit' class="signup-btn">Sign Up</button>
                    </div>
                </div>

            </form>
        </div>


        <div class="form-container  sign-in-container">
            <form action="view.php" method="POST">
                <div class="header">Database</div>
                <div class="social__media__container">
                    <a href="https://codepen.io/Rittenhouse" target="_blank" class="social codepen">
                        <i class="fa-brands fa-codepen"></i>
                    </a>
                    <a href="#" class="social google">
                        <i class="fa-brands fa-google"></i>
                    </a>
                    <a href="https://www.instagram.com/zaur.suleymnv/" target="_blank" class="social instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
                <span class="under__social">
                    <a href="#" class="link signup-link">or use your account</a>
                </span>

                <div class="button-input-group">
                    <div class="group button-group">
                        <button name="view" class="signin-btn">View</button>
                    </div>
                </div>
            </form>
        </div>



        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>Users Database</p>

                    <div class="group button-group">
                        <button class="ghost" id="signIn">Continue</button>
                    </div>
                    <footer>
                        <p>Inspired by <a href="https://codepen.io/Rittenhouse" target="_blank">Zaur Suleymanlı</a></p>
                    </footer>
                </div>

                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start your journey with us</p>

                    <div class="group button-group">
                        <button class="ghost" id="signUp">Sign up</button>
                    </div>
                    <footer>
                        <p>Inspired by <a href="https://codepen.io/Rittenhouse" target="_blank">Zaur Suleymanlı</a></p>
                    </footer>
                </div>
            </div>
        </div>


    </div>

    <script src="index.js"></script>
</body>

</html>