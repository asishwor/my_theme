<?php
get_header();
?>
<div class="container">
    <h2>
        <?php echo the_title(); ?>
    </h2>
    <!-- post thumbnail image displaying -->
    <?php
    the_post_thumbnail('full');
    ?>
    <!-- showing  display content on page -->
    <?php
    echo the_content();
    ?>
</div>
<?php
get_footer();
?>