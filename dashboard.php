<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Generator AI</title>
  <link rel="stylesheet" href="style/dashboard.css">
</head>
<body>
  <section class="image-generator">
    <div class="content">
      <h1>AI Image Generator Tool JavaScript</h1>
      <p>Convert your text into an image within a second using this
        JavaScript-powered AI Image Generator tool.</p>
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