<?php
    include_once "db_con.php";
    session_start();
    $acc_role = $_SESSION['role'];
    $out_id = mysqli_real_escape_string($con, $_POST['out_id']);
    $in_id = mysqli_real_escape_string($con, $_POST['in_id']);


    if ($acc_role == 'user'){
            $sql1 = "SELECT org_name, org_logo FROM org_list WHERE org_id = $in_id";
            $query1 = mysqli_query($con, $sql1);
            $row1 = mysqli_fetch_assoc($query1);

            $output = '<header>
                    <img src="/UserImage/accountPic/' . $row1['org_logo'] . '" alt="">
                    <div class="details">
                        <span>' . $row1['org_name'] . '</span>
                    </div>
                </header>
                <div class="chat-box">';


                $output .= '</div>
                <form action="#" class="typing-area">
                    <input type="text" class="incoming_id" name="incoming_id" value="'. $in_id .'" hidden>
                    <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
                    <input type="text" name="outgoing_id" value="'. $out_id .'" hidden>
                    <button><i class="fab fa-telegram-plane"></i></button>
                </form>';
            echo $output;

    } else {
        
    }
?>
