<?php
    include 'core/init.php';
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
<head>
    <title>articles</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <?php
        $articles = get_articles();
        if(count($articles) == 0) {
            echo "Sorry, there are no articles";
        }else{
            echo '<ul>';
            foreach ($articles as $article){
                echo '<li><p>', $article['article_title'], '</p><p> <a class="like" href="#" onclick="like_add(',$article['articles_id'],');">Like</a> <span id="article_',$article['articles_id'],'_likes">', $article['article_likes'], '</span> like this </p></li>';
            }
            echo '</ul>';
        }
    ?>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/like.js"></script>
</body>
</html>