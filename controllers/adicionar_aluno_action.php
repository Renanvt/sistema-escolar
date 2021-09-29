<?php
  include '../config.php';
  include '../models/Student.php';

  //Pegando dados do formulário
  $nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  $password = filter_input(INPUT_POST, 'password');
  $status = filter_input(INPUT_POST, 'status');
  $phone = filter_input(INPUT_POST, 'phone');
  $course = filter_input(INPUT_POST, 'course');

  //Validando dados do formulário
  if($nome && $email && $password && $status && $course) {

    $newStudent = new Student();
    $newStudent->setName($nome);
    $newStudent->setEmail($email);
    $newStudent->setPassword($password);
    $newStudent->setStatus($status);
    $newStudent->setPhone($phone);
    $newStudent->setCourse($course);  

  }
  
  //Preparando comando sql
  $sql = $pdo->prepare("INSERT INTO students (name, email, status, phone, course, password) VALUES (:name, :email, :status, :phone, :course, :password)");

  //Associando variáveis
  $sql->bindValue(":name", $newStudent->getName());
  $sql->bindValue(":email", $newStudent->getEmail());
  $sql->bindValue(":status", $newStudent->getStatus());
  $sql->bindValue(":phone", $newStudent->getPhone());
  $sql->bindValue(":course", $newStudent->getCourse());
  $sql->bindValue(":password", $newStudent->getPassword());
  //Executando comando sql
  $sql->execute();
 
  //Colocando ID
  $newStudent->setId($pdo->lastInsertId());

  //Direcionando a página
  if($newStudent->getId()) {
    header("Location: http://localhost/ra21114086-5/view/alunos.php");
    exit;
  }

  







