<?php
include '../core/init.php';
if (isset($_POST['articles_id'], $_SESSION['user_id']) && article_exists($_POST['articles_id'])) {
    $articles_id = $_POST['articles_id'];
    if (previously_liked($articles_id) === true) {
        echo 'You have already liked this';
    }else{
        add_like($articles_id);
        echo "success";
    }

}
?>