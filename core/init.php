<?php
session_start();
$_SESSION['user_id'] = '1';

include 'db/connect.php';
include 'func/articles.php';
include 'func/like.php';

?>