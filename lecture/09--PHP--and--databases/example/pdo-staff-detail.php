<?php
  require 'src/Lecturer.php';
  require 'src/DbConnection.php';

  $lecturerId = (int)filter_input(INPUT_GET, 'lecturer', FILTER_SANITIZE_NUMBER_INT);
  $db = new DbConnection();

  $lecturerData = $db->query("SELECT * FROM lecturer WHERE id = $lecturerId")->fetch();
  if (!$lecturerData) {
    throw new Exception('Unable to find the specified lecturer');
  }
  $lecturer = new Lecturer(
    $lecturerData['firstname'], $lecturerData['lastname'],
    $lecturerData['office'], $lecturerData['phone']
  );
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SET08101 - Lecture 09 - pdo-staff-detail.php</title>
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
    <?php include 'nav.php'; ?>
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
