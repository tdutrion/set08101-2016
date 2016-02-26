<?php
  $lecturerId = (int)filter_input(INPUT_GET, 'lecturer', FILTER_SANITIZE_NUMBER_INT);
  if (!isset($lecturers[$lecturerId])) {
    throw new Exception('Unable to find the specified lecturer');
  }
  $lecturer = $lecturers[$lecturerId];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SET08101 - Lecture 09 - staff-detail.php</title>
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
    <h1><?php echo "{$lecturer->firstname} {$lecturer->surname}"; ?></h1>
    <table>
      <tr>
        <th>Office</th>
        <th>Phone</th>
      </tr>
      <tr>
        <td><?php echo $lecturer->office; ?></td>
        <td><?php echo $lecturer->phone; ?></td>
      </tr>
    </table>
  </body>
</html>
