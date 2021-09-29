<?php

try{
$pdo = new PDO("mysql:dbname=ra211140865;host=localhost", "root", "");
}
catch(PDOException $Exception){ 
  throw new \DatabaseException( $Exception->getMessage(), (int)$Exception->getCode());
}

$dir = dirname(__FILE__);

?>