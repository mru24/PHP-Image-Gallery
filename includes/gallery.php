<?php
include 'header.php';
include 'nav.php';
?>
<div class="container my-4">
<?php
function strip_bad_chars( $input ) {
  $output = preg_replace( "[^a-zA-Z0-9_-]", "", $input );
  return $output;
}

if(isset($_GET['dir'])) {

  $dir = $_GET['dir'];

  $imageFolder = strip_bad_chars('../gallery/' . $dir . '/');

  $images_array = array_slice(scandir($imageFolder), 2);

?>

    <div class="gallery">
      <?php
      // Get gallery images
      foreach($images_array as $img) {
        ?>
        <div class="image">
          <img src="<?php echo $imageFolder.$img ?>" alt="">
        </div>
      <?php
      }
      ?>
    </div>

<?php } ?>

</div>
<?php
include 'footer.php';
?>

<style media="screen">
  .gallery{
    column-count: 4;
    column-gap: 10px
  }
  .gallery img{
    width: 100%;
    margin-bottom: 10px
  }
</style>
