<?php
if (!isset($_COOKIE['background-color']) && !isset($_COOKIE['already_set'])) {
  $expire = time() + 15; // 15 secondes
  setcookie("background-color", "purple", $expire);
  $expire = time() + 60 * 60 * 24; // 1 day
  setcookie("already_set", "true", $expire);
}
$background = isset($_COOKIE['background-color']) ?
  $_COOKIE['background-color'] :
  'silver';
?>
<!doctype html>
<html>
  <head>
  </head>
  <body style="background-color: <?php echo $background; ?>">
  </body>
</html>
