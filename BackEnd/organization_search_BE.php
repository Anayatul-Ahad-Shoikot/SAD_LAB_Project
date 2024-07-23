<?php
    include('db_con.php');

    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['query'])) {
        $role = $_SESSION['role'];
        $search = $_GET['query'];
        if (!empty($search)) {
            $query = "SELECT * FROM org_list WHERE org_name LIKE '%$search%' OR org_location LIKE '%$search%'";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="blog-post">';
                    echo '<div class="x">';
                    echo '<div class="blog-post_img"><img src="/UserImage/accountPic/' . $row['org_logo'] . '" alt="img"></div>';
                    echo '<div class="blog-post_info">';
                    echo '<h1 class="blog-post_title">' . $row['org_name'] . '</h1>';
                    echo '<div class="blog-post_date">';
                    echo '<span>Phone : ' . $row['org_phone'] . '</span>';
                    echo '<span> &emsp; Email : ' . $row['org_email'] . '</span>';
                    echo '</div>';
                    echo '<p class="blog-post_content">' . $row['org_description'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="info">';
                    if ($role == 'org') {
                        echo '<a href="/Root/Org_Page/O_VIEW_ORG.php?org_id=' . $row['org_id'] . '"  class="blog-post_cta" > Visit </a>';
                    } else if ($role == 'user') {
                        echo '<a href="/Root/Org_Page/U_VIEW_ORG.php?org_id=' . $row['org_id'] . '"  class="blog-post_cta" > Visit </a>';
                        echo '<a href="/Root/D & A/Donations/U_DONATION_DASH.php?org_id=' . $row['org_id'] . '" class="blog-post_cta" > Donate </a>';
                    } else {
                        echo '<a href="#"  class="blog-post_cta" > View </a>';
                    }
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>No organizations found.</p>';
            }
        } else {
            echo '<p>Please provide what you want to search.</p>';
        }
    } else {
        header("Location: /Root/Org_Page/O_ORG.php");
        exit();
    }
    mysqli_close($con);

?>