<?php
  function checkLogin($con) {
    // checking if user_id exist and if it exist, if it belongs to a registered User
    if (isset($_SESSION['user_id'])) {
      $id = $_SESSION['user_id'];
      $query = "select * from users where user_id = '$id' limit 1";
      $result = mysqli_query($con, $query);

      if($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);
        return $user_data;
      }
    } else {
      // Redirecting To login Page
      header("Location: login.php");
      die;
    }
  }

?>