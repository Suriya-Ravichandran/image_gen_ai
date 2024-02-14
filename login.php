<?php include_once "php/header/loginheader.php";?>
<body>
    <div class="wrapper">
    <section class="formlogin">
        <h2>LOGIN</h2>
        <div class="error-txt"></div>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="input-box">
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <input type="password" name="pass" placeholder="Enter your password" required>
          </div>
          <div class="input-box button">
            <input type="submit" value="Login Now">
          </div>
          <div class="text">
            <h3>create a new account?<a href="signin.php">signup</a></h3>
          </div>
          <br>
          <div class="text2">
          <h2>Back To:<a href="index.php"> Home</a></h2>
          </div>
        </form>
        </section>
      </div>
      <script src="js/login.js"></script>
</body>
</html>
