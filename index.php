<?php
get_header();
the_post();
?>
<div class="blog__banner">
    <div class="container">
        <h2>Blog</h2>
    </div>
</div>
<div class="container">
    <main class="site__main">
        <aside class="blog__sidebar">
            <section>
                <div>
                    <h2 class="recent__blog-title">Recent posts</h2>
                    <!-- all post are print here -->
                    <?php get_sidebar(); ?>
                </div>
                <h2>Latest News</h2>

                <?php $postType = array(
          'post_type' => 'sports',
          'post_status' => 'publish'
        );
        $newsQuery = new Wp_Query($postType);
        while ($newsQuery->have_posts()) {
          $newsQuery->the_post();
          $imagePath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
          echo '<div class="recent__blog">
       
            <a href=""> <img src="' . $imagePath[0] . '" alt="" /></a>
            <div class="blog__sidebar-content">
              <h4 class="blog__sidebar-title">
              <a href="' . the_permalink() . '">
            ' . the_title() . '</a>
              </h4>
              <span class="blog__sidebar-date">
                ' . the_date() . '
              </span>
              <p class="blog__sidebar-excerpt">
                <?php the_excerpt(); ?>
                </p>
</div>
</div>';
}



?>
</section>
</aside>

<!-- all post are print here -->
<div class="blog-container">
    <?php
      while (have_posts()) {
        the_post();

        ?>
    <div class="blog">
        <?php
          $imagePath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large')
            ?>
        <img src="<?php echo $imagePath[0]; ?>" alt="" />
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
                <button class="btn blog__btn"><span>Read more</span> <i class="fa-solid fa-arrow-right"></i></button>
            </a>
        </div>
    </div>
    <?php }
      ; ?>

</div>

</main>
</div>

<?php get_footer() ?>