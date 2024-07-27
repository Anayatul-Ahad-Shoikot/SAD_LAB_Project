<?php
include("../../../BackEnd/db_con.php");
session_start();
$acc_id = $_SESSION['acc_id'];
$fetchUnreadNotificationsQuery = "SELECT COUNT(*) as unread_count FROM notifications WHERE is_read = 0 AND user_id = (SELECT user_id FROM user_list WHERE acc_id = $acc_id)";
$unreadNotificationsResult = mysqli_query($con, $fetchUnreadNotificationsQuery);
$unreadCount = 0;
if ($unreadNotificationsResult) {
    $unreadRow = mysqli_fetch_assoc($unreadNotificationsResult);
    $unreadCount = $unreadRow['unread_count'];
}

$sql = mysqli_query($con, "SELECT user_name, user_image FROM user_list WHERE acc_id = {$_SESSION['acc_id']}");
if (mysqli_num_rows($sql) > 0) {
    $row = mysqli_fetch_assoc($sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <link rel="stylesheet" href="/FrontEnd/css/colors.css">
    <link rel="stylesheet" href="/FrontEnd/css/navbar.css">
    <link rel="stylesheet" href="/FrontEnd/css/chat.css">
    <link rel="stylesheet" href="/FrontEnd/css/notification.css">
    <link rel="icon" href="/Icons&logos/LOGO.png" type="image/x-icon">
    <title>CareSenerity | Chats</title>
</head>

<body>

    <?php include "../../components/navbarU.php" ?>

    <div class="container">
        <div class="users">
            <div class="search">
                <a href="profile.php" id="button-30">back</a>
                <input type="text" placeholder="Search organizations by name...">
            </div>
            <section>
                <div class="search-list">
                    
                </div>
                <div class="inbox-list">
                    <p>Previous chats</p>
                    <?php
                    include '../../../BackEnd/chat_previous_list_BE.php';
                    ?>
                </div>
            </section>
        </div>
        <div class="chat-area">

        </div>
    </div>

    <script src="/FrontEnd/js/chat_user.js"></script>
    <script src="/FrontEnd/js/notification_hovertime.js"></script>
    <script src="/FrontEnd/js/notification_popup.js"></script>
    <script src="/FrontEnd/js/notification_color.js"></script>

</body>

</html>