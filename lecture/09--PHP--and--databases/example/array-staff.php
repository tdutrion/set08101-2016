<?php
  require 'src/Lecturer.php';

  $lecturers = [
    new Lecturer('Cumming', 'Andrew', 'c49', '2753'),
    new Lecturer('Dutrion', 'Thomas'),
  ];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SET08101 - Lecture 09 - array-staff.php</title>
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
    <?php include 'nav.php'; ?>
    <h1>Edinburgh Napier University</h1>
    <table>
      <tr>
        <th>Surname</th>
        <th>First name</th>
        <th>Office</th>
        <th>Phone</th>
      </tr>
      <?php foreach ($lecturers as $key => $lecturer): ?>
      <tr>
        <td>
            <a href="array-staff-detail.php?lecturer=<?php echo $key; ?>">
                <?php echo $lecturer->surname; ?>
            </a>
        </td>
        <td><?php echo $lecturer->firstname; ?></td>
        <td><?php echo $lecturer->office; ?></td>
        <td><?php echo $lecturer->phone; ?></td>
      </tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>
