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

  $out_id = mysqli_real_escape_string($con, $_GET['out_id']);
  $in_id = mysqli_real_escape_string($con, $_GET['in_id']);
  $sql = mysqli_query($con, "SELECT user_name, user_id, user_image FROM user_list WHERE user_id = $in_id");
  if(mysqli_num_rows($sql) > 0){
    $row = mysqli_fetch_assoc($sql);
  }else{
    header("location: users.php");
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
      <a href="chat_list.php" class="btn">back</a>
    </div>
    <div class="chat-area">
      <header>
        <img src="/UserImage/accountPic/<?php echo $row['user_image'] ?>" alt="">
        <div class="details">
          <span><?php echo $row['user_name'] ?></span>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $in_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <input type="text" name="outgoing_id" value="<?php echo $out_id; ?>" hidden>
        <button><i class="fab fa-telegram-plane"></i>send</button>
      </form>
    </div>
  </div>

    <?php include "../../components/footer.php" ?>

    <button id="scrollTopBtn" title="Go to top">↑</button>
    
    <script src="/FrontEnd/js/chat.js"></script>
    <script src="/FrontEnd/js/scrollupBTN.js"></script>
    <script src="/FrontEnd/js/notification_hovertime.js"></script>
    <script src="/FrontEnd/js/notification_popup.js"></script>
    <script src="/FrontEnd/js/notification_color.js"></script>
    <script src="/FrontEnd/js/feedback.js"></script>

</body>
</html>
