<?php

$params = array(
    'post_type' => 'post', 
    'numberposts' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
    'suppress_filters' => true,
    'post_status'=>'publish'
);

$recent_posts_array = get_posts($params); // получаем массив постов
foreach( $recent_posts_array as $recent_post_single ) : // для каждого поста из массива
echo '<a href="' . get_permalink( $recent_post_single ) . '">' . $recent_post_single->post_title . '</a> <br>'; // выводим ссылку
endforeach; // конец цикла