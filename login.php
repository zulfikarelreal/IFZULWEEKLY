<?php
    require 'function.php';

    if (isset($_SESSION["login"])) {
        header("Location: mahasiswa.php");
        exit;
    }

    if (isset($_POST["login"])) {
        if(login($_POST)) {
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
    <title>LOGIN | CDIA</title>
</head>
<body>
    
    <h1>LOGIN</h1>

    <?php
        // if ($error) {
        //     echo "<script>
        //         alert('Username / Password Salah');
        //         window.location.href='login.php';
        //     </script>";
        // }
    ?>

    <form action="" method="post">
        <label for="username">Username : </label> <br>
        <input type="text" name="username" placeholder="username" id="username" id="username" require> <br>

        <label for="password">Password : </label> <br>
        <input type="text" name="password" placeholder="password" id="passowrd" require> <br>

        <button type="submit" name="login" id="login">Login</button>

        <br>

        <p>Belum memiliki akun? <a href="register.php">Register Disini!</a></p>

    </form>

</body>
</html>