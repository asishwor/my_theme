<?php get_header(); ?>


<section class="blog__section container">
    <h2 class="blogs_title">Latest Blogs</h2>
    <div class="blogs">
        <?php $blog_args = array(
            'post_type' => 'post',
            'post_per_page' => 3
        );
        //  object for all post 
        $blog_post = new WP_Query($blog_args);
        while ($blog_post->have_posts()) {
            $blog_post->the_post(); ?>
        <div class="blog__post">
            <a href='<?php the_permalink(); ?>' class="blog__image">
                <?php the_post_thumbnail(); ?>
            </a>
            <div class=" blog__post-content">
                <div class="blog__title">
                    <h4>

                        <a href='<?php the_permalink(); ?>' class="blog__image">
                            <?php the_title() ?>
                        </a>

                    </h4>
                </div>
                <div class="blog__date">
                    <span>
                        <?php echo get_the_date() ?>
                    </span>

                </div>
                <div class="blog__excerpt">
                    <?php echo substr(get_the_excerpt(), 0, 87) ?>
                </div>
            </div>
        </div>

        <?php } ?>



</section>


<section class="blog__section container">
    <!--  post from custom post types -->
    <h2 class="blogs_title">Latest Blogs from custom post types</h2>

    <div class="blogs">
        <?php $custom_blog_args = array(
            'post_type' => 'news',
            'post_per_page' => 3
        );
        //  object for all post 
        $query = new WP_Query($custom_blog_args);
        while ($query->have_posts()) {
            $query->the_post();
            ?>

        <div class="blog__post">
            <a href='<?php the_permalink(); ?>' class="blog__image">
                <?php the_post_thumbnail(); ?>
            </a>
            <div class=" blog__post-content">
                <div class="blog__title">
                    <h4>

                        <a href='<?php the_permalink(); ?>' class="blog__image">
                            <?php the_title() ?>
                        </a>

                    </h4>
                </div>
                <div class="blog__date">
                    <span>
                        <?php echo get_the_date() ?>
                    </span>

                </div>
                <div class="blog__excerpt">
                    <?php echo substr(get_the_excerpt(), 0, 80) . '...'; ?>
                </div>
            </div>
        </div>

        <?php } ?>
</section>
<!-- main blocks   -->
<div class="container">
    <div class="blocks">
        <div class="block">
            <div class="block__icon">
                <i class="fa-solid fa-house"></i>
            </div>
            <h4 class="block__title">Indoor Game</h4>
            <div class="block__content">
                <p>At its most basic, blogs can help you develop an online presence, prove yourself an expert in an
                    industry, and attract more quality leads to all pages of your site</p>
            </div>
        </div>
        <div class="block">
            <div class="block__icon">
                <i class="fa-solid fa-house"></i>
            </div>
            <h4 class="block__title">Indoor Game</h4>
            <div class="block__content">
                <p>At its most basic, blogs can help you develop an online presence, prove yourself an expert in an
                    industry, and attract more quality leads to all pages of your site</p>
            </div>
        </div>
        <div class="block">
            <div class="block__icon">
                <i class="fa-solid fa-house"></i>
            </div>
            <h4 class="block__title">Indoor Game</h4>
            <div class="block__content">
                <p>At its most basic, blogs can help you develop an online presence, prove yourself an expert in an
                    industry, and attract more quality leads to all pages of your site</p>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>