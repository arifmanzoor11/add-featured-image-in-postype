<?php 
include_once('uploadFeaturedImage.php');
if (isset($_POST['submit'])) {
  
$post = array();
$post['post_status']   = 'publish';
$post['post_type']     = 'post'; // can be a CPT too
$post['post_title']    = 'My New Post';
$post['post_content']  = 'My new post content';
$post['post_author']   = 1;

// Create Post
$post_id = wp_insert_post( $post );
$image_id = uploadFeaturedImage('photo');
    if ($image_id ) {
        set_post_thumbnail($post_id,$image_id);
    }
}
?>

<form action="" method="POST" class="" enctype="multipart/form-data">
  <input type="file" name="photo" accept="image/png, image/gif, image/jpeg" id="photo">
  <input type="submit" value="Submit" name="submit" class="btnmit">
</form>
