<?php include 'db.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST['title'];
  $content = $_POST['content'];
  $image = $_FILES['image']['name'];
  move_uploaded_file($_FILES['image']['tmp_name'], "images/".$image);
  $sql = "INSERT INTO blogs (title, image, content) VALUES ('$title', '$image', '$content')";
  mysqli_query($conn, $sql);
  echo "Blog Added Successfully!";
}
?>
<form method="POST" enctype="multipart/form-data">
  <input type="text" name="title" placeholder="ब्लॉग शीर्षक" required><br>
  <input type="file" name="image" required><br>
  <textarea name="content" placeholder="यहाँ अपना ब्लॉग लिखें..." rows="10" cols="50"></textarea><br>
  <button type="submit">ब्लॉग जोड़ें</button>
</form>
