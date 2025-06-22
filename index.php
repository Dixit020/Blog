<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>News17 - Today News</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

 <!-- Navigation Bar -->
 <nav class="navbar">
  <div class="nav-container">
    <div class="logo">News17</div>
    <input type="checkbox" id="menu-toggle" />
    <label for="menu-toggle" class="menu-icon">&#9776;</label>

    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About Me</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="terms.php">Terms & Conditions</a></li>
      <li><a href="privecy.php">Privacy Policy</a></li>
    </ul>
  </div>
</nav>

  <!-- Today News -->
  <!-- Today News -->
<section class="today-news">
  <h2>Today News</h2>
  <?php
    $today = date('Y-m-d');
    $result = mysqli_query($conn, "SELECT * FROM blogs WHERE DATE(created_at) = '$today' ORDER BY created_at DESC LIMIT 1");

    if ($row = mysqli_fetch_assoc($result)) {
      $image = $row['image'];
      if (filter_var($image, FILTER_VALIDATE_URL)) {
        $image_src = $image;
      } else {
        $image_src = 'images/' . $image;
      }

      echo "<div class='blog'>
              <img src='images/22.jpg' alt='News Image' style='width:100%; border-radius:10px;'>
              <h3>{$row['title']}</h3>
              <p>".substr($row['content'], 0, 200)."...</p>
              <a class='read-more' href='blog.php?id={$row['id']}'>पूरा पढ़ें</a>
            </div>";
    } else {
      echo "<p>आज का कोई ब्लॉग उपलब्ध नहीं है।</p>";
    }
  ?>
</section>

  <!-- More Blogs -->
  <section class="more-news">
    <h2>More News</h2>
    <?php
      // आज को छोड़कर पुराने ब्लॉग दिखाओ
      $result = mysqli_query($conn, "SELECT * FROM blogs WHERE DATE(created_at) < '$today' ORDER BY created_at DESC LIMIT 2");

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<div class='blog'>
                  <h4>{$row['title']}</h4>
                  <a class='read-more' href='blog.php?id={$row['id']}'>पूरा पढ़ें</a>
                </div>";
        }
        echo "<a class='see-all' href='all_blogs.php'>See All</a>";
      } else {
        echo "<p>कोई और ब्लॉग नहीं मिला।</p>";
      }
    ?>
  </section>

</body>
</html>
