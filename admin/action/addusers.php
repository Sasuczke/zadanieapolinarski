<?php
require_once __DIR__.'/../../db/database.php';

if($_SERVER['REQUEST_METHOD'] == "POST") {
  if(!empty($_POST['login']) && !empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['password'])) {
    $user=$db_connect->prepare("INSERT INTO admins VALUES (:id, :login, :imie, :nazwisko, :password)");
    $user->bindValue('id', NULL, PDO::PARAM_NULL);
    $user->bindValue('login', $_POST['login'], PDO::PARAM_STR);
    $user->bindValue('imie', $_POST['imie'], PDO::PARAM_STR);
    $user->bindValue('nazwisko',$_POST['nazwisko'], PDO::PARAM_STR);
    $user->bindValue('password', $_POST['password'], PDO::PARAM_STR);
    $user->execute();
    header('Location: ../../?admin');
  } else {
    header('Location: ../../?admin');
  }
}