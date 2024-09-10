<?php
// Function to set up the theme
function mytheme_setup() {
    // Register menu locations
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu', 'mytheme'),  // Registering the main menu
            // You can add additional menu locations here
        )
    );

    // Add support for post thumbnails (featured images)
    add_theme_support('post-thumbnails');
    add_theme_support('custom-header');
}
function my_theme_enqueue_scripts() {
    $theme_uri = get_template_directory_uri(); // Get theme directory URI

    // Enqueue wow.js before main.js
    // wp_enqueue_script(
    //     'wow-script', // Unique handle for wow.js
    //     $theme_uri . '/assets/js/wow.js', // Correct path
    //     array(), // No dependencies
    //     null, // Version (or use theme version)
    //     true // Load in the footer
    // );

    // Enqueue your main.js
    wp_enqueue_script(
        'main-script', // Unique handle for main.js
        $theme_uri . '/assets/js/main.js', // Correct path
        array('wow-script'), // Specify wow.js as a dependency
        null, // Version
        true // Load in the footer
    );
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts'); // Ensure correct hook




// Attach the function to the 'after_setup_theme' hook
add_action('after_setup_theme', 'mytheme_setup');
?>
