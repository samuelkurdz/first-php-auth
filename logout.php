<?php
    session_start();
    if (isset($_SESSION['user_id'])) {
      session_destroy();
    }
    header("Location: login.php");
    // // Destroy session
    // if(session_destroy()) {
    //     // Redirecting To Home Page
    //     header("Location: login.php");
    // }
?>
