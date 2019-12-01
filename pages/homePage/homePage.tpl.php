<div>
    <title class="home__title">Kezdőlap</title>
    <a href="http://www.tudasklaszter.hu/" target="_blank" class="home__text">A Tudásklaszterről</a>
</div>

<?php
    $url = 'https://www.youtube.com/watch?v=eFKP2G4oMMM';
    preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
    $id = $matches[1];
    $width = '800px';
    $height = '450px';
?>
<iframe id="ytplayer" type="text/html" width="<?php echo $width ?>" height="<?php echo $height ?>"
    src="https://www.youtube.com/embed/<?php echo $id ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
    frameborder="0" allowfullscreen></iframe> 

<html>
<head>
<title>Hírek</title>
<meta http-equiv="Content-Type" content="text/html; charset="iso"-8859-1">
</head>
<body>
<?
$link = @mysql_connect(localhost, username, password);
if(!$link){
   echo('Error connecting to the database: ' . mysql_error());
   exit();
}
$db = @mysql_selectdb('mydatabase');
if(!$db){
   echo('Error selecting database: ' . mysql_error());
   exit();
}
$query = "SELECT id, headline, timestamp FROM news ORDER BY timestamp DESC";
$result = @mysql_query($query);
if(!$result){
   echo('Error selecting news: ' . mysql_error());
   exit();
}
if (mysql_num_rows($result) > 0){
    while($row = mysql_fetch_object($result))
    {
    ?>
   <font size="-1"><b><? echo $row->headling; ?></b> <i><? echo formatDate($row->timestamp); ?></i></font>
    <?
    }
}else{
   ?>
   <font size="-2">No news in the database</font>
<? }
   mysql_close($link); ?>
</body>
</html>