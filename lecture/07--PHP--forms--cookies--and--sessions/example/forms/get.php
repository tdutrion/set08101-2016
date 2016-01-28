<?php
if (isset($_GET['username'])) {
  die($_GET['username']);
}
?>
<form method="get">
  <label for="username">Username</label>
  <input type="text" name="username" id="username">
</form>
