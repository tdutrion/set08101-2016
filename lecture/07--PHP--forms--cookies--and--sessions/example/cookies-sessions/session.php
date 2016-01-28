<?php
session_save_path(__DIR__ . '/sessions');
session_start();
$currentUsername = null;
if (isset($_POST['username'])) {
   $_SESSION['username'] = $_POST['username'];
}
if (isset($_SESSION['username'])) {
  $currentUsername = $_SESSION['username'];
}
if ($currentUsername) {
  echo "<h1>$currentUsername</h1>";
}
?>
<form method="post">
  <label for="username">Change username</label>
  <input type="text" name="username" id="username">
</form>
