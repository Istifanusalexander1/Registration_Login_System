<?php
    session_start();
?>

<?php
    if (!empty($_SESSION['userName'])){
        if ($_SESSION['role'] == "Admin"){
            header("Location: admin_dashboard.php");
        }else{
            header("Location: user_dashboard.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <div class="regData">
            <h3>Register</h3>
            <input type="text" placeholder="Full Name" name="fullName" >
            <input type="text" placeholder="Username" name="userName" required>
            <input type="email" placeholder="Email" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="password" placeholder="Confirm Password" name="confirmPassword" required>
            <select name="role">
                <option value="0">------------Select Role------------</option>
                <option value="Admin">Admin</option>
                <option value="User">User</option>
            </select>
            <button type="submit" name="register">Register</button>
            <p>Aready have an account? <a href="login.php">Login here</a></p>
        </div>
    </form>
</body>
</html>

<?php
    if (isset($_POST['register'])){
        $fullName = $_POST['fullName'];
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $role = $_POST['role'];
        if($password != $confirmPassword){
            echo "Password Missmatch!";
        }
        else{
            if ($role == 'Admin'){
                $_SESSION['fullName'] = $fullName;
                $_SESSION['userName'] = $userName;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                $_SESSION['role'] = $role;
                header("Location: admin_dashboard.php");
            }elseif ($role == 'User'){
                $_SESSION['fullName'] = $fullName;
                $_SESSION['userName'] = $userName;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                $_SESSION['role'] = $role;
                header("Location: user_dashboard.php");
            }else{
                die("Please Kindly Select Role");
            }

            // echo "Full Name: " . $fullName . "<br>";
            // echo "UserName: " . $userName . "<br>";
            // echo "Email: " . $email . "<br>";
            // echo "Password: " . $password . "<br>";
            // echo "Confirm Password: " . $confirmPassword . "<br>";
        }
    }
?>