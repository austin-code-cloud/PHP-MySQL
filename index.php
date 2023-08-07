<?php

include('./config/db_connect.php');


?>

<?php include('template/header.php') ?>


<div class="container" id="container">
    <div class="form-container  sign-up-container">
        <div class="register" id="register">
            <form action="./auth/signUp.php" method="POST">
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

        <div class="login" id="login">
            <form action="./auth/signin.php" method="POST">
                <div class="header">Sign in</div>
                <div class="button-input-group">
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
                        <button type='submit' name="login" class="signup-btn">Sign In</button>
                    </div>
                </div>
    
            </form>
        </div>
        
    </div>


    <div class="form-container  sign-in-container">
        <form action="./dbPage.php" method="POST">
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
                    <button class="ghost" id="signIn">Back</button>
                </div>
                <footer>
                    <p>Inspired by <a href="https://codepen.io/Rittenhouse" target="_blank">Ocheni Augustine</a></p>
                </footer>
            </div>

            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start your journey with us</p>

                <div class="group button-group">
                    <button class="ghost" id="signUp">Sign up</button>
                </div>
                <div class="group button-group">
                    <button class="ghost" id="loginbutton">Sign In</button>
                </div>
                <footer>
                    <p>Inspired by <a href="https://codepen.io/Rittenhouse" target="_blank">Ocheni Augustine</a></p>
                    </footer>
            </div>
        </div>
    </div>


</div>

<?php include('template/footer.php') ?>