<?php
  session_start();
  include('utils/connection.php');
  include('utils/functions.php');

  $user_data = checkLogin($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile - Legendary App</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="./index-page.css">
</head>
<body>

  <div class="container">
      <div class="cover-photo">
        <img src="https://via.placeholder.com/80x80" class="profile">
      </div>
      <div class="profile-name"><?php echo $user_data['user_name']?></div>
      <p class="about">User Interface Designer and<br>front-end developer</p>
      <button class="msg-btn">Message</button>
      <a href="logout.php"><button class="follow-btn">Logout</button></a>
      <div>
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-youtube"></i>
        <i class="fab fa-twitter"></i>
      </div>
    </div>

</body>
</html>