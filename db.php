<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'prueba_crud'
) or die(mysqli_erro($mysqli));

?>