<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/Icons&logos/LOGO.png" type="image/x-icon">
    <title>CareSenerity | Signup</title>
    <link rel="stylesheet" href="/FrontEnd/css/colors.css">
    <link rel="stylesheet" href="/FrontEnd/css/signup.css">
</head>

<body>

    <div class="negative">
        <?php
            if (isset($_SESSION['negative'])) {
                echo "<h5>" . $_SESSION['negative'] . "</h5>";
                unset($_SESSION['negative']);
            }
        ?>
    </div>

    <div class="login-container">
        <form action="/BackEnd/signup_BE.php" method="POST">
            <h1>SignUp</h1>
            <input type="text" name="acc_name" required placeholder="Account Name">
            <input type="text" name="acc_email" required placeholder="Account Email">
            <input type="password" name="acc_pass" required placeholder="Account Password">
            <input type="password" name="confirm_pass" required placeholder="Confirm password">
            <div class="user-type">
                <label>Account type:</label>
                <select name="role">
                    <option value="" selected disabled>Select your account type</option>
                    <option value="user">User</option>
                    <option value="org">Organization</option>
                </select>
            </div>
            <button type="submit" name="signup_btn">SignUp</button>
        </form>
        <p class="signup">Already have an account?<a id="signup" href="/FrontEnd/loggedOut/login.php">Login</a></p>
        <span><a href="/FrontEnd/loggedOut/index.php" class="goback">Go Back</a></span>
    </div>
</body>
</body>

</html>