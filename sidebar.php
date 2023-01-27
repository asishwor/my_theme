<aside class="sidebar">
    <div>
        <h2 class="recent__blog-title">Recent posts</h2>
        <!-- all post are print here -->
    </div>
    <section>
        <?php $postType = array(
            'post_type' => 'news',
            'post_per_page' => 3,
        );
        $newsQuery = new Wp_Query($postType);
        while ($newsQuery->have_posts()) {
            $newsQuery->the_post(); ?>
        <div class="recent_post">
            <a href=" " class="recent__blog-image">
                <?php the_post_thumbnail('thumbnail') ?>
            </a>
            <div class="blog__sidebar-content">
                <h4 class="blog__sidebar-title">
                    <a href="<?php the_permalink() ?>">
                        <?php the_title() ?></a>
                </h4>
                <span class="blog__sidebar-date">
                    <?php the_date() ?>
                </span>
                <p class="blog__sidebar-excerpt">
                    <?php echo substr(get_the_excerpt(), 0, 100) ?>
                </p>
            </div>
        </div>
        <?php } ?>



        <?php dynamic_sidebar('primary_sidebar'); ?>
    </section>
</aside>