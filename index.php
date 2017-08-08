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
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
        $articles = get_articles();
        if(count($articles) == 0) {
            echo "Sorry, there are no articles";
        }else{
            echo '<ul>';
            foreach ($articles as $article){
                echo '<li><p>', $article['article_title'], '</p><p> <a href="#">Like</a> <span>', $article['article_likes'], '</span> like this </p></li>';
            }
            echo '</ul>';
        }
    ?>
    <h1>hello</h1>
</body>
</html>