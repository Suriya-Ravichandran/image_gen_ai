<?php
session_start();

// Check if user is not logged in, redirect to login page
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}
?>
<?php include_once "php/header/dashboardheader.php";?>
<body>
<header class="header">
      <nav class="navbar">
        <h2 class="logo"><a href="#">Image Gen AI</a></h2>
        <ul class="links">
          <li><a href="index.php">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
        <div class="buttons">
          <a href="php/logout.php" class="signup">Logout</a>
        </div>
      </nav>
    </header>
  <section class="image-generator">
    <div class="content">
      <h1>Image Gen AI Tool </h1>
      <p>Convert your text into an image within a second using this
        Image Gen AI Image Generator tool.</p>
      <form action="#" class="generate-form">
        <input class="prompt-input" type="text" placeholder="Search your image" required>
        <div class="controls">
          <select class="img-quantity">
            <option value="1">1 Image</option>
            <option value="2">2 Images</option>
            <option value="3">3 Images</option>
            <option value="4" selected>4 Images</option>
            <option value="3">5 Images</option>
          </select>
          <button type="submit" class="generate-btn">Generate</button>
        </div>
      </form>
    </div>
  </section>
  <section class="image-gallery">
    <div class="img-card"><img src="asset/image/img-1.jpg" alt="image"></div>
    <div class="img-card"><img src="asset/image/img-2.jpg" alt="image"></div>
    <div class="img-card"><img src="asset/image/img-3.jpg" alt="image"></div>
    <div class="img-card"><img src="asset/image/img-4.jpg" alt="image"></div>
  </section>
  <script src="js/dashboard.js"></script>
</body>
</html>