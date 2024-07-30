<?php
    include('db_con.php');

    $org_id = $_GET['org_id'];
    $search = $_GET['query'];
    $role = $_SESSION['role'];

    if (!empty($search)) {
        $query = "SELECT * FROM orphan_list WHERE (first_name LIKE '%$search%' OR age LIKE '%$search%' OR gender = '$search' OR religion LIKE '%$search%') AND org_id = $org_id";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="card">';
                echo '<div class="pb"  style="background-image: url(\'/UserImage/childpic/' . $row['orphan_image'] . '\');"></div>';
                echo '<div class="info">';
                echo '<h1>' . $row['first_name'] . '</h1>';
                echo '</div>';
                echo '<div class="buttons">';
                if ($role == 'user'){
                    echo '<a href="/Root/D & A/Donations/U_DONATION_DASH_2.php?orphan_id=' . $row['orphan_id'] . '" id="button-30">Gift</a>';
                    echo '<a href="/FrontEnd/loggedIn/userpage/see_orphan_profile.php?orphan_id=' . $row['orphan_id'] . '" id="button-30"> View </a>';
                } else if ($role == 'org'){
                    echo '<a href="#?orphan_id=' . $row['orphan_id'] . '" id="button-30">Gift</a>';
                    echo '<a href="/FrontEnd/loggedIn/organizationpage/see_orphan_profile.php?orphan_id=' . $row['orphan_id'] . '" id="button-30"> View </a>';
                }
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "No orphan matched";
        }
    } else {
        echo "insert valid query";
    }
    mysqli_close($con);
?>
