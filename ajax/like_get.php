<?php
include '../core/init.php';
if (isset($_POST['articles_id'], $_SESSION['user_id']) && article_exists($_POST['articles_id'])) {
    echo like_count($_POST['articles_id']);
}
?>