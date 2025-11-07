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
            header("Location: ../admin/admin_dashboard.php");
        }
    }else{
        header("Location: ../login.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - <?php echo $_SESSION['userName']; ?></title>

    <link rel="stylesheet" href="user_style.css">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"> -->

</head>
<body>

    <div class="navigations">
        <div class="logo">
        <img src="../assets/chat.svg" alt="">
    </div>

    <nav>
        <ul>
            <li>
                <a href="#hero" class="home"><img src="assets/home.svg" alt=""> Home</a>
            </li>
            <li>
                <a href="#" class="profile"><img src="assets/dashboard.svg" alt=""> Dashboard</a>
            </li>
            <li>
                <a href="#" class="profile"><img src="assets/profile.svg" alt=""> Profile</a>
            </li>
            <li>
                <a href="#" class="abouts"><img src="assets/about.svg" alt=""> About</a>
            </li>
            <li>
                <a href="#" class="contact"><img src="assets/contact.svg" alt=""> Contacts</a>
            </li>
        </ul>
    </nav>
    </div>


    <div class="screen">

        <section class="hero" id="hero">
            <div class="ab">
                 <h1>ISTIFANUS ALEXANDER</h1>
                 <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit vero saepe voluptates at! Facilis magni rem voluptates dolore ipsum optio adipisci, sed, magnam harum ex illo corrupti hic minima. A.</p>
            </div>
            <img src="../assets/hero.png" alt="Hero image">

        </section>

        <div class="section-screen">
            <!-- THIS IS THE SECTION 1 -->
             <section id="sec1">
                <div class="section1__title">
                    <h1>This is section 1 Title</h1>
                </div>
                <div class="section__body">
                    <div class="section1__card1 sec1">
                        <h4>This is section-1 card-1 sub-title</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id nulla enim ad autem, deleniti natus corporis nesciunt, veniam harum inventore pariatur, sit voluptatem eius similique magnam mollitia. Ipsa, libero odio!</p>
                    </div>
                    <div class="section1__card2 sec1">
                        <h4>This is section-1 card-2 sub-title</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id nulla enim ad autem, deleniti natus corporis nesciunt, veniam harum inventore pariatur, sit voluptatem eius similique magnam mollitia. Ipsa, libero odio!</p>
                    </div>
                    <div class="section1__card3 sec1">
                        <h4>This is section-1 card-3 sub-title</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id nulla enim ad autem, deleniti natus corporis nesciunt, veniam harum inventore pariatur, sit voluptatem eius similique magnam mollitia. Ipsa, libero odio!</p>
                    </div>
                    <div class="section1__card4 sec1">
                        <h4>This is section-1 card-4 sub-title</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id nulla enim ad autem, deleniti natus corporis nesciunt, veniam harum inventore pariatur, sit voluptatem eius similique magnam mollitia. Ipsa, libero odio!</p>
                    </div>
                    <div class="section1__card5 sec1">
                        <h4>This is section-1 card-5 sub-title</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id nulla enim ad autem, deleniti natus corporis nesciunt, veniam harum inventore pariatur, sit voluptatem eius similique magnam mollitia. Ipsa, libero odio!</p>
                    </div>
                    <div class="section1__card6 sec1">
                        <h4>This is section-1 card-6 sub-title</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id nulla enim ad autem, deleniti natus corporis nesciunt, veniam harum inventore pariatur, sit voluptatem eius similique magnam mollitia. Ipsa, libero odio!</p>
                    </div>
                </div>
             </section>


             <!-- THIS IS THE SECTION 2  book section-->
             <section id="sec1">
                <div class="section1__title">
                    <h1>About Our Book</h1>
                </div>
                <div class="section__body">
                    <div class="section1__card1 sec1">
                        <h4>This is section-1 card-1 sub-title</h4>
                        <img src="../assets/book1.png" alt="" class="book-img">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id nulla enim ad autem, deleniti natus corporis nesciunt, veniam harum inventore pariatur, sit voluptatem eius similique magnam mollitia. Ipsa, libero odio!</p>
                    </div>
                    
                    <div class="section1__card5 sec1">
                        <h4>This is section-1 card-5 sub-title</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id nulla enim ad autem, deleniti natus corporis nesciunt, veniam harum inventore pariatur, sit voluptatem eius similique magnam mollitia. Ipsa, libero odio!</p>
                    </div>
                    <div class="section1__card6 sec1">
                        <h4>This is section-1 card-6 sub-title</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id nulla enim ad autem, deleniti natus corporis nesciunt, veniam harum inventore pariatur, sit voluptatem eius similique magnam mollitia. Ipsa, libero odio!</p>
                    </div>
                </div>
             </section>


             <!-- THIS IS THE SECTION 3 -->
             <section id="sec1" class="form-sub">
                <div class="section1__title">
                    <h1>Contacts Us</h1>
                </div>
                <form action="<?php $_SELF["PHP_SELF"] ?>" method="post">
                    <input type="text" name="cName" placeholder="Full Name">
                    <input type="number" name="cNumber" placeholder="Phone Number">
                    <input type="text" name="cEmail" placeholder="Email">
                    <textarea name="cText" placeholder="Enter Your Message"></textarea>
                    <input class="submitform-btn" type="submit" value="Submit" name="submit">
                </form>
                </div>
             </section>


             <!-- THIS IS THE SECTION 1 -->
             <section id="sec1">
                <div class="section1__title">
                    <h1>This is section 1 Title</h1>
                </div>
                <div class="section__body">
                    <div class="section1__card1 sec1">
                        <h4>This is section-1 card-1 sub-title</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id nulla enim ad autem, deleniti natus corporis nesciunt, veniam harum inventore pariatur, sit voluptatem eius similique magnam mollitia. Ipsa, libero odio!</p>
                    </div>
                    <div class="section1__card2 sec1">
                        <h4>This is section-1 card-2 sub-title</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id nulla enim ad autem, deleniti natus corporis nesciunt, veniam harum inventore pariatur, sit voluptatem eius similique magnam mollitia. Ipsa, libero odio!</p>
                    </div>
                    <div class="section1__card3 sec1">
                        <h4>This is section-1 card-3 sub-title</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id nulla enim ad autem, deleniti natus corporis nesciunt, veniam harum inventore pariatur, sit voluptatem eius similique magnam mollitia. Ipsa, libero odio!</p>
                    </div>
                    <div class="section1__card4 sec1">
                        <h4>This is section-1 card-4 sub-title</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id nulla enim ad autem, deleniti natus corporis nesciunt, veniam harum inventore pariatur, sit voluptatem eius similique magnam mollitia. Ipsa, libero odio!</p>
                    </div>
                    <div class="section1__card5 sec1">
                        <h4>This is section-1 card-5 sub-title</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id nulla enim ad autem, deleniti natus corporis nesciunt, veniam harum inventore pariatur, sit voluptatem eius similique magnam mollitia. Ipsa, libero odio!</p>
                    </div>
                    <div class="section1__card6 sec1">
                        <h4>This is section-1 card-6 sub-title</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id nulla enim ad autem, deleniti natus corporis nesciunt, veniam harum inventore pariatur, sit voluptatem eius similique magnam mollitia. Ipsa, libero odio!</p>
                    </div>
                </div>
             </section>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
<?php include("footer.php"); ?>