<?php
function createLinks($href, $text, $uri)
{
    if ($href == $uri){
        $class = ' class="active"';
    }else {
        $class = '';
    }

    if ($href != '/'){
        $href = "/$href/";
    }

    echo "<a href=\"$href\"$class>$text </a>";
}

$query = "SELECT * FROM pages WHERE url != '404'";
$result  = mysqli_query($link, $query) or die (mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

foreach ($data as $page){
    createLinks($page['url'], $page['text'] , $uri);
}