<?php
    session_start();
?>


<?php

    $userName = $_SESSION['userName'];
    $role = $_SESSION['role'];
    if (!empty($userName)){
        if ($role == 'Admin'){
            echo '';
        }else{
            header("Location: user_dashboard.php");
        }
    }else{
        header("Location: login.php");
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Admin</title>
    <link rel="stylesheet" href="admin_calculator.css">
</head>
<body>
    <nav>
        <h1>Hi <?php echo $_SESSION['userName']; ?>, Welcome This is Admin Dashboard!</h1>
        <form action="admin_dashboard.php" method="post">
            <div class="div-logout-btn">
                <button class="logout-btn" type="submit" name="logout" onclick="confirm('Are you sure you want to exit?')">Logout</button>
            </div>
        </form>
    </nav>

    <div class="calculator">
        <h1>Calculator</h1>
        <div class="main-calculator">
            <input type="text" readonly>
            <div class="keys">
                <button onclick="appendToDisplay('+')">+</button>
                <button onclick="appendToDisplay('7')">7</button>
                <button onclick="appendToDisplay('8')">8</button>
                <button onclick="appendToDisplay('9')">9</button>
                <button onclick="appendToDisplay('-')">-</button>
                <button onclick="appendToDisplay('4')">4</button>
                <button onclick="appendToDisplay('5')">5</button>
                <button onclick="appendToDisplay('6')">6</button>
                <button onclick="appendToDisplay('*')">*</button>
                <button onclick="appendToDisplay('1')">1</button>
                <button onclick="appendToDisplay('2')">2</button>
                <button onclick="appendToDisplay('3')">3</button>
                <button onclick="appendToDisplay('.')">.</button>
                <button onclick="appendToDisplay('0')">0</button>
                <button onclick="displayResault()">=</button>
                <button onclick="clearScreen()">C</button>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    if(isset($_POST['logout'])){
        session_destroy();
        header("Location: login.php");
    }
?>