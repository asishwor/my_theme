<?php
get_header();
the_post();
?>

<div class="container">
    <main class="site__main">

        <?php get_sidebar() ?>
        <!-- all post are print here -->

        <div class="blog-container">
            <?php
            while (have_posts()) {
                the_post();

                ?>
            <div class="blog">
                <?php the_post_thumbnail() ?>

                <div class="blog__content">
                    <h4 class="blog__title">
                        <a href="<?php the_permalink(); ?>">
                            <?php echo the_title(); ?></a>
                    </h4>
                    <p class="blog__excerpt">
                        <?php the_excerpt(); ?>
                    </p>
                    <span class="blog__data">
                        <?php the_date(); ?>
                    </span>
                    <a href="<?php the_permalink(); ?>">
                        <button class="btn blog__btn"><span>Read more</span> <i
                                class="fa-solid fa-arrow-right"></i></button>
                    </a>
                </div>
            </div>
            <?php }
            ; ?>

        </div>

    </main>
</div>

<?php get_footer() ?>