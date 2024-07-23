<?php
include("../../../BackEnd/orphan_profile_fetch_BE.php");
$acc_id = $_SESSION['acc_id'];
$fetchUnreadNotificationsQuery = "SELECT COUNT(*) as unread_count FROM notifications WHERE is_read = 0 AND user_id = (SELECT user_id FROM user_list WHERE acc_id = $acc_id)";
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
    <link rel="stylesheet" href="/FrontEnd/css/orphan_profile.css">
    <link rel="stylesheet" href="/FrontEnd/css/footer.css">
    <link rel="stylesheet" href="/FrontEnd/css/notification.css">
    <link rel="stylesheet" href="/FrontEnd/css/feedback.css">
    <link rel="icon" href="/Icons&logos/LOGO.png" type="image/x-icon">
    <title>CareSenerity | Profile </title>
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

    <div class="container">
        <div class="left_portion">
            <div class="userDetails1">
                <div>
                    <img src="../../../UserImage/childpic/<?php echo $orphan_image ?>" alt="profile">
                </div>
                <div class="userDetails">
                    <div class="userName">
                        <h1><?php echo $first_name, " ", $last_name ?></h1>
                    </div>
                    <div class="map">
                        <i class='bx bxs-briefcase'></i>
                        <p><?php echo $org_name ?></p>
                    </div>
                    <div class="map">
                        <i class="ri-map-pin-fill ri"></i>
                        <p><?php echo $org_location ?></p>
                    </div>
                    <div class="inner_container">
                        <div class="map">
                            <i class='bx bxs-send'></i>
                            <p>Gift</p>
                        </div>
                        <div class="map">
                            <i class='bx bxs-error-alt'></i>
                            <p>Reports</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="work">
                <div class="tabs">
                    <i class='bx bxs-briefcase'></i>
                    <p>Local Gardian</p>
                </div>
                <div class="primary">
                    <h1><?php echo $guardian_name ?></h1>
                    <p><?php echo $guardian_contact ?></p>
                    <p><?php echo $guardian_location ?></p>
                </div>
            </div>
        </div>
        <div class="options">
            <a href="/Root/Orphanage/EDIT_ORPHAN_PROFILE.php?orphan_id=<?php echo $orphan_id ?>" class="btn">Edit</a>
            <a href="orphan.php" class="btn">Orphanage</a>
        </div>


        <div class="right_portion">
            <div class="plate">
                <h1 class="heading">Basic Information -</h1>
                <div class="info_box">
                    <div class="top">
                        <div class="cel">
                            <label>First Name :</label>
                            <input placeholder="<?php echo $first_name ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Last Name :</label>
                            <input placeholder="<?php echo $last_name ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Orphan ID :</label>
                            <input placeholder="<?php echo $orphan_id ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Age :</label>
                            <input placeholder="<?php echo $age ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Gender :</label>
                            <input placeholder="<?php echo $gender ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Religion :</label>
                            <input placeholder="<?php echo $religion ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Date of Birth :</label>
                            <input placeholder="<?php echo $date_of_birth ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Since :</label>
                            <input placeholder="<?php echo $since ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Adoption Status :</label>
                            <?php
                            if ($adoption_status == '0') {
                                $adoption_status = 'Available';
                            } else {
                                $adoption_status = 'Adopted';
                            }
                            ?>
                            <input placeholder="<?php echo $adoption_status ?>" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="plate">
                <h1 class="heading">Other Information -</h1>
                <div class="info_box">
                    <div class="top">
                        <div class="cel">
                            <label>Family Status :</label>
                            <input placeholder="<?php echo $family_status ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Physical Condition :</label>
                            <input placeholder="<?php echo $physical_condition ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Education :</label>
                            <input placeholder="<?php echo $education_level ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Medical History :</label>
                            <input placeholder="<?php echo $medical_history ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Hobby :</label>
                            <input placeholder="<?php echo $hobby ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Favourite Foods :</label>
                            <input placeholder="<?php echo $favorite_food ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Favourite Games :</label>
                            <input placeholder="<?php echo $favorite_game ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Skills :</label>
                            <input placeholder="<?php echo $skills ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Dreams :</label>
                            <input placeholder="<?php echo $dreams ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Problems :</label>
                            <input placeholder="<?php echo $problems ?>" disabled>
                        </div>
                        <div class="cel">
                            <label>Comments :</label>
                            <input placeholder="<?php echo $other_comments ?>" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "../../components/footer.php" ?>

    <button id="scrollTopBtn" title="Go to top">↑</button>

    <script src="/FrontEnd/js/scrollupBTN.js"></script>
    <script src="/FrontEnd/js/notification_hovertime.js"></script>
    <script src="/FrontEnd/js/notification_popup.js"></script>
    <script src="/FrontEnd/js/notification_color.js"></script>
    <script src="/FrontEnd/js/feedback.js"></script>

</body>

</html>