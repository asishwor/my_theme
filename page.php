<?php
get_header();
?>

<section>
    <?php if (have_posts()) {

        while (have_posts()) {

            the_post();
            the_content();

        }

    } else {

        echo '<p>No posts Found</p>';
    }


    ?>

</section>
<?php
get_footer();
?>