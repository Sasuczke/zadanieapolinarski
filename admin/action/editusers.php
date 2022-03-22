<?php
require_once __DIR__.'/../../db/database.php';

if(isset($_GET['id'])) {
  $query = $db_connect->prepare('SELECT * FROM admins WHERE id = :id');
  $query->bindValue('id', $_GET['id'], PDO::PARAM_INT);
  $query->execute();
  $user = $query->fetch(PDO::FETCH_ASSOC);
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(!empty($_POST['user_login']) && !empty($_POST['user_imie']) && !empty($_POST['user_nazwisko'])  && !empty($_POST['user_password'])) {
    $user=$db_connect->prepare('UPDATE admins SET login = :login, imie = :imie, nazwisko = :nazwisko, password = :password WHERE id = :id');
    $user->bindValue('id', $_POST['id_user'], PDO::PARAM_INT);
    $user->bindValue('login', $_POST['user_login'], PDO::PARAM_STR);
    $user->bindValue('imie', $_POST['user_imie'], PDO::PARAM_STR);
    $user->bindValue('nazwisko', $_POST['user_nazwisko'], PDO::PARAM_STR);
    $user->bindValue('password', $_POST['user_password'], PDO::PARAM_STR);
    $user->execute();
    header('Location: ../../?admin');
  } else {
    header('Location: ../../?admin');
  }
}