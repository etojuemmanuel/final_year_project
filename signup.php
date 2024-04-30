<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form Design</title>
      <link rel="stylesheet" href="signup.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <div class="center">
         <input type="checkbox" id="show">
         <label for="show" class="showbtn">Signup</label>
         <div class="container">
            <label for="show" class="closebtn fas fa-times" title="close"></label>
            <div class="text">
               Signup Form
            </div>
            <form action="#">
                <div class="data">
                  <label>Full Names</label>
                  <input type="text" required>
               </div>
               <div class="data">
                  <label>Phone Number</label>
                  <input type="text" required>
               </div>
               <div class="data">
                  <label>Email or Phone</label>
                  <input type="text" required>
               </div>
               <div class="data">
                  <label>Password</label>
                  <input type="password" required>
               </div>
               <div class="forgotpass">
                  <a href="#">Forgot Password?</a>
               </div>
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit">Signup</button>
               </div>
               <div class="signuplink">
                  Already have acount <a href="login.php">Login</a>
               </div>
            </form>
         </div>
    </div>   
</body>
</html>