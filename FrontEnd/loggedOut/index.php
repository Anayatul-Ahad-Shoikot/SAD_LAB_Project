<?php 
    include '../../BackEnd/index_BE.php' ;
    include '../../BackEnd/blog_fetch_BE.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/Icons&logos/LOGO.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <link rel="stylesheet" href="/FrontEnd/css/colors.css">
    <link rel="stylesheet" href="/FrontEnd/css/index.css">
    <link rel="stylesheet" href="/FrontEnd/css/navbar.css">
    <link rel="stylesheet" href="/FrontEnd/css/footer.css">
    <title>CareSenerity</title>
</head>

<body>
    <?php include "../components/navbar.php" ?>
    <div class="hero">
        <div class="section__container header__container">
            <h1>Join us to make Lives Better</h1>
            <p>
                A platform for Organizations. Stay connected with orphans and elderly to change lives with each click.
                Spread kindness to all.
            </p>
        </div>
        <div class="row diag-ro" id="info_web">
            <div class="about-diag" id="info_cell">
                <div class="icon"><i class="fas fa-arrow-right"></i></div>
                <div class="tex">
                    <p id="text">There are over</p>
                    <h3 id="count"><?php echo $total_orphans ?></h3>
                    <p id="text">orphans to help</p>
                </div>
            </div>
            <div class="about-diag" id="info_cell">
                <div class="icon"><i class="fas fa-arrow-right"></i></div>
                <div class="tex">
                    <p id="text">We have total</p>
                    <h3 id="count"><?php echo $total_organizations ?></h3>
                    <p id="text">organizations</p>
                </div>
            </div>
            <div class="about-diag" id="info_cell">
                <div class="icon"><i class="fas fa-arrow-right"></i></div>
                <div class="tex">
                    <p id="text">Almost</p>
                    <h3 id="count"><?php echo $total_users ?></h3>
                    <p id="text">users</p>
                </div>
            </div>
            <div class="about-diag" id="info_cell">
                <div class="icon"><i class="fas fa-arrow-right"></i></div>
                <div class="tex">
                    <p id="text">There are over</p>
                    <h3 id="count"><?php echo $total_donation_Serverd ?></h3>
                    <p id="text">Volunteers</p>
                </div>
            </div>
            <div class="about-diag" id="info_cell">
                <div class="icon"><i class="fas fa-arrow-right"></i></div>
                <div class="tex">
                    <p id="text">We serverd over</p>
                    <h3 id="count"><?php echo $total_donation_Serverd ?></h3>
                    <p id="text">BDT as Donation</p>
                </div>
            </div>
        </div>
    </div>
    <div id="line"></div>
    <div class="services" id="services">
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
    
    <div class="donations" id="donations">
        <div class="section-title">
            <p id="highlight">Recent raised funds</p>
        </div>
        <div class="cards-container">
            <div class="card">
                <div class="card-img">
                    <img src="/UserImage/donationPic/c1.jpg" alt="">
                    <div class="amount">
                        <span class="raised">
                            Raised : $764
                        </span>
                        <span class="target">
                            Goal : $1500
                        </span>
                        <button class="btn">Donate</button>
                    </div>
                </div>
                <div class="card-details">
                    <h4>CONNECTING THE PEOPLE</h4>
                    <p>he point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="/UserImage/donationPic/c1.jpg" alt="">
                    <div class="amount">
                        <span class="raised">
                            RAISED: $980
                        </span>
                        <span class="target">
                            TARGET: $150000
                        </span>
                        <button class="btn">Donate</button>
                    </div>
                </div>
                <div class="card-details">
                    <h4>Flood fund</h4>
                    <p>due to recent foold we need funs for poor people. they are striving.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="/UserImage/donationPic/c1.jpg" alt="">
                    <div class="amount">
                        <span class="raised">
                            RAISED: $764
                        </span>
                        <span class="target">
                            TARGET: $1500
                        </span>
                        <button class="btn">Donate</button>
                    </div>
                </div>
                <div class="card-details">
                    <h4>CONNECTING THE PEOPLE</h4>
                    <p>he point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="/UserImage/donationPic/c1.jpg" alt="">
                    <div class="amount">
                        <span class="raised">
                            RAISED: $764
                        </span>
                        <span class="target">
                            TARGET: $1500
                        </span>
                        <button class="btn">Donate</button>
                    </div>
                </div>
                <div class="card-details">
                    <h4>CONNECTING THE PEOPLE</h4>
                    <p>he point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="/UserImage/donationPic/c1.jpg" alt="">
                    <div class="amount">
                        <span class="raised">
                            RAISED: $764
                        </span>
                        <span class="target">
                            TARGET: $1500
                        </span>
                        <button class="btn">Donate</button>
                    </div>
                </div>
                <div class="card-details">
                    <h4>CONNECTING THE PEOPLE</h4>
                    <p>he point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="/UserImage/donationPic/c1.jpg" alt="">
                    <div class="amount">
                        <span class="raised">
                            RAISED: $764
                        </span>
                        <span class="target">
                            TARGET: $1500
                        </span>
                        <button class="btn">Donate</button>
                    </div>
                </div>
                <div class="card-details">
                    <h4>CONNECTING THE PEOPLE</h4>
                    <p>he point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="/UserImage/donationPic/c1.jpg" alt="">
                    <div class="amount">
                        <span class="raised">
                            RAISED: $764
                        </span>
                        <span class="target">
                            TARGET: $1500
                        </span>
                        <button class="btn">Donate</button>
                    </div>
                </div>
                <div class="card-details">
                    <h4>CONNECTING THE PEOPLE</h4>
                    <p>he point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="/UserImage/donationPic/c1.jpg" alt="">
                    <div class="amount">
                        <span class="raised">
                            RAISED: $764
                        </span>
                        <span class="target">
                            TARGET: $1500
                        </span>
                        <button class="btn">Donate</button>
                    </div>
                </div>
                <div class="card-details">
                    <h4>CONNECTING THE PEOPLE</h4>
                    <p>he point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="/UserImage/donationPic/c1.jpg" alt="">
                    <div class="amount">
                        <span class="raised">
                            RAISED: $764
                        </span>
                        <span class="target">
                            TARGET: $1500
                        </span>
                        <button class="btn">Donate</button>
                    </div>
                </div>
                <div class="card-details">
                    <h4>CONNECTING THE PEOPLE</h4>
                    <p>he point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="/UserImage/donationPic/c1.jpg" alt="">
                    <div class="amount">
                        <span class="raised">
                            RAISED: $764
                        </span>
                        <span class="target">
                            TARGET: $1500
                        </span>
                        <button class="btn">Donate</button>
                    </div>
                </div>
                <div class="card-details">
                    <h4>CONNECTING THE PEOPLE</h4>
                    <p>he point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="line"></div>

    <div class="AboutUs" id="AboutUs">
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
    <div class="blog" id="blogs">
        <div class="section-title">
            <h2 id="highlight">Blog</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum sit nibh amet egestas tellus.</p>
        </div>
        <div class="cards-container">
            <?php
                include('../../BackEnd/blog_show_for_landing_page.php');
            ?>
        </div>
    </div>
    <div id="line"></div>
    <div style="margin-top:0px;" class="row no-margin" id="contactUs">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3650.582336034878!2d90.4471350761669!3d23.79788287863816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1721831420744!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="contactUs">
        <div class="contact_form">
            <h2 id="highlight">Contact Form</h2>
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
                <button id="button-30">Send Message</button>
            </div>
        </div>
        <div class="contact_address">
            <div class="address">
                <h2 id="highlight">Address</h2>
                Ritz Mozaffor BA<br>
                1/1, B #F, R #1, S #2<br>
                Mirpur 02, Dhaka - 1216<br>
                Phone: +880 1973336001<br>
                Email: care.serenity@gmail.com<br>
                Website: www.careserenity.org<br>
            </div>
        </div>
    </div>

    <?php include "../components/footer.php" ?>

    <button id="scrollTopBtn" title="Go to top"><i class='bx bx-chevrons-up bx-burst' ></i></button>

    <script src="/FrontEnd/js/nav_scroll.js"></script>        
    <script src="/FrontEnd/js/scrollupBTN.js"></script>
</body>

</html>