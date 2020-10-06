<?php get_header(); ?>

<?php 
$args = array(
'post_type' => 'post'
);

$blogposts = new WP_Query($args);

    while($blogposts->have_posts()) {
        $blogposts->the_post();
    ?>

    <a href="<?php the_permalink(); ?>">
    <h3><?php the_title(); ?></h3>
    </a>
    <?php the_excerpt() ?>

    <?php  
    }

?>

<?php get_footer(); ?>