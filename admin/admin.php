<?php
session_start();

if(isset($_SESSION['admin_logged'])) {
    if(isset($_GET['id'])){
        if(isset($_GET['delete'])){
            include 'action/deleteusers.php';
        } elseif(isset($_GET['edit'])){
            include 'view/editusers.php';
        }
    } else{
    include __DIR__.'../view/menu.php';
    include __DIR__.'../view/addusers.php';
    include __DIR__.'../view/users.php';
    }
} elseif(isset($_SESSION['login_error'])) {
    include __DIR__.'/../public/view/public.php';
} else {
    include __DIR__.'/../public/view/public.php';
}
?>