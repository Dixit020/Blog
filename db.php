<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "news17";

$conn = mysqli_connect("sql206.infinityfree.com", "if0_39296873", "12ab34", "if0_39296873_blogs");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
