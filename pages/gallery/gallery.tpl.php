<?php
include("config.php");

if(isset($_POST['but_upload'])){
 
  $name = $_FILES['file']['name'];
  $target_dir = "media/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType, $extensions_arr) ){
     // Insert record
     $query = "insert into images(name) values('".$name."')";
     mysqli_query($con,$query);
  
     // Upload file
     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
  }
}
?>

<script type='text/javascript'>
  $( document ).ready(function() {
    console.log($('.body img'));

    $('.body img').each(function () {
      $( this ).hover(
        function() { $(this).addClass("hover"); },
        function() { $(this).removeClass("hover"); }
      );
    });
});
  
</script>

<form method="post" action="" enctype='multipart/form-data'>
  <input type='file' name='file' />
  <input type='submit' value='Mentés' name='but_upload'>
</form>

<?php
  $sql = "SELECT name FROM images";
  $result = mysqli_query($con, $sql);
  $json = mysqli_fetch_all ($result, MYSQLI_ASSOC);
  foreach ($json as &$value) {
    $image_src = "media/" . $value['name'];
    print("<img src=" . $image_src . ">");
  }
?>
