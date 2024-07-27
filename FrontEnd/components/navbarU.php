<?php

    function getCurrentURLPath() {
        return $_SERVER['REQUEST_URI'];
    }

    $current_url = getCurrentURLPath();

    $nav_options = [
        'home' => [
            '/FrontEnd/loggedIn/userpage/home.php',
            '/FrontEnd/loggedIn/userpage/create_blog.php',
            '/FrontEnd/loggedIn/userpage/view_blog.php'
        ],
        'organizations' => [
            '/FrontEnd/loggedIn/userpage/organization.php',
            '/FrontEnd/loggedIn/userpage/see_organization_orphanage.php',
            '/FrontEnd/loggedIn/userpage/see_organization_profile.php',
            '/FrontEnd/loggedIn/userpage/see_orphan_profile.php'
        ],
        'adoptions' => [
            '/FrontEnd/loggedIn/userpage/adoption.php'
        ],
        'seminars' => [
            '/FrontEnd/loggedIn/userpage/seminar.php'
        ],
        'joinus' => [
            '/FrontEnd/loggedIn/userpage/joinus.php'
        ],
        'aboutus' => [
            '/FrontEnd/loggedIn/userpage/aboutus.php'
        ],
        'myprofile' => [
            '/FrontEnd/loggedIn/userpage/profile.php',
            '/FrontEnd/loggedIn/userpage/profile_edit.php',
            '/FrontEnd/loggedIn/userpage/chat_list.php'
        ]
    ];

    function getActiveOption($current_url, $nav_options) {
        foreach ($nav_options as $option => $paths) {
            foreach ($paths as $path) {
                if (strpos($current_url, $path) !== false) {
                    return $option;
                }
            }
        }
        return '';
    }
    $active_option = getActiveOption($current_url, $nav_options);
?>
<nav>
    <div class="top-nav">
        <ul class="contact-info">
            <li class="top-nav-item">
                <i class='bx bxs-phone'></i>
                <a href="tel:+8801973336001">+880 1973336001</a>
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
            <li><a href="/FrontEnd/loggedIn/userpage/profile.php" class="<?php echo $active_option == 'myprofile' ? 'active' : ''; ?>">My account</a></li>
            <li><a id="login-btn" href="/FrontEnd/loggedOut/index.php">Logout</a></li>
        </ul>
    </div>
    <div class="bottom-nav">
        <div class="logo">
            <!-- <img src="/Icons&logos/LOGO.png" height="35" alt="Logo"> -->
            <script type="module" src="https://cdn.jsdelivr.net/npm/ldrs/dist/auto/ripples.js"></script>
            <l-ripples
            size="45"
            speed="2"
            color="#f3254e" 
            ></l-ripples>
            <a href="/FrontEnd/loggedIn/userpage/home.php"><span class="icon first">Care</span><span class="icon second">Serenity</span></a>
        </div>
        <ul class="main-nav">
            <li><a href="/FrontEnd/loggedIn/userpage/home.php" class="<?php echo $active_option == 'home' ? 'active' : ''; ?>">Home</a></li>
            <span class="h-bar"></span>
            <li><a href="/FrontEnd/loggedIn/userpage/organization.php" class="<?php echo $active_option == 'organizations' ? 'active' : ''; ?>">Organizations</a></li>
            <span class="h-bar"></span>
            <li><a href="#" class="<?php echo $active_option == 'adoptions' ? 'active' : ''; ?>">Adoptions</a></li>
            <span class="h-bar"></span>
            <li><a href="#" class="<?php echo $active_option == 'seminars' ? 'active' : ''; ?>">Seminars</a></li>
            <span class="h-bar"></span>
            <li><a href="#" class="<?php echo $active_option == 'joinus' ? 'active' : ''; ?>">Join Us</a></li>
            <span class="h-bar"></span>
            <li><a href="/FrontEnd/loggedIn/userpage/aboutus.php" class="<?php echo $active_option == 'aboutus' ? 'active' : ''; ?>">About Us</a></li>
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