<?php
  require 'src/Lecturer.php';
  require 'src/DbConnection.php';

  $db = new DbConnection();
  $lecturers = [];
  $sql = 'SELECT id, firstname, lastname, office, phone FROM lecturer';
  foreach ($db->query($sql) as $row) {
    $lecturers[$row['id']] = new Lecturer(
      $row['firstname'], $row['lastname'], $row['office'], $row['phone']
    );
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SET08101 - Lecture 09 - pdo-staff.php</title>
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
            <a href="pdo-staff-detail.php?lecturer=<?php echo $key; ?>">
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
