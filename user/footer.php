<style>
    .footer{
        text-align: center;
        padding: 0 0 30px 0;
        background-color: #adb5bd;
        box-shadow: 0 0 10px;
    }
    footer{
        background-color: #adb5bd;
        padding: 30px;
        height: 270px;
        display: flex;
        justify-content: space-evenly;
    }
    .links{
        display: flex;
        flex-direction: column;
        border: solid 4px;
        margin: 5px;
        box-shadow: 0 0 10px;
        padding: 20px;
    }
    .links a{
        color: #4b4b4bff;
        padding: 5px;
        text-align: center;
    }
    .links a:hover{
        color: #cad5e3ff;
    }
    .about{
        border: solid;
        width: 270px;
        flex-direction: column;
        border: solid 4px;
        margin: 5px;
        box-shadow: 0 0 10px;
        padding: 20px;
    }
    .copy{
        display: flex;
        text-align: center;
        justify-content: center;
    }
    @media (max-width: 470px) {
        .links{
            padding: 5px;
            width: 50%;
        }
    }
</style>
<div class="footer">
    <footer>
        <div class="links">
            <strong>Site Maps</strong>
            <a href="#"><img src="../assets/home.svg" alt="">Home</a>
            <a href="#"><img src="../assets/dashboard.svg" alt="">Dashboard</a>
            <a href="#"><img src="../assets/profile.svg" alt="">Profile</a>
            <a href="#"><img src="../assets/about.svg" alt="">About</a>
            <a href="#"><img src="../assets/contact.svg" alt="">Contacts</a>
        </div>
        <div class="about">
            <strong>About</strong>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt unde cumque modi, voluptates veniam quod!</p>
        </div>
    </footer>
    <div class="copy">
        &copy;  
        <p id='copy'> <script defer>const date = new Date().getFullYear(); document.querySelector('#copy').innerHTML = "" + date;</script> ISTIFANUS ALENDER. All Rights Reserved</p>
    </div>
</div>