<?php
  require 'src/Programme.php';

  $lecturers = [
    new Lecturer('Cumming', 'Andrew', 'c49', '2753'),
  ];

  $programmes = [
    new Programme('Programme 1', $lecturers[0]),
    new Programme('Programme 2'),
  ];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SET08101 - Lecture 05 - programmes.php</title>
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
    <?php include 'nav.php'; ?>
    <h1>Edinburgh Napier University</h1>
    <table>
      <tr>
        <th>Name</th>
        <th>Lecturer</th>
      </tr>
      <?php foreach ($programmes as $programme): ?>
      <tr>
        <td><?php echo $programme->name; ?></td>
        <td><?php echo $programme->lecturer ? "{$programme->lecturer->surname} {$programme->lecturer->firstname}" : null; ?></td>
      </tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>
