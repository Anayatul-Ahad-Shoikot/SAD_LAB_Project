<?php

    include('db_con.php');

    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['query'])) {
        
        $acc_id = $_SESSION['acc_id'];
        $query1 = "SELECT org_id FROM org_list WHERE acc_id = $acc_id";
        $result1 = mysqli_query($con, $query1);
        $row1 = mysqli_fetch_assoc($result1);
        $org_id = $row1['org_id'];

        $search = $_GET['query'];
        if (!empty($search)) {
            $query = "SELECT * FROM orphan_list WHERE (first_name LIKE '%$search%' OR age LIKE '%$search%' OR gender = '$search' OR religion LIKE '%$search%' OR physical_condition LIKE '%$search%' OR education_level LIKE '%$search%' OR medical_history LIKE '%$search%') AND org_id = $org_id";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="card">';
                    echo '<div class="pb"  style="background-image: url(\'' . $row['orphan_image'] . '\');"></div>';
                    echo '<div class="info">';
                    echo '<h1>' . $row['first_name'] . '</h1>';
                    echo '</div>';
                    echo '<div class="buttons">';
                    echo '<a href="/Root/Orphanage/REMOVE_ORPHAN_BE.php?orphan_id=' . $row['orphan_id'] . '" class="message">Remove</a>';
                    echo '<a href="/Root/Orphanage/ORPHAN_PROFILE.php?orphan_id=' . $row['orphan_id'] . '" class="message"> View </a>';
                    echo '</div>';
                    echo '</div>';
                }
                $_SESSION['positive'] = "Search matched";
                // header("Location: /FrontEnd/loggedIn/organizationpage/orphan.php");
            } else {
                $_SESSION['negative'] = "No orphan found";
                // header("Location: /FrontEnd/loggedIn/organizationpage/orphan.php");
            }
        } else {
            $_SESSION['negative'] = "Nothing to search with empty word !";
            // header("Location: /FrontEnd/loggedIn/organizationpage/orphan.php");
        }
    } else {
        $_SESSION['negative'] = "Invalid request !";
        // header("Location: /FrontEnd/loggedIn/organizationpage/orphan.php");
        exit(0);
    }
    mysqli_close($con);

?>
