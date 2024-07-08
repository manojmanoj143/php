<?php
include '../db/connect.php';

if(isset($_POST['signIn'])){
   $email = $_POST['email'];
   $password = $_POST['password'];
   $password = md5($password);

   $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
   $result = $conn->query($sql);

   if($result->num_rows > 0){
      session_start();
      $row = $result->fetch_assoc();
      $_SESSION['email'] = $row['email'];
      header("Location: index.php");
      exit();
   } else {
      echo "Not Found, Incorrect Email or Password";
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container mt-5" id="signIn">
        <h1 class="text-center">Sign In</h1>
        <form method="post" action="register.php">
          <div class="mb-3">
              <label for="email" class="form-label"><i class="fas fa-envelope me-2"></i>Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
          </div>
          <div class="mb-3">
              <label for="password" class="form-label"><i class="fas fa-lock me-2"></i>Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
          </div>
          <div class="text-end">
            <a href="#" class="text-decoration-none">Recover Password</a>
          </div>
         <button type="submit" class="btn btn-primary w-100 mt-3" name="signIn" onclick="">Sign In</button>
        </form>
        <p class="text-center my-3">----------or----------</p>
        <div class="text-center">
          <button class="btn btn-danger me-2"><i class="fab fa-google me-2"></i>Google</button>
          <button class="btn btn-primary"><i class="fab fa-facebook me-2"></i>Facebook</button>
        </div>
        <div class="text-center mt-3">
          <p>Don't have account yet?</p>
          <button class="btn btn-link" id="signUpButton" value="redirect">Sign Up</button>
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
      
      <!-- <script src="../js/login.js"></script> -->
</body>
</html>
