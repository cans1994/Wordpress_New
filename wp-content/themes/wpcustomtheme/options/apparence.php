<?php
add_action('customize_register', function (WP_Customize_Manager $manager) {
    $manager->add_section('my_theme_apparence', [
        'title' => 'Personnalisation de l\'apparence',
    ]);
    $manager->add_setting('header_background', [
        'dafault' => '#778899',
    ]);
}); //pour rajouter des sections et des panneaux à notre interface de gestion des apparences