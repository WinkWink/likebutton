function like_add(articles_id){
        $.post('ajax/like_add.php',{articles_id:articles_id}, function(data){
            if (data == 'success') {
                like_get(articles_id);
            } else{
                alert(data);
            }
        });
}

function like_get(articles_id){
    //second function is a callback function
    $.post('ajax/like_get.php',{articles_id:articles_id}, function(data){
            $('#article_'+articles_id+'_likes').text(data);
    });
}