<?php
  include('connection.php');
  session_start();
  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty(trim($user_name)) && !empty(trim($password && !is_numeric($user_name)))) {
      //  read from database
      $query = "select * from users where user_name = '$user_name' limit 1";
      $result = mysqli_query($con, $query);

      // checking data validity
      if($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);
        if ($user_data['password'] === $password) {
          $_SESSION['user_id'] = $user_data['user_id'];
          header("Location: index.php");
          die;
        } else {
          echo 'wrong user name or password!';
        }
      } else {
        echo 'user not found!';
      }
    } else {
      echo 'enter valid credentials';
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - My Website</title>
</head>
<body>
  <div class="" id="form-container">
    <form action="" method="post">
    <h3 class="form-title">Login Here man</h3>
      <input type="text" name="user_name">
      <input type="password" name="password">
      <button type="submit">LogIn</button>
      <a href="signup.php">SignUp Here</a>
    </form>
  </div>
</body>
</html>