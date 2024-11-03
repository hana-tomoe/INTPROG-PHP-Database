<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Group 2 log In</title>
 <link rel="icon" href="Assets/logo.jpg" type="image/png">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
 <link rel="stylesheet" href="stye.css">
</head>

<body>
 <div class="container" id="signup" style="display:none;">
  <h1 class="form-title">Register</h1>
  <form method="post" action="register.php" onsubmit="return validateSignUp()">
   <div class="input-group">
    <i class="fas fa-user"></i>
    <input type="text" name="fName" id="fName" placeholder="First Name" required>
    <label for="fname">First Name</label>
   </div>
   <div class="input-group">
    <i class="fas fa-user"></i>
    <input type="text" name="lName" id="lName" placeholder="Last Name" required>
    <label for="lName">Last Name</label>
   </div>
   <div class="input-group">
    <i class="fas fa-envelope"></i>
    <input type="email" name="email" id="signupEmail" placeholder="Email" required>
    <label for="email">Email</label>
   </div>
   <div class="input-group">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" id="signupPassword" placeholder="Password" required>
    <label for="password">Password</label>
   </div>
   <input type="submit" class="btn" value="Sign Up" name="signUp">
  </form>
  <p class="or">
   ----------or--------
  </p>
  <div class="icons">
   <a href="https://accounts.google.com/ServiceLogin" target="_blank">
    <i class="fab fa-google"></i>
   </a>
   <a href="https://www.facebook.com/login" target="_blank">
    <i class="fab fa-facebook"></i>
   </a>
  </div>
  <div class="links">
   <p>Already Have Account ?</p>
   <button id="signInButton">Sign In</button>
  </div>
 </div>
 <div class="container" id="signIn">
  <img src="Assets/logo.jpg" alt="Sign In Image" class="sign-in-image">
  <h1 class="form-title">Sign In</h1>
  <form method="post" action="register.php" onsubmit="return validateSignIn()">
   <div class="input-group">
    <i class="fas fa-envelope"></i>
    <input type="email" name="email" id="signinEmail" placeholder="Email" required>
    <label for="email">Email</label>
   </div>
   <div class="input-group">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" id="signinPassword" placeholder="Password" required>
    <label for="password">Password</label>
   </div>
   <p class="recover">
    <a href="#">Recover Password</a>
   </p>
   <input type="submit" class="btn" value="Sign In" name="signIn">
  </form>
  <p class="or">
   ----------or--------
  </p>
  <div class="icons">
   <a href="https://accounts.google.com/ServiceLogin" target="_blank">
    <i class="fab fa-google"></i>
   </a>
   <a href="https://www.facebook.com/login" target="_blank">
    <i class="fab fa-facebook"></i>
   </a>
  </div>
  <div class="links">
   <p>Don't have account yet?</p>
   <button id="signUpButton">Sign Up</button>
  </div>
 </div>
 <script src="script.js"></script>
</body>

</html>