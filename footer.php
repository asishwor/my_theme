<footer>
    <div class="container">
        <div class="footer">

            <div>

                <?php
                dynamic_sidebar('footer-1');

                ?>
            </div>
            <div>

                <?php
                dynamic_sidebar('footer-2');

                ?>
            </div>
            <div>

                <?php
                dynamic_sidebar('footer-3');

                ?>
            </div>
            <div>

                <?php
                dynamic_sidebar('footer-4');

                ?>
            </div>
        </div>

    </div>
</footer>
<?php wp_enqueue_script('script_name', get_template_directory_uri() . "/js/main.js", 'jquery', false, true); ?>
<?php wp_footer(); ?>

</body>

</html>