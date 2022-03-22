<footer>
    <?php
    //création menu footer
    wp_nav_menu([
        'theme_location' => 'footer',
        'container' => false,
        'menu_class' => 'navbar-nav me-auto',
    ]) ?>
</footer>

<?php wp_footer(); ?>
</body>

</html>