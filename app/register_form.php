<?php
@include 'config.php';
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];
    $select = "SELECT * FROM users WHERE email = '$email' && password = '$pass' ";
    $result = mysqli_query($conn, $select);
    if (mysqli_num_rows($result) > 0) {
        $error[] = 'user already exists!';
    } else {
        if ($pass != $cpass) {
            $error[] = 'password not matched!';
        } else {
            $insert = "INSERT INTO users(name, email, password ) VALUES('$name','$email','$pass')";
            $res = mysqli_query($conn, $insert);
            header('location:login_form.php');
        }
    }
};
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Form</title>

    <link rel="stylesheet" href="./style.css">
</head>

<body>



    <div class="form-container">

        <form action="" method="post">
            <h3>Register</h3>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                };
            };
            ?>


            <input type="text" name="name" required value="monika" placeholder="enter your name"><br>
            <input type="email" name="email" required value="rai20monik@gmail.com" placeholder="enter your email"><br>
            <input type="password" name="password" required value="monika" placeholder="enter your password"><br>
            <input type="password" name="cpassword" required value="monika" placeholder="confirm your password"><br>


            <input type="submit" name="submit" value="Register" class="form-btn">
            <p>Already have an account? <a href="login_form.php">Login Now</a></p>

        </form>
    </div>



</body>

</html>
