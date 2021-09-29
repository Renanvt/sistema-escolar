<?php
  include '../config.php';
  include '../models/Courses.php';

   //Pegando dados do formulário
  $nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
  $status = filter_input(INPUT_POST, 'status');
  $dateStart = filter_input(INPUT_POST, 'dateStart');
  $dateFinish = filter_input(INPUT_POST, 'dateFinish');

   //Validando dados do formulário
  if($nome && $description) {
    $newCourse = new Courses();
    $newCourse->setNameCourse($nome);
    $newCourse->setDescription($description);
    $newCourse->setDateStart($dateStart);
    $newCourse->setDateFinish($dateFinish);
    $newCourse->setStatus($status);

  }
  
    //Preparando comando sql
  $sql = $pdo->prepare("INSERT INTO courses (nameCourse, description, dateStart, dateFinish, status) VALUES (:nameCourse, :description, :dateStart, :dateFinish, :status)");

  //Associando variáveis
  $sql->bindValue(":nameCourse", $newCourse->getNameCourse());
  $sql->bindValue(":description", $newCourse->getDescription());
  $sql->bindValue(":dateStart", $newCourse->getDateStart());
  $sql->bindValue(":dateFinish", $newCourse->getDateFinish());
  $sql->bindValue(":status", $newCourse->getStatus());

  //Executando comando sql
  $sql->execute();

  //Colocando ID
  $newCourse->setId($pdo->lastInsertId());

  //Direcionando a página
  if($newCourse->getId()) {
    header("Location: http://localhost/ra21114086-5/view/cursos.php");
    exit;
  }

  







