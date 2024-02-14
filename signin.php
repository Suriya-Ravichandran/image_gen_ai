<?php include_once "php/header/signupheader.php";?>
<body>
    <div class="wrapper">
      <section class="formsignup">
        <h2>SIGNUP</h2>
        <form action="#" enctype="multipart/form-data">
        <div class="error-txt"></div>
          <div class="input-box">
            <input type="text" name="name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <input type="text" name="phone" placeholder="Enter your Phone no" required>
          </div>
          <div class="input-box">
            <input type="password" name="pass" placeholder="Create password" required>
          </div>
          <div class="input-box">
            <input type="password" name="pass2" placeholder="Confirm password" required>
          </div>
          <div class="input-box button">
            <input type="Submit" value="Signup Now">
          </div>
          <div class="text">
            <h3>Already have an account? <a href="login.php">Login now</a></h3>
          </div>
          <br>
          <div class="text2">
          <h2>Back To:<a href="index.php"> Home</a></h2>
          </div>
        </form>
      </section>
      </div>
      <script src="js/signin.js"></script>
</body>
</html>