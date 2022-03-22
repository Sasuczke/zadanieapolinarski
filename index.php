<?php 
	include 'head.php';

    if (isset($_GET['admin'])) {
        include 'admin/admin.php';
    } else{
        include 'public/view/public.php';
    }

	include 'end.php';
	?>

