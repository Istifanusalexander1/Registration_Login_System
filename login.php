<?php
    session_start();
?>

<?php
    if (!empty($_SESSION['userName'])){
        if ($_SESSION['role'] == "Admin"){
            header("Location: admin/admin_dashboard.php");
        }else{
            header("Location: user/user_dashboard.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Login</title>
    <link rel="stylesheet" href="login.css">
    <!-- <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet"> -->
    
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" data-aos="slide-down" data-aos-duration="2550" >
        <div class="logData">
            <h3>Login</h3>
          
            <input type="text" placeholder="Username" name="userName">
            <input type="email" placeholder="Email" name="email">
            <input type="passwrod" placeholder="Password" name="password">
            <select name="role">
                <option value="">------------Select Role------------</option>
                <option value="User">User</option>
                <option value="Admin">Admin</option>
            </select>
            <button type="submit" name="login">Login</button>
            <p>Don't have an account? <a href="register.php">Register here</a></p>
        </div>
    </form>

    <!-- <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script> -->
    <script>
        AOS.init();
    </script>
</body>
</html>

<?php

    if (isset($_POST['login'])){
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        if ($role == 'Admin'){
            $_SESSION['userName'] = $userName;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $_SESSION['role'] = $role;
            header("Location: admin/admin_dashboard.php");
        }elseif ($role == 'User'){
            $_SESSION['userName'] = $userName;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $_SESSION['role'] = $role;
            header("Location: user/user_dashboard.php");
        }else{
            die("Kindly Select Role...");
        }
    }

?>

