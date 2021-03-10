<?php
  session_start();
  include('connection.php');
  include('functions.php');

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    echo "$user_name, $password";

    if (!empty(trim($user_name)) && !empty(trim($password && !is_numeric($user_name)))) {
      $user_id = rand();
      // save to database
      $query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";
      mysqli_query($con, $query);
      header("Location: login.php");
      die;
    } {
      echo 'Enter valid information!';
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SignUp - Legendary App</title>
  <link rel="stylesheet" href="./form.css" />
</head>
<body>
  <div class="login-page">
    <div class="form">
      <form class="login-form" method="post">
        <input type="text" placeholder="Full Name" name="user_name" required />
        <input type="password" placeholder="password" name="password" required />
        <button>create account</button>
          <p class="message">Already registered? <a href="login.php">Sign In</a></p>
      </form>
    </div>
  </div>
</body>
</html>