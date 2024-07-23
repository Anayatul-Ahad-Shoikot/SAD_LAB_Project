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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="/FrontEnd/css/colors.css">
    <link rel="stylesheet" href="/FrontEnd/css/navbar.css">
    <link rel="stylesheet" href="/FrontEnd/css/chat.css">
    <link rel="stylesheet" href="/FrontEnd/css/footer.css">
    <link rel="stylesheet" href="/FrontEnd/css/notification.css">
    <link rel="stylesheet" href="/FrontEnd/css/feedback.css">
    <link rel="icon" href="/Icons&logos/LOGO.png" type="image/x-icon">
    <title>CareSenerity | Chats</title>
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
        
        <div class="options">
            <a href="orphan.php" class="btn">Orphanage</a>
            <a href="volunteer.php" class="btn">Volunteers</a>
            <a href="profile.php" class="btn">Profile</a>
        </div>

        <div class="users">
            <header>
                <div class="content">
                    <?php
                        include("../../../BackEnd/db_con.php");
                        $sql = mysqli_query($con, "SELECT org_name, org_logo FROM org_list WHERE acc_id = {$_SESSION['acc_id']}");
                        if (mysqli_num_rows($sql) > 0) {
                            $row = mysqli_fetch_assoc($sql);
                        }
                    ?>
                    <img src="../../../UserImage/accountPic/<?php echo $row['org_logo']; ?>" alt="image">
                    <div class="details">
                        <span><?php echo $row['org_name'] ?></span>
                    </div>
                </div>
            </header>
            <div class="search">
                <span class="text">Search name to start chat</span>
                <input type="text" placeholder="Enter name to search...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">

            </div>
        </div>
    </div>


    <?php include "../../components/footer.php" ?>

    <button id="scrollTopBtn" title="Go to top">↑</button>
    
    <script src="/FrontEnd/js/users.js"></script>
    <script src="/FrontEnd/js/scrollupBTN.js"></script>
    <script src="/FrontEnd/js/notification_hovertime.js"></script>
    <script src="/FrontEnd/js/notification_popup.js"></script>
    <script src="/FrontEnd/js/notification_color.js"></script>
    <script src="/FrontEnd/js/feedback.js"></script>

</body>

</html>