<nav>
    <div class="top-nav">
        <ul class="contact-info">
            <li class="top-nav-item">
                <i class='bx bxs-phone'></i>
                <a href="tel:+8801973336001">+8801973336001</a>
            </li>
            <li class="top-nav-item">
                <i class='bx bxl-gmail'></i>
                <a href="mailto:care.senerity@gmail.com">care.senerity@gmail.com</a>
            </li>
            <li class="top-nav-item">
                <i class='bx bxs-map'></i>
                <a href="#">1/1, Block-B, Road-27, Dhaka - 1216</a>
            </li>
        </ul>
        <ul class="auth-links">
            <li><a href="/FrontEnd/loggedIn/userpage/profile.php">My account</a></li>
            <li><a id="login-btn" href="/FrontEnd/loggedOut/index.php">Logout</a></li>
        </ul>
    </div>
    <div class="bottom-nav">
        <div class="logo">
            <img src="/Icons&logos/LOGO.png" height="35" alt="Logo">
            <a href="/FrontEnd/loggedIn/userpage/home.php"><span class="icon first">Care</span><span class="icon second">Serenity</span></a>
        </div>
        <ul class="main-nav">
            <li><a href="/FrontEnd/loggedIn/userpage/home.php" class="active">Home</a></li>
            <span class="h-bar"></span>
            <li><a href="/FrontEnd/loggedIn/userpage/organization.php">Organizations</a></li>
            <span class="h-bar"></span>
            <li><a href="#">Adoptions</a></li>
            <span class="h-bar"></span>
            <li><a href="#">Seminars</a></li>
            <span class="h-bar"></span>
            <li><a href="#">Join Us</a></li>
            <span class="h-bar"></span>
            <li><a href="#">About Us</a></li>
            <li class="icon" onclick="toggleNotifi()">
                <img src="/Icons&logos/bell.png"><span style="background-color: <?php echo ($unreadCount > 0) ? 'red' : 'transparent'; ?>">00</span>
            </li>
            <div class="notifi-box" id="box">
                <h2>Notifications</h2>
                <div id="content">
                    <?php
                    include('/xampp/htdocs/SAD_LAB_Project/BackEnd/notificationU_BE.php');
                    ?>
                </div>
            </div>
        </ul>
    </div>
</nav>