<?php
    session_start();
?>

<?php

    echo $_SESSION['userName'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Admin</title>
</head>
<body>
    <h1>Hi, Welcome <?php echo $_SESSION['fullName']; ?> This is Admin Dashboard!</h1>
    <form action="admin_dashboard.php" method="post">
        <button type="submit" name="logout" onclick="confirm('Are you sure you want to exit?')">Logout</button>
    </form>
</body>
</html>

<?php
    if(isset($_POST['logout'])){
        session_destroy();
        header("Location: login.php");
    }
?>