<?php

function get_articles(){
    $articles = array();

    $query = mysql_query("SELECT `articles_id`, `article_title`,`article_likes` FROM `articles`");

    while (($row = mysql_fetch_assoc($query)) !== false) {
        $articles[] = array(
            'articles_id' => $row['articles_id'],
            'article_title' => $row['article_title'],
            'article_likes' => $row['article_likes']
            );
    }
    return $articles;
}

?>