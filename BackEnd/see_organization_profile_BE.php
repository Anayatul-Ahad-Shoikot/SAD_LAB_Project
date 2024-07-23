<?php

    include('db_con.php');
    session_start();
    
    if (isset($_GET['org_id'])) {
        $org_id = $_GET['org_id'];
        $sql = "SELECT * FROM org_list Where org_id = $org_id";
        $sql_result = mysqli_query($con, $sql);
        if (mysqli_num_rows($sql_result) > 0 ) {
            $row = mysqli_fetch_array($sql_result);
            $org_name = $row['org_name'];
            $org_description = $row['org_description'];
            $org_email = $row['org_email'];
            $org_phone = $row['org_phone'];
            $established = $row['established'];
            $org_website = $row['org_website'];
            $org_location = $row['org_location'];
            $org_vision = $row['org_vision'];
            $org_reviews = $row['org_reviews'];
            $org_logo = $row['org_logo'];
        } 
        else {
            echo "User data not found.";
        }
    }
