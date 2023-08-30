<?php
require_once 'config.php';
require_once 'header.php';

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $select = "SELECT * FROM users WHERE email = '$email' && password = '$pass' ";
    $result = mysqli_query($conn, $select);
    if (mysqli_num_rows($result) > 0) {
        header('location:property_page.php?type=Residential');
    } else {
        header('location:login_form.php?error=login');
    }
}
;
?>


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
                <input type="submit" href="property_page.php?type=Residential" name="submit" value="Login"
                    class="form-btn">
                <?php
                $error = $_GET['error'];
                if (isset($error)) {
                    echo '<h5 style="color:red;"> Failed to login</h5>';
                }
                ?>
                <p>Don't have an account? <a href="register_form.php"> Register now</a></p>

            </form>
        </div>



    </body>

</html>