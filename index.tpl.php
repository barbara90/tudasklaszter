<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Tudásklaszter</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body class="base">
    <nav id="topnav">
        <ul class="menu">
            <img src="media/oktatas.png" alt="logo" width="42" height="42">
            <?php foreach ($pages as $url => $page) { ?>
                <li>
                    <a href="<?php echo ($url == '/') ? '.' : ('?page=' . $page['file']) ?>"
                        <?php echo (($page == $actual_page) ? ' class="active"' : '') ?>><?php echo $page['link'] ?></a>
                </li>
            <?php } ?>
        </ul>
    </nav>

    <div class="content">

        <div id="body">
            <?php include("pages/{$actual_page['file']}/{$actual_page['file']}.tpl.php"); ?>
        </div>

        <form method="get" action="http://www.google.com/search"> 
             <div style="border:1px solid black;padding:4px;width:20em;">
                <table border="0" cellpadding="0"> <tr><td> 
                    <input type="text" name="q" size="25" maxlength="255" value="" /> 
                    <input type="submit" value="Google Search" /></td></tr> 
                    <tr><td align="center" style="font-size:75%">
                    </td></tr>
                </table>
            </div>
        </form>
    </div>

    <footer>
        <?php include("components/footer/footer.tpl.php"); ?>
    </footer>
</body>

</html>