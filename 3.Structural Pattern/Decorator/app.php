<?php

$post       = new Post();
$comment    = new Comment();

$post->filter();
$comment->filter();

if($BBCodeEnabled == false && $EmoticonEnabled == false){
    $postContent = $post->getContent(); 
    $commentContent = $comment->getContent(); 
}elseif($BBCodeEnabled == true && $EmoticonEnabled == false){
    $bb = new BBcodeParse($post);
    $postContent = $bb->getContent();

    $bb = new BBcodeParse($comment);
    $commentContent = $bb->getContent();
}elseif($BBCodeEnabled == false && $EmoticonEnabled == true){
    $em = new Emoticon($post);
    $postContent = $em->getContent();

    $em = new Emoticon($comment);
    $commentContent = $em->getContent();
}
?>