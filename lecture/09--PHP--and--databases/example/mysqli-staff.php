<?php
  require 'src/Lecturer.php';

  $mysqli = new mysqli('localhost', 'user', 'password', 'database');
  if ($mysqli->connect_errno) {
    header("HTTP/1.1 500 Internal Server Error");
    die("Failed to connect to MySQL: {$mysqli->connect_error}");
  }

  $res = $mysqli->query(
    "SELECT id, firstname, lastname, office, phone FROM lecturer"
  );
  $lecturers = [];
  while($row = $res->fetch_assoc()) {
    $lecturers[$row['id']] = new Lecturer(
      $row['firstname'], $row['lastname'], $row['office'], $row['phone']
    );
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SET08101 - Lecture 09 - mysqli-staff.php</title>
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
            <a href="mysqli-staff-detail.php?lecturer=<?php echo $key; ?>">
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
