<?php
    require 'function.php';

    if(isset($_POST["register"])) {
        if(register($_POST) > 0) {
            echo "<script>
                alert('Register Berhasil');
                window.location.href='login.php;
            </script>";
        } else {
                echo "<script>
                alert('Register Gagal');
            </script>";
        }
    }
?>


<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="base.css">
    <title>REGISTER | CDIA</title>
</head>
<body>
    
    <h1>REGISTER</h1>
    <form action="" method="post">
        <label for="username">Username : </label> <br>
        <input type="text" name="username" placeholder="username" id="username" require> <br>

        <label for="password">Password : </label> <br>
        <input type="password" name="password" placeholder="password" id="password" require> <br>

        <label for="password">Confirm Password : </label> <br>
        <input type="password" name="confirmpassword" placeholder="password" id="confirmpassword" require> <br>

        <button type="submit" name="register">Register</button>

        <p>Sudah memiliki akun? <a href="login.php">Login disini</a></p>
        <a href="#">Lupa Password?</a>
    </form>

</body>
</html>