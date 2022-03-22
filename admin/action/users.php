<?php
require_once 'db/database.php';

$query = $db_connect->query('SELECT * FROM admins');

$users = $query->fetchAll();