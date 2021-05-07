
<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "logreg3";


try{
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    echo ("Successfull in Connection");
}catch (MySQLi_Sql_Exception $ex){
    echo ("Error in connection");
}
if(isset($_POST['signup'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $register_query = "INSERT INTO `red`(`id`, `username`, `email`, `password`) VALUES ('$username', '$email','$password','$password')";
  try{
    $register_result = mysqli_query($conn, $register_query);
    if($register_result){
      if(mysqli_affected_rows($conn)>0){
        echo("Registration successfull");
      }else{
        echo("Error in registration");
      }
    }
  }catch(Exception $ex){
    echo("error".$ex->getMessage());
  }
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="style.css" />

  <title>Sign in & Sign up Form</title>


</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="page.html" class="sign-in-form" method="post">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" />
          </div>
          <input type="submit" value="Login" class="btn solid" />
          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a ondblclick="location.href='https://www.facebook.com/'" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a ondblclick="location.href='https://www.twitter.com/'" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a ondblclick="location.href='https://www.google.com/'" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a ondblclick="location.href='https://www.linkedin.com/'" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
        <form action="page.html" class="sign-up-form" method="post">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="username" class="form-control"  id="username" placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="text" name="email" class="form-control" id="email" placeholder="Email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" />
          </div>
          <input type="submit" class="btn" name="signup" value="Sign up" />
          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a ondblclick="location.href='https://www.facebook.com/'" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a ondblclick="location.href='https://www.twitter.com/'" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a ondblclick="location.href='https://www.google.com/'" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a ondblclick="location.href='https://www.linkedin.com/'" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
            ex ratione. Aliquid!
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="img/20.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
            laboriosam ad deleniti.
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>




  <script src="app.js"></script>
</body>

</html>