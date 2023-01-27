<?php
get_header();
the_post();
?>
<div class="container">

    <main class="site__main">
        <?php get_sidebar() ?>

        <!-- Single blog Details -->
        <section class="single-blog">
            <div class="post">
                <div class="single-blog__image">
                    <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'large')[0]; ?>" alt=""
                        height="500px">
                </div>
                <p class="post__excerpt">
                    <?php the_author(); ?>
                </p>
                <h3 class="post__title">
                    <?php the_title(); ?>
                </h3>
                <p class="post__excerpt">
                    <?php the_date(); ?>
                </p>
                <p class="post__excerpt">
                    <?php the_content(); ?>
                </p>
            </div>
            <?php comments_template(); ?>
        </section>

    </main>
</div>
<?php get_footer(); ?>