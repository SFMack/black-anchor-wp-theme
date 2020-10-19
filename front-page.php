<?php get_header(); ?>

    <div id="banner">
        <h1>&lt;BlackAnchor/&gt;</h1>
        <h3>We guarentee we'll make your project a success</h3>
    </div>

    <!-- Main -->
    <main>
        <!-- Header (linked to all blogs) -->
        <a href="<?php echo site_url('/blog'); ?>">
            <h2 class="section-heading">All Blogs</h2>
        </a>

        <!-- Section -->
        <section>

        <?php 

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 2,
            );

            $blogposts = new WP_Query($args);

            while($blogposts->have_posts()) {
                $blogposts->the_post();
            

        ?>

            <!-- card -->
            <div class="card">
                <div class="card-image">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="card image">
                    </a>
                </div>

                <div class="card-description">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p>
                        <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Read More</a>
                </div>
            </div>

            <?php } wp_reset_query(); ?>

        </section>

        <h2 class="section-heading">All Projects</h2>

        <!-- Section -->
        <section>
        <?php 

$args = array(
    'post_type' => 'project',
    'posts_per_page' => 2,
);

$projects = new WP_Query($args);

while($projects->have_posts()) {
    $projects->the_post();


?>

<!-- card -->
<div class="card">
    <div class="card-image">
        <a href="<?php the_permalink(); ?>">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="card image">
        </a>
    </div>

    <div class="card-description">
        <a href="<?php the_permalink(); ?>">
            <h3><?php the_title(); ?></h3>
        </a>
        <p>
            <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
        </p>
        <a href="<?php the_permalink(); ?>" class="btn-readmore">Read More</a>
    </div>
</div>

<?php } wp_reset_query(); ?>

</section>

        <h2 class="section-heading">Source Code</h2>
        <section id="section-source">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero sequi delectus numquam magnam id alias eveniet voluptatem facere soluta nostrum blanditiis deserunt quia nisi tempore, repellendus maiores modi, temporibus quo!
            </p>
            <a href="#" class="btn-readmore">GitHub Profile</a>
        </section>

    <?php get_footer(); ?>