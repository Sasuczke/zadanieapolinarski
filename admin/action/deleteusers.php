<?php
require_once __DIR__ . '/../../db/database.php';

if(isset($_GET['id'])) {
  $user=$db_connect->prepare('DELETE FROM admins WHERE id = :id');
  $user->bindValue('id', $_GET['id'], PDO::PARAM_INT);
  $user->execute();
} 
header('Location: ../../?admin');
?>