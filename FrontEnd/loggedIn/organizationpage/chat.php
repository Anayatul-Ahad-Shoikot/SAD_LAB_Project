<?php 
  include("../../../BackEnd/db_con.php");
  session_start();
  $acc_id = $_SESSION['acc_id'];
  $role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="/FrontEnd/css/colors.css">
    <link rel="stylesheet" href="/FrontEnd/css/navbar.css">
    <link rel="stylesheet" href="/FrontEnd/css/chatstyle.css">
    <link rel="stylesheet" href="/FrontEnd/css/notification.css">
    <link rel="icon" href="/Icons&logos/LOGO.png" type="image/x-icon">
    <title>CareSenerity | Chats</title>
</head>
<body>

    <?php include "../../components/navbarO.php" ?>

    <div class="container">
        <header>
            <img src="/UserImage/accountPic/user.png" width="30px" height="30px">
            <h1> Normal User Name </h1>
        </header>
        <div class="chat-box">
            chats fetch here
            chats fetch here
            chats fetch here
            chats fetch here
            chats fetch here
            chats fetch here
            chats fetch here
            chats fetch here
            chats fetch here
        </div>
        <div class="chat-input">
            <input type="text" id="messageInput" placeholder="Type your message...">
            <button id="sendButton">Send</button>
        </div>
    </div>


    <script src="/FrontEnd/js/scrollupBTN.js"></script>
    <script src="/FrontEnd/js/notification_color.js"></script>
</body>
</html>
