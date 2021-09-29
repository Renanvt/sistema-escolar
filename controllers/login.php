<?php

session_start();

$ra = '211140865';

$senha = 'Jonatan';

$inputRA = filter_input(INPUT_POST, 'number-ra');
$inpuPassword = filter_input(INPUT_POST, 'password');

if($inputRA && $inpuPassword) {
  if($inputRA == $ra && $inpuPassword == $senha) {
    $_SESSION['ra'] = $inputRA;
    header("Location: http://localhost/ra21114086-5/view/cursos.php");
    exit;
  }
}

header("Location: http://localhost/ra21114086-5/");
exit;

// var_dump($ra, $password);




?>