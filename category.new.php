<?php get_header(); ?>
<?php
  $cat = get_query_var('cat');
  $posts_ids = get_posts (
    array
    (
        'posts_per_page' => -1,
        'category' => $cat,
        'fields' => 'ids'
    )
  );
?>
  <div class="blog"></div>
  <div id="load-marker"></div>

  <?php
    $jsdata_posts = "";
    foreach ($posts_ids as $post_id):
      $jsdata_posts .= $post_id . ", ";
    endforeach;
   ?>

  <script>
    posts = [<?php echo$jsdata_posts; ?> ];
    jQuery(document).ready(
      element = $('#load_marker');
    );
  </script>

  <?php get_footer(); ?>
