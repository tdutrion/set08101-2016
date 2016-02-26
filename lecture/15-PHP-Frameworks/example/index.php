<?php
  require 'src/Lecturer.php';

  $lecturers = [
    new Lecturer('Cumming', 'Andrew', 'c49', '2753'),
    new Lecturer('Dutrion', 'Thomas'),
  ];

  switch ($_GET['page']) {
    case 'staff':
      include 'controller/staff.php';
      break;
    case 'staff-detail':
      include 'controller/staff-detail.php';
      break;
    default:
      header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
      die ('page not found');
  }
