<?php
include("../../../BackEnd/user_profile_fetch_BE.php");
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
    <link rel="stylesheet" href="/FrontEnd/css/profile.css">
    <link rel="stylesheet" href="/FrontEnd/css/footer.css">
    <link rel="stylesheet" href="/FrontEnd/css/notification.css">
    <link rel="stylesheet" href="/FrontEnd/css/feedback.css">
    <link rel="icon" href="/Icons&logos/LOGO.png" type="image/x-icon">
    <title>CareSenerity | Profile </title>
</head>

<body>

    <?php include "../../components/navbarU.php" ?>

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
        <div class="accounnt-information-container">
                <div class="account-picture">
                    <img src="../../../UserImage/accountPic/<?php echo $user_image ?>" alt="profile">
                </div>
                <div class="account-data">
                    <h1><?php echo $user_name ?></h1>
                    <p>Location : <?php echo $user_address, ", ", $user_location ?></p>
                    <p>Email : <?php echo $acc_email ?></p>
                    <p>Contact : <?php echo $user_contact ?></p>
                    
                    <p>Account Type : <?php echo $role ?></p>
                </div>
                <div class="biography">
                    <h1>Occupation</h1>
                    <p><?php echo $user_job ?></p></p>
                </div>
        </div>

        <div class="options">
            <a href="chat_list.php" id="button-30">Chats</a>
            <a href="volunteer.php" id="button-30">Volunteers</a>
            <a href="profile_edit.php" id="button-30">Profile Info</a>
        </div>

        <div class="short-report">
            <h1>Need idea what to put here</h1>
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