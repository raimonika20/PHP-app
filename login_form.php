<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Form</title>

        <link rel="stylesheet" href="./style.css">
    </head>

    <body>



        <div class="form-container">

            <form action="" method="post">
                <h3>Login</h3>
                <input type="email" name="email" required placeholder="enter your email"><br>
                <input type="password" name="password" required placeholder="enter your password"><br>
                <a href="forgotPassword_page.php">Forgot Password?</a>


                <input type="submit" name="submit" value="Login" class="form-btn">
                <p>Don't have an account? <a href="register_form.php"> Register now</a></p>

            </form>
        </div>



    </body>

</html>