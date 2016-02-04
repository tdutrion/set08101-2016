<?php
  namespace Model;
  require 'src/Lecturer.php';
  require 'src/Eloquent.php';
  class Lecturer extends \Illuminate\Database\Eloquent\Model {
    protected $table = 'lecturer';
  }
  $lecturers = \Model\Lecturer::all();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SET08101 - Lecture 09 - eloquent-staff.php</title>
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
      <?php foreach ($lecturers as $lecturer): ?>
      <tr>
        <td>
            <a href="eloquent-staff-detail.php?lecturer=<?php echo $lecturer->id; ?>">
                <?php echo $lecturer->lastname; ?>
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
