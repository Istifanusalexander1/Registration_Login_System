<?php
    session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['userName']; ?> - Profile</title>
    <style>
        body{
            background-color: #cacacac6;
            height: 100vh;
            align-content: center;
        }
        .card{
            border: solid;
            margin: auto;
            max-width: 600px;
            box-shadow: 0 0 10px;
            /* padding: 30px; */
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            background-color: #fff;
            align-items: center;
        }
        .userProfile{
            border-radius: 50%;
            border: solid 6px #cacacac6;
            margin: 40px;
            box-shadow: 0 0 10px;
            width: 300px;
            height: 300px;
        }
        button{
            width: 200px;
            padding: 14px;
            margin: 20px;
            border-radius: 7px;
            border: none;
            font-size: 15px;
            background-color: #cacacac6;
            cursor: pointer;
            box-shadow: 0 0 5px;
        }
        button:hover{
            background-color: #cacacaff;
            color: #fff;
        }
        .info{
            border: solid #cacaca76 0.4px;
            box-shadow: 0 0 5px;
            width: 80%;
            padding: 20px;
            border-radius: 5px;
            color: #505050ff;
            font-weight: 800;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <div class="card">
        <img class="userProfile" src="../assets/profile.svg" alt="<?php echo $_SESSION['userName']; ?>">
        <button>Edit Profile Info</button>
        <div class="info">
            <div class="fullName">
                <p>Name: <?php echo $_SESSION['fullName']; ?></p>
            </div>
            <div class="userName">
                <p>Username: <?php echo $_SESSION['userName']; ?> </p>
            </div>
            <!-- <div class="number">
                <p>Phone Number: <?php echo $_SESSION['number']; ?> </p>
            </div> -->
            <div class="email">
                <p>Email: <?php echo $_SESSION['email']; ?> </p>
            </div>
        </div>
        <button>Change Password</button>
        <button onclick="history.back()"> ⬅ Back</button>
    </div>
</body>
</html>
https://www.symbolspy.com/arrow-symbol.html