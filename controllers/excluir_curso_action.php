<?php
  include '../config.php';

  $id = $_GET['id'];

  $sql = $pdo->prepare('DELETE FROM courses WHERE id = :id');
  $sql->bindValue(':id', $id);
  $sql->execute();

  header("Location: http://localhost/ra21114086-5/view/cursos.php");
  exit;


  







