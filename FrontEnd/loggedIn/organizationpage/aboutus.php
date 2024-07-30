<?php
include("../../../BackEnd/db_con.php");
session_start();
$acc_id = $_SESSION['acc_id'];
$fetchUnreadNotificationsQuery = "SELECT COUNT(*) as unread_count FROM notifications WHERE is_read = 0 AND org_id = (SELECT org_id FROM org_list WHERE acc_id = $acc_id)";
$unreadNotificationsResult = mysqli_query($con, $fetchUnreadNotificationsQuery);
$unreadCount = 0;
if ($unreadNotificationsResult) {
    $unreadRow = mysqli_fetch_assoc($unreadNotificationsResult);
    $unreadCount = $unreadRow['unread_count'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <link rel="stylesheet" href="/FrontEnd/css/colors.css">
    <link rel="stylesheet" href="/FrontEnd/css/navbar.css">
    <link rel="stylesheet" href="/FrontEnd/css/index.css">
    <link rel="stylesheet" href="/FrontEnd/css/aboutus.css">
    <link rel="stylesheet" href="/FrontEnd/css/footer.css">
    <link rel="stylesheet" href="/FrontEnd/css/notification.css">
    <link rel="stylesheet" href="/FrontEnd/css/feedback.css">
    <link rel="icon" href="/Icons&logos/LOGO.png" type="image/x-icon">
    <title>CareSenerity | Home</title>
</head>

<body>

    <?php include "../../components/navbarO.php" ?>

    <div class="feedback">
        <?php
        if (isset($_SESSION['positive'])) {
            echo '<div class="positive">
                        <h5>' . $_SESSION['positive'] . '</h5>
                    </div>';
            unset($_SESSION['positive']);
        }
        if (isset($_SESSION['negative'])) {
            echo '<div class="negative">
                        <h5>' . $_SESSION['negative'] . '</h5>
                    </div>';
            unset($_SESSION['negative']);
        }
        ?>
    </div>

    <div id="line"></div>
    <div class="services">
        <div class="section-title">
            <p id="highlight">We provide</p>
            <p>A platform for Organizations. Stay connected with orphans and elderly to change lives with each click. Spread kindness to all.</p>
        </div>
        <div class="service-table">
            <div class="part">
                <i class='bx bxs-credit-card' id="icon_i"></i>
                <h4 class="title">RAISE FUND FOR ORGs</h4>
                <p>Facilitate financial support for organizations, empowering them to achieve their noble goals.</p>
            </div>
            <div class="part">
                <i class='bx bxs-home-heart' id="icon_i"></i>
                <h4 class="title">Enabling Adoptions, Enriching Lives</h4>
                <p>Empower life-changing adoptions, enriching lives for both adoptive parents and the adopted children.</p>
            </div>
            <div class="part">
                <i class='bx bxs-dollar-circle' id="icon_i"></i>
                <h4 class="title">Dynamic Donation System</h4>
                <p>A versatile donation system that allows seamless and flexible contributions to various causes and organizations.</p>
            </div>
            <div class="part">
                <i class='bx bxs-calendar-event' id="icon_i"></i>
                <h4 class="title">Seminars</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla consectetur adipiscing elit. Sed ac accumsan hic deserunt facere et animi</p>
            </div>
            <div class="part">
                <i class='bx bx-world' id="icon_i"></i>
                <h4 class="title">Access to Orphanage for Everyone</h4>
                <p>Ensure inclusive access to orphanages, making them accessible and reachable for everyone in need.</p>
            </div>
            <div class="part">
                <i class='bx bxs-user-plus' id="icon_i"></i>
                <h4 class="title">Join As Volunteer</h4>
                <p>Lorem ipsum dolor sit amet consectetur, consectetur adipiscing elit. Sed ac accumsan adipisicing elit. Nulla hic deserunt facere et animi</p>
            </div>
        </div>
    </div>
    <div id="line"></div>
    <div class="AboutUs">
        <div class="descriptionbox">
            <div class="session-title">
                <p>Help us to Achieve our Goal</p>
                <p id="highlight">Joining Hands, Changing Stories</p>
            </div>
            <div class="about-detail">
                <!-- <h4>Fostering Change, One Connection at a Time</h4> -->
                <p>&nbsp;&nbsp;&nbsp;Welcome to our platform, a digital space dedicated to fostering connections between caring individuals, organizations, and those in need. We aim to create meaningful impacts by facilitating connections between generous donors and vulnerable members of our society.</p>
                <br>
                <p>&nbsp;&nbsp;&nbsp;At <b>CareSenrenity.org</b> , our mission is to facilitate connections that matter. Through our intuitive interface, we enable organizations to reach out, support, and make a real difference in the lives of orphans and the elderly community members.</p>
                <br>
                <p>&nbsp;&nbsp;&nbsp;Adopt an orphan, explore orphanages and organizations, extend support with donations to specific causes or children. View detailed profiles of orphans, post thoughts on orphanage situations, hunger, and more, accompanied by photos and comments. Share moments in the gallery, embrace the opportunity to adopt a child, and anticipate upcoming services for elderly individuals. Together, let's make a difference in the lives of the vulnerable.</p>
            </div>
        </div>
        <div class="about-image">
            <img src="/Icons&logos/about_img.png" alt="">
        </div>
    </div>
    <div id="line"></div>
    <div style="margin-top:0px;" class="row no-margin">
        <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="contactUs">
        <div class="contact_form">
            <h2 class="heading">Contact Form</h2>
            <br>
            <div class="form_row">
                <div class="label"><label>Enter Name </label><span>:</span></div>
                <div class="inputbox"><input type="text" placeholder="Enter Name" name="name"></div>
            </div>
            <div class="form_row">
                <div class="label"><label>Email Address </label><span>:</span></div>
                <div class="inputbox"><input type="text" name="name" placeholder="Enter Email Address"></div>
            </div>
            <div class="form_row">
                <div class="label"><label>Mobile Number</label><span>:</span></div>
                <div class="inputbox"><input type="text" name="name" placeholder="Enter Mobile Number"></div>
            </div>
            <div class="form_row">
                <div class="label"><label>Enter Message</label><span>:</span></div>
                <div class="inputbox">
                    <textarea rows="5" placeholder="Enter Your Message"></textarea>
                </div>
            </div>
            <div class="form_row">
                <button class="btn btn-primary">Send Message</button>
            </div>
        </div>
        <div class="contact_address">
            <div class="address">
                <h2 class="heading">Address</h2>
                Ritz Mozaffor BA<br>
                1/1, B #F, R #1, S #2<br>
                Mirpur 02, Dhaka - 1216<br>
                Phone: +880 1973336001<br>
                Email: care.serenity@gmail.com<br>
                Website: www.careserenity.org<br>
            </div>
        </div>
    </div>

    <div class="creators">
        <h1 id="highlight">Our Team</h1>
        <div class="row">
            
            <div class="card">
                <div class="img-ctn">
                    <img src="/Root/AboutUs_Page/ahnaf.jpg" alt="">
                </div>
                <h2>Ahnaf Tahmid</h2>
                <p>Co-Founder</p>
                <div class="icons">
                    <a href="#"><i class='bx bxl-github'></i></a>
                    <a href="#"><i class='bx bxl-linkedin-square'></i></a>
                    <a href="https://www.facebook.com/ahnaf.fahid"><i class='bx bxl-facebook-circle'></i></a>
                </div>
            </div>

            <div class="card">
                <div class="img-ctn">
                    <img src="../../../Icons&logos/ahad.jpg" alt="Ahad">
                </div>
                <h2>Anayatul Ahad</h2>
                <p>Founder & Developer</p>
                <div class="icons">
                    <a href="#"><i class='bx bxl-github'></i></a>
                    <a href="#"><i class='bx bxl-linkedin-square'></i></a>
                    <a href="https://www.facebook.com/ahadshoikot"><i class='bx bxl-facebook-circle'></i></a>
                </div>
            </div>

            <div class="card">
                <div class="img-ctn">
                    <img src="/Root/AboutUs_Page/ela.jpg" alt="">
                </div>
                <h2>Afia Zahin</h2>
                <p>Trustee</p>
                <div class="icons">
                    <a href="#"><i class='bx bxl-github'></i></a>
                    <a href="#"><i class='bx bxl-linkedin-square'></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100070131402177"><i class='bx bxl-facebook-circle'></i></a>
                </div>
            </div>

        </div>
    </div>

    <?php include "../../components/footer.php" ?>

    <button id="scrollTopBtn" title="Go to top">↑</button>

    <script src="/FrontEnd/js/scrollupBTN.js"></script>
    <script src="/FrontEnd/js/notification_color.js"></script>
    <script src="/FrontEnd/js/feedback.js"></script>
</body>

</html>