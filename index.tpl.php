
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Tudásklaszter</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
    <body>
        <div id="topnav">
            <ul>
                <?php foreach ($pages as $url => $page) { ?>
                    <li <?php echo (($page == $actual_page) ? ' class="aktiv"' : '') ?>>
                        <a href="<?php echo ($url == '/') ? '.' : ('?page=' . $page['file']) ?>">
                            <?php echo $page['link'] ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>

        <div id="body">
            <?php include("pages/{$actual_page['file']}/{$actual_page['file']}.tpl.php");  ?>
        </div>
    </body>
</html>