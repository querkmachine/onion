<?php
  get_template_part('parts/global/html-header');
  get_template_part('parts/global/masthead');
?>

<?php 
  if(have_posts()):
    while(have_posts()): the_post(); 
?>
        <?php the_title(); ?>
        <?php the_content(); ?>
<?php
    endwhile;
  endif; 
?>

<!-- index.php -->

<?php
  get_template_part('parts/global/footer');
  get_template_part('parts/global/html-footer');
?>