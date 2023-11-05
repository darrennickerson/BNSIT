<?php
/*
 * Plugin Name:       Bicycle NS Incidents
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Custom plugin to track incidents
 * Version:           0.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            CGI Emerging Tech
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */


 

 
 function my_admin_menu() {
    add_menu_page(
        __( 'BNSIT', 'my-textdomain' ),
        __( 'BNSIT', 'my-textdomain' ),
        'manage_options',
        'BSNIT Admin',
        'my_admin_page_contents',
        'dashicons-welcome-widgets-menus',
        3
    );
}

add_action( 'admin_menu', 'my_admin_menu' );

wp_enqueue_style( 'styled', get_stylesheet_uri() );

function my_admin_page_contents() {
    $response = wp_remote_get( 'https://api.github.com/users/darrennickerson' );

    $body     = wp_remote_retrieve_body( $response );
    $githubObj = json_decode( $body );
    echo $body;

    ?>
        <h1>
           Bicycle NS Incidents
        </h1>
        <img class="avatar" src="<?php echo $githubObj -> avatar_url ?>" />
        <?php
        
        ?>
    <?php
}

?>
