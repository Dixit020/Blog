<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $userMessage = $_POST['message'];

  $mail = new PHPMailer(true);

  try {
    // SMTP Settings
    $mail->isSMTP();
$mail->Host       = 'smtp.gmail.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'prajapatidixit976@gmail.com';           // ← अपनी Gmail ID
$mail->Password   = 'qgbnhsnqpbimmjtk';              // ← App Password (16 characters)
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // ← TLS encryption
$mail->Port       = 587;


    // Email Content
    $mail->setFrom($email, $name);
    $mail->addAddress('prajapatidixit976@gmail.com'); // ✅ जिस Email पर मैसेज चाहिए

    $mail->Subject = 'New Message from News17 Contact Form';
    $mail->Body    = "Name: $name\nEmail: $email\n\nMessage:\n$userMessage";

    $mail->send();
    $message = "<p class='success'>Your Message Send Sucessfuly</p>";
  } catch (Exception $e) {
    $message = "<p class='error'>Mesaage Not Send {$mail->ErrorInfo}</p>";
  }
}
?>

<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us - News17</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <!-- ✅ Responsive Navbar -->
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
  <!-- ✅ Contact Form Section -->
  <section class="contact-section">
    <div class="contact-container">
      <h1>Contact Me</h1>
      <form method="POST" action="#" class="contact-form">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required />

        <label for="email">Email Edress</label>
        <input type="email" id="email" name="email" required />

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="6" required></textarea>

        <button type="submit">send</button>
      </form>
    </div>
  </section>

</body>
</html>
