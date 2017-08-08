<?php
function article_exists($articles_id){
    $articles_id = (int)$articles_id;
    return (mysql_result(mysql_query("SELECT COUNT(`articles_id`) FROM `articles` WHERE `articles_id` = $articles_id"), 0) == 0) ? false : true;
}

function previously_liked($articles_id){
    $articles_id = (int)$articles_id;
    return (mysql_result(mysql_query("SELECT COUNT(`likes_id`) FROM `likes` WHERE `user_id` = ".$_SESSION['user_id']." AND `articles_id` = $articles_id"),0) == 0) ? false : true;
}
function like_count($articles_id){
    $articles_id = (int)$article_id;
    return (int) mysql_result(mysql_query("SELECT `article_likes` FROM `articles` WHERE `articles_id` = $articles_id"),0,'article_likes');
}
function add_like($articles_id){
    $articles_id = (int)$articles_id;
    mysql_query("UPDATE ``articles SET `article_likes` = `article_likes` +1 WHERE `articles_id` = $articles_id");
    mysql_query("INSERT INTO `likes` (`user_id`, `articles_id`) VALUES (".$_SESSION['user_id'].", $articles_id)");
}
?>