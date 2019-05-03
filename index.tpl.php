<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Tudásklaszter</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
    <body class="base">
        <nav id="topnav">
            <ul class="menu">
                <?php foreach ($pages as $url => $page) { ?>
                    <li>
                        <a href="<?php echo ($url == '/') ? '.' : ('?page=' . $page['file']) ?>"
                            <?php echo (($page == $actual_page) ? ' class="active"' : '') ?>><?php echo $page['link'] ?></a>
                    </li>
                <?php } ?>
            </ul>
        </nav>

        <div class="content">
            <?php include("components/sidebar/sidebar.tpl.php"); ?>

            <div id="body">
                <?php include("pages/{$actual_page['file']}/{$actual_page['file']}.tpl.php"); ?>
            </div>
        </div>

        <footer>
            <?php include("components/footer/footer.tpl.php"); ?>
        </footer>
    </body>
</html>