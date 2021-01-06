<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style/authen_form.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container" id="container">

        <div class="form-container sign-up-container">
            <form action="" method="post">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fa fa-google"></i></a>
                    <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
                </div>
                <input name="username" type="text" placeholder="Username" />
                <input name="password" type="password" placeholder="Password" />
                <input name="confirm_password" type="password" placeholder="Password Confirm" />
                <button type="submit" name="register">Sign Up</button>
            </form>
            <?php include"auth_register.php" ?>
        </div>

        <div class="form-container sign-in-container">
            <form action="" method="post">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fa fa-google"></i></a>
                    <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
                </div>
                <span>or use your account</span>
                <input name="username" type="text" placeholder="Username" />
                <input name="password" type="password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button type="submit" name="login">Log In</button>
            </form>
            <?php include "auth_login.php" ?>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Click here</h1>
                    <p>if you want Sign In</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Click here</h1>
                    <p>if you want Sign Up</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>

    </div>
    <script src="js/overlay_trans.js"></script>
</body>
    