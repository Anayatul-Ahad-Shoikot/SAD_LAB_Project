<?php
    include('db_con.php');

    if (!isset($_SESSION['acc_id']) && !isset($_SESSION['role'])) {
        $_SESSION["negative"] = "Warning. You have to login first";
        header("Location: /FrontEnd/loggedOut/login.php");
        exit();
    } else {
        $role = $_SESSION['role'];
        $acc_id = $_SESSION['acc_id'];
        $query = "SELECT * FROM org_list WHERE acc_id != $acc_id";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="org-card">';
                    echo '<div class="x">';

                        echo '<div class="org_img"><img src="/UserImage/accountPic/' . $row['org_logo'] . '" alt=""></div>';
                        
                        echo '<div class="org_info">';
                            echo '<h1 class="org_title">' . $row['org_name'] . '</h1>';
                            echo '<p class="org_vision">' . $row['org_vision'] . '</p>';
                            echo '<p>Phone : ' . $row['org_phone'] . '</p>';
                            echo '<p>Email : ' . $row['org_email'] . '</p>';
                        echo '</div>';
                    echo '</div>';

                    echo '<div class="action_button">';
                        if ($role == 'org') {
                            echo '<a href="/FrontEnd/loggedIn/organizationpage/see_organization_profile.php?org_id=' . $row['org_id'] . '"> Visit </a>';
                            echo '<a href="/Root/D & A/Donations/U_DONATION_DASH.php?org_id=' . $row['org_id'] . '"> Donate </a>';
                        } else if ($role == 'admin') {
                            echo '<a href="/Root/Org_Page/O_VIEW_ORG.php?org_id=' . $row['org_id'] . '"> Visit </a>';
                        } else {
                            echo '<a href="/FrontEnd/loggedIn/userpage/see_organization_profile.php?org_id=' . $row['org_id'] . '"> Visit </a>';
                            echo '<a href="/Root/D & A/Donations/U_DONATION_DASH.php?org_id=' . $row['org_id'] . '"> Donate </a>';
                        }
                    echo '</div>';
                echo '</div>';
            }
        } else {
            echo 'No blog posts found.';
        }
    }

    mysqli_close($con);

?>
