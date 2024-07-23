<?php
session_start();
unset($_SESSION['acc_id']);
unset($_SESSION['role']);
unset($_SESSION['user_id']);
unset($_SESSION['org_id']);
unset($_SESSION['positive']);
unset($_SESSION['negative']);
header("Location: /FrontEnd/loggedOut/index.php");
exit(0);
