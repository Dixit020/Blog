<?php include 'db.php'; ?>
<?php
  if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $result = mysqli_query($conn, "SELECT * FROM blogs WHERE id = $id");
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    } else {
      echo "ब्लॉग नहीं मिला!";
      exit;
    }
  } else {
    echo "Invalid request!";
    exit;
  }
?>
<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $row['title']; ?> - News17</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #f7f7f7;
    }

.navbar {
  background-color: #003366;
  padding: 10px 20px;
  color: white;
}

.nav-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
}

.logo {
  font-size: 24px;
  font-weight: bold;
  color: white;
}

.nav-links {
  list-style: none;
  display: flex;
  gap: 20px;
}

.nav-links li a {
  color: white;
  text-decoration: none;
  font-size: 16px;
}

.menu-icon {
  display: none;
  font-size: 26px;
  cursor: pointer;
  color: white;
}

#menu-toggle {
  display: none;
}

@media (max-width: 730px) {
  .nav-links {
    flex-direction: column;
    width: 100%;
    display: none;
    margin-top: 10px;
  }

  #menu-toggle:checked + .menu-icon + .nav-links {
    display: flex;
  }

  .menu-icon {
    display: block;
  }
}

/* Responsive Part */
@media (max-width: 730px) {
  .menu-icon {
    display: block;
  }

  .nav-links {
    flex-direction: column;
    width: 100%;
    display: none;
    background-color: #002244;
    margin-top: 10px;
    border-radius: 5px;
  }

  #menu-toggle:checked + .menu-icon + .nav-links {
    display: flex;
  }

  .nav-links li {
    text-align: center;
    margin: 10px 0;
  }
}

    .blog-full {
      max-width: 800px;
      margin: auto;
      padding: 20px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .blog-full img {
      width: 100%;
      border-radius: 10px;
    }

    .blog-full h1 {
      margin-top: 20px;
      font-size: 28px;
      color: #222;
    }

    .blog-full p {
      line-height: 1.8;
      color: #444;
      font-size: 16px;
    }
  </style>
</head>
<body>

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

  <div class="blog-full">
    <?php
      $image = $row['image'];
      if (filter_var($image, FILTER_VALIDATE_URL)) {
        $image_src = $image;
      } else {
        $image_src = 'images/' . $image;
      }
    ?>
    <img src="images/22.jpg"<?php echo $image_src; ?>" alt="Blog Image">
    <h1><?php echo $row['title']; ?></h1>
    <p><?php echo nl2br($row['content']); ?></p>
  </div>

</body>
</html>
