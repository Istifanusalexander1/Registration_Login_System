<?php
    session_start();
?>

<?php

    $userName = $_SESSION['userName'];
    $role = $_SESSION['role'];
    if (!empty($userName)){
        if ($role == 'User'){
            echo '';
        }else{
            header("Location: admin_dashboard.php");
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
    <title>Welcome User</title>
    <link rel="stylesheet" href="user_calculator.css">
</head>
<body>
    <nav>
        <h1>Hi <?php echo $_SESSION['userName']; ?>, Welcome <br> This is User Dashboard!</h1>
        <form action="admin_dashboard.php" method="post">
            <div class="div-logout-btn">
                <button class="logout-btn" type="submit" name="logout" onclick="confirm('Are you sure you want to exit?')">Logout</button>
            </div>
        </form>
        <a href="user_home.php" class="logout-btn">Go to home</a>
    </nav>

    <div class="calculator">
        <div class="main-calculator">
            <h1>Calculator</h1>
            <input class="display" value="" type="text" readonly>
            <div class="keys">
                <button class="keys-btn op" onclick="appendToDisplay('+')">+</button>
                <button class="keys-btn" onclick="appendToDisplay('7')">7</button>
                <button class="keys-btn" onclick="appendToDisplay('8')">8</button>
                <button class="keys-btn" onclick="appendToDisplay('9')">9</button>
                <button class="keys-btn op" onclick="appendToDisplay('-')">-</button>
                <button class="keys-btn" onclick="appendToDisplay('4')">4</button>
                <button class="keys-btn" onclick="appendToDisplay('5')">5</button>
                <button class="keys-btn" onclick="appendToDisplay('6')">6</button>
                <button class="keys-btn op" onclick="appendToDisplay('*')">*</button>
                <button class="keys-btn" onclick="appendToDisplay('1')">1</button>
                <button class="keys-btn" onclick="appendToDisplay('2')">2</button>
                <button class="keys-btn" onclick="appendToDisplay('3')">3</button>
                <button class="keys-btn op" onclick="appendToDisplay('/')">/</button>
                <button class="keys-btn" onclick="appendToDisplay('.')">.</button>
                <button class="keys-btn" onclick="appendToDisplay('0')">0</button>
                <button class="keys-btn op" onclick="displayResault()">=</button>
                <button class="keys-btn op" onclick="clearScreen()">C</button>
            </div>
        </div>
    </div>
</body>

<script>
    const display = document.querySelector('.display');
    function appendToDisplay(input){
        if (display.value == "Error"){
            display.value = '';
            display.value += input;
        
        }
        else{
            display.value += input;
        }
    }
    function clearScreen(){
        display.value = '';
    }


    function displayResault(){
        try{
            if (display.value == ''){
                console.log('')
            }else{
                display.value = eval(display.value);
            }
        }
        catch(error){
            display.value = "Error";
        }
    }



</script>

</html>

<?php
    if(isset($_POST['logout'])){
        session_destroy();
        header("Location: login.php");
    }
?>