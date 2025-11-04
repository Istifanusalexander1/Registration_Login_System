<?php
    session_start()
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
    <title>Home - <?php echo $_SESSION['userName']; ?></title>

    <link rel="stylesheet" href="user_styless.css">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"> -->

</head>
<body>

    <div class="navigations">
        <div class="logo">
        <img src="assets/chat.svg" alt="">
    </div>

    <nav>
        <ul>
            <li>
                <a href="#" class="home"><img src="assets/home.svg" alt=""> Home</a>
            </li>
            <li>
                <a href="#" class="profile"><img src="assets/dashboard.svg" alt=""> Dashboard</a>
            </li>
            <li>
                <a href="#" class="profile"><img src="assets/profile.svg" alt=""> Profile</a>
            </li>
            <li>
                <a href="#" class="about"><img src="assets/about.svg" alt=""> About</a>
            </li>
            <li>
                <a href="#" class="contact"><img src="assets/contact.svg" alt=""> Contacts</a>
            </li>
        </ul>
    </nav>
    </div>


    <div class="screen">

        <section class="hero">
            <div class="ab">
                 <h1>ISTIFANUS ALEXANDER</h1>
                 <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit vero saepe voluptates at! Facilis magni rem voluptates dolore ipsum optio adipisci, sed, magnam harum ex illo corrupti hic minima. A.</p>
            </div>
            <img src="assets/hero.png" alt="Hero image">

        </section>

        <div class="section-screen">
            <!-- THIS IS THE SECTION 1 -->
            <section id="sec1" class="all-section">
                <div class="sec1_card1">
                    <h3>This is card 1 of section 1</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad laboriosam odio provident reprehenderit repellat pariatur non expedita fugit molestiae modi ratione consectetur tenetur, sapiente necessitatibus aspernatur cum quo itaque?
                </div>
                <div class="sec1_card1">
                    <h3>This is card 2 of section 1</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad laboriosam odio provident reprehenderit repellat pariatur non expedita fugit molestiae modi ratione consectetur tenetur, sapiente necessitatibus aspernatur cum quo itaque?
                </div>
                <div class="sec1_card1">
                    <h3>This is card 3 of section 1</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad laboriosam odio provident reprehenderit repellat pariatur non expedita fugit molestiae modi ratione consectetur tenetur, sapiente necessitatibus aspernatur cum quo itaque?
                </div>
                <div class="sec1_card1">
                    <h3>This is card 4 of section 1</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad laboriosam odio provident reprehenderit repellat pariatur non expedita fugit molestiae modi ratione consectetur tenetur, sapiente necessitatibus aspernatur cum quo itaque?
                </div>
                <div class="sec1_card1">
                    <h3>This is card 5 of section 1</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad laboriosam odio provident reprehenderit repellat pariatur non expedita fugit molestiae modi ratione consectetur tenetur, sapiente necessitatibus aspernatur cum quo itaque?
                </div>
                <div class="sec1_card1">
                    <h3>This is card 6 of section 1</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad laboriosam odio provident reprehenderit repellat pariatur non expedita fugit molestiae modi ratione consectetur tenetur, sapiente necessitatibus aspernatur cum quo itaque?
                </div>
            </section>

            <!-- THIS IS THE SECTION 2 -->
            <section id="sec1" class="all-section">
                <div class="sec1_card1">
                    <h3>This is card 1 of section 1</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad laboriosam odio provident reprehenderit repellat pariatur non expedita fugit molestiae modi ratione consectetur tenetur, sapiente necessitatibus aspernatur cum quo itaque?
                </div>
                <div class="sec1_card1">
                    <h3>This is card 2 of section 1</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad laboriosam odio provident reprehenderit repellat pariatur non expedita fugit molestiae modi ratione consectetur tenetur, sapiente necessitatibus aspernatur cum quo itaque?
                </div>
                <div class="sec1_card1">
                    <h3>This is card 3 of section 1</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad laboriosam odio provident reprehenderit repellat pariatur non expedita fugit molestiae modi ratione consectetur tenetur, sapiente necessitatibus aspernatur cum quo itaque?
                </div>
                <div class="sec1_card1">
                    <h3>This is card 4 of section 1</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad laboriosam odio provident reprehenderit repellat pariatur non expedita fugit molestiae modi ratione consectetur tenetur, sapiente necessitatibus aspernatur cum quo itaque?
                </div>
                <div class="sec1_card1">
                    <h3>This is card 5 of section 1</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad laboriosam odio provident reprehenderit repellat pariatur non expedita fugit molestiae modi ratione consectetur tenetur, sapiente necessitatibus aspernatur cum quo itaque?
                </div>
                <div class="sec1_card1">
                    <h3>This is card 6 of section 1</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad laboriosam odio provident reprehenderit repellat pariatur non expedita fugit molestiae modi ratione consectetur tenetur, sapiente necessitatibus aspernatur cum quo itaque?
                </div>
            </section>

            <!-- THIS IS THE SECTION 3 -->
            <section id="sec1" class="all-section">
                <div class="sec1_card1">
                    <h3>This is card 1 of section 1</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad laboriosam odio provident reprehenderit repellat pariatur non expedita fugit molestiae modi ratione consectetur tenetur, sapiente necessitatibus aspernatur cum quo itaque?
                </div>
                <div class="sec1_card1">
                    <h3>This is card 2 of section 1</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad laboriosam odio provident reprehenderit repellat pariatur non expedita fugit molestiae modi ratione consectetur tenetur, sapiente necessitatibus aspernatur cum quo itaque?
                </div>
                <div class="sec1_card1">
                    <h3>This is card 3 of section 1</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad laboriosam odio provident reprehenderit repellat pariatur non expedita fugit molestiae modi ratione consectetur tenetur, sapiente necessitatibus aspernatur cum quo itaque?
                </div>
                <div class="sec1_card1">
                    <h3>This is card 4 of section 1</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad laboriosam odio provident reprehenderit repellat pariatur non expedita fugit molestiae modi ratione consectetur tenetur, sapiente necessitatibus aspernatur cum quo itaque?
                </div>
                <div class="sec1_card1">
                    <h3>This is card 5 of section 1</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad laboriosam odio provident reprehenderit repellat pariatur non expedita fugit molestiae modi ratione consectetur tenetur, sapiente necessitatibus aspernatur cum quo itaque?
                </div>
                <div class="sec1_card1">
                    <h3>This is card 6 of section 1</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad laboriosam odio provident reprehenderit repellat pariatur non expedita fugit molestiae modi ratione consectetur tenetur, sapiente necessitatibus aspernatur cum quo itaque?
                </div>
            </section>

            <!-- THIS IS THE SECTION 4 -->
            <section id="sec1" class="all-section">
                <div class="sec1_card1">
                    <h3>This is card 1 of section 1</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad laboriosam odio provident reprehenderit repellat pariatur non expedita fugit molestiae modi ratione consectetur tenetur, sapiente necessitatibus aspernatur cum quo itaque?
                </div>
                <div class="sec1_card1">
                    <h3>This is card 2 of section 1</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad laboriosam odio provident reprehenderit repellat pariatur non expedita fugit molestiae modi ratione consectetur tenetur, sapiente necessitatibus aspernatur cum quo itaque?
                </div>
                <div class="sec1_card1">
                    <h3>This is card 3 of section 1</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad laboriosam odio provident reprehenderit repellat pariatur non expedita fugit molestiae modi ratione consectetur tenetur, sapiente necessitatibus aspernatur cum quo itaque?
                </div>
                <div class="sec1_card1">
                    <h3>This is card 4 of section 1</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad laboriosam odio provident reprehenderit repellat pariatur non expedita fugit molestiae modi ratione consectetur tenetur, sapiente necessitatibus aspernatur cum quo itaque?
                </div>
                <div class="sec1_card1">
                    <h3>This is card 5 of section 1</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad laboriosam odio provident reprehenderit repellat pariatur non expedita fugit molestiae modi ratione consectetur tenetur, sapiente necessitatibus aspernatur cum quo itaque?
                </div>
                <div class="sec1_card1">
                    <h3>This is card 6 of section 1</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ad laboriosam odio provident reprehenderit repellat pariatur non expedita fugit molestiae modi ratione consectetur tenetur, sapiente necessitatibus aspernatur cum quo itaque?
                </div>
            </section>
            
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
<?php include("footer.php"); ?>