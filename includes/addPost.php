<?php
include '../config.php';

$sql = get_sql('addPost');
$params = array(
    'userID' => $_SESSION['userID'],
    'content' => post('content'),
    'category' => post('category')
);

$database->executeQuery($sql, $params);
$postID = $database->last_insert_id();

$sql = get_sql('getPost');
$params = array(
    'postID' => $postID
);

$posts = $database->queryObject('Post', $sql, $params);
$post = $posts[0];
include('../includes/post.php');
