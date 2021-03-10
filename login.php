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
  <title>Login - Legendary App</title>
  <link rel="stylesheet" href="./form.css" />
</head>
<body>

  <div class="login-page">
    <div class="form">
      <form class="login-form" method="post">
        <input type="text" name="user_name" placeholder="full name" required/>
        <input type="password" name="password" placeholder="password" required />
        <button>login</button>
        <p class="message">
          Not registered? <a href="signup.php">Create an account</a>
        </p>
      </form>
    </div>
  </div>
</body>
</html>