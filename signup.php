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
  <title>SignUp - My Website</title>
  <link rel="stylesheet" href="./signup.css">
</head>
<body>
  <div class="" id="form-container">
    <form action="" method="post">
    <h3 class="form-title">SignUp Here man</h3>
      <input type="text" name="user_name">
      <input type="password" name="password">
      <button type="submit">SignUp</button>
      <a href="login.php">Login Here</a>
    </form>
  </div>
</body>
</html>