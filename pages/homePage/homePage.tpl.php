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
