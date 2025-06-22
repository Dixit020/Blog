<!-- <?php
$conn = new mysqli("localhost", "root", "", "news17");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $title = $_POST['title'];
  $content = $_POST['content'];
  $image = $_POST['image']; // image name (assume uploaded)

  $sql = "INSERT INTO blogs (title, content, image) VALUES ('$title', '$content', '$image')";
  $conn->query($sql);
  echo "Blog Added!";
}
?> -->
