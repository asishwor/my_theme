<?php get_header(); ?>

<div class="error">

    <h1 class="error__title">404</h1>
    <p class="error__desc">The page you are looking for may have been moved, deleted, or possibly never existed.</p>
    <button class="btn error__btn">

        <a href=<?php echo site_url(); ?>>Go back to home</a>
    </button>
</div>
<?php get_footer(); ?>