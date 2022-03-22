<?php
session_start();
require_once __DIR__.'/../../db/database.php';

unset($_SESSION['admin_logged']);
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $query = $db_connect->prepare('SELECT password FROM admins WHERE login = :login');
    $query->bindValue('login', $_POST['login'], PDO::PARAM_STR);
    $query->execute();
    if($query->rowCount()>0) {
        $admin=$query->fetch(PDO::FETCH_ASSOC);
        if($admin['password'] == $_POST['password']) {
            unset($_SESSION['login_error']); 
            $_SESSION['admin_logged'] = true;
            header('Location: ../../?admin');
        } else {
            unset($_SESSION['admin_logged']); 
            $_SESSION['login_error'] = true;
            header('Location: ../../?login');
        }
    } else {
        unset($_SESSION['admin_logged']); 
        $_SESSION['login_error'] = true;
        header('Location: ../../?login');
    }
}