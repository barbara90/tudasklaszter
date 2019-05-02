<?php
    include('config.inc.php');

    $actual_page = current($pages);
    if (isset($_GET['page'])) {
        $requested_page = $pages[$_GET['page']];
        if (isset($requested_page)) {
            $actual_page = $requested_page;
        } else {
            $actual_page = $error_page;
            header("HTTP/1.0 404 Not Found");
        }
    }

    include('index.tpl.php');
?>