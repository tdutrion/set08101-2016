<?php
if (isset($_POST['username'])) {
  die($_POST['username']);
}
?>
<form method="post">
  <label for="username">Username</label>
  <input type="text" name="username" id="username">
</form>
