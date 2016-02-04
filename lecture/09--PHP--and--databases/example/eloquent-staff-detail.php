<?php
  namespace Model;
  require 'src/Lecturer.php';
  require 'src/Eloquent.php';

  class Lecturer extends \Illuminate\Database\Eloquent\Model {
    protected $table = 'lecturer';
  }

  $lecturerId = (int)filter_input(INPUT_GET, 'lecturer', FILTER_SANITIZE_NUMBER_INT);
  $lecturer = \Model\Lecturer::find($lecturerId);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SET08101 - Lecture 09 - eloquent-staff-detail.php</title>
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
    <?php include 'nav.php'; ?>
    <h1><?php echo "{$lecturer->firstname} {$lecturer->lastname}"; ?></h1>
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
