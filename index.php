<?php

include 'dir/init.php';

$uri = trim(preg_replace('#(\?.*)?#', '',$_SERVER['REQUEST_URI']), '/');

if (empty($uri)){
    $page = '/';
}

$query = "SELECT * FROM pages WHERE url = '$uri'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$page = mysqli_fetch_assoc($result);

if (!$page){
    $query = "SELECT * FROM pages WHERE url = '404'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $page = mysqli_fetch_assoc($result);
    header("HTTP/1.0 404 Not Found");
}

$title = $page['title'];
$content= $page['text'];


include 'dir/layout.php';


