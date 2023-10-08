<<<<<<< HEAD
<?php
global $post;
get_header(); 
?>

<section class="content-wrap">
    <?php
    while ( have_posts() ): the_post();
    the_content();
    endwhile;
    ?>
</section>
=======
<?php
global $post;
get_header(); 
?>

<section class="content-wrap">
    <?php
    while ( have_posts() ): the_post();
    the_content();
    endwhile;
    ?>
</section>
>>>>>>> 8ec29a32f02852e28f6f63ef803d6e70294a8fbd
<?php get_footer(); ?>