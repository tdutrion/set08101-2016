<?php
  $lecturerId = (int)filter_input(INPUT_GET, 'lecturer', FILTER_SANITIZE_NUMBER_INT);
  if (!isset($lecturers[$lecturerId])) {
    throw new Exception('Unable to find the specified lecturer');
  }
  $lecturer = $lecturers[$lecturerId];
  
  include __DIR__ . '/../view/staff-detail.php';
