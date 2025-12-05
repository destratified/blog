<?php
/**
 * functions and hooks for wpopus
 *
 * @package linea_blog
 */

if (!function_exists('linea_blog_theme_constant')):
    /**
     * theme details for wpopus 
     *
     * @since 1.0
     * @return void
     */
    function linea_blog_theme_constant()
    {
        $theme = wp_get_theme();
        $args = array(
            'theme_name' => $theme->get('Name'),
            'theme_author' => $theme->get('Author'),           
            'theme_demo_route_url' => 'https://wpopus.com', // url of your main demo where you create $demo_routes            
            'theme_version' => 'free', // free/pro theme
            'theme_quick_links' => array(
                array(
                    'label' => esc_html__('Theme Documentation', 'linea-blog'),
                    'url' => 'https://wpopus.com/docs-category/themes/',
                ),
                array(
                    'label' => esc_html__('All Themes', 'linea-blog'),
                    'url' => 'https://wpopus.com/themes/',
                ),
            ),
        );
        return $args;
    }
endif;
add_filter('wpopus_theme_constant_filter', 'linea_blog_theme_constant');

// show admin notice
if (!function_exists('linea_blog_admin_notice')) {
    function linea_blog_admin_notice()
    {
        // Check if dismiss is enabled
        $dismiss_enabled = get_option( 'linea_blog_remove_wpopus_recommendation', false );
        if ( $dismiss_enabled ) {
            return;
        }

        // Check if we're on the dashboard/index.php
        $screen = get_current_screen();
        if ($screen->id !== 'dashboard') {
            return;
        }

        if (!current_user_can('manage_options')) {
            return;
        }

        // return if plugin exists
        if (function_exists('wpopus_pro') || function_exists('wpopus')) {
            return;
        }

        $theme = wp_get_theme();
        ?>
        <div class="notice notice-info is-dismissible">
            <h2><?php esc_html_e('Transform your website with the power of wpOpus - The Ultimate Gutenberg Toolkit and Site Builder.', 'linea-blog'); ?></h2>
            <p><?php printf('<b>%1$s %2$s.</b> %3$s', esc_html__('We highly recommend wpOpus for', 'linea-blog'), esc_html($theme->get('Name')), esc_html__('It brings one-click demo import, templates import, advanced blocks, and other features to help you build a beautiful website effortlessly.', 'linea-blog')); ?>
        </p>
        <p>
            <button id="install-wpopus"
            class="button button-primary"><?php esc_html_e('Install and Activate', 'linea-blog'); ?></button>
            <a href="https://wpopus.com/" target="_blank"
            class="button button-secondary"><?php esc_html_e('Explore wpOpus', 'linea-blog'); ?></a>
            <a href="#." id="dismiss-wpopus"><?php esc_html_e('Dismiss this notice', 'linea-blog'); ?></a>
        </p>
    </div>
    <?php
}
}
add_action('admin_notices', 'linea_blog_admin_notice');

function linea_blog_admin_enqueue_scripts($hook)
{
    if ('index.php' !== $hook) {
        return;
    }

    if (!current_user_can('manage_options')) {
        return;
    }

    // return if plugin exists
    if (function_exists('wpopus_pro') || function_exists('wpopus')) {
        return;
    }

    wp_enqueue_script(
        'linea_blog-admin-js',
        get_template_directory_uri() . '/assets/js/admin.js',
        ['jquery'],
        '1.0',
        true
    );

    wp_localize_script('linea_blog-admin-js', 'wpopusAjax', [
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('install_wpopus_nonce'),
        'nonce_dismiss' => wp_create_nonce('dismiss_wpopus_nonce'),
        'label' => esc_html__('Install and Activate', 'linea-blog'),
        'success_label' => esc_html__('Installed and Activated', 'linea-blog'),
        'error_label' => esc_html__('An error occurred. Please try again.', 'linea-blog'),
        'dismiss_confirm' => esc_html__('Are you sure you want to dismiss this recommendation? wpOpus offers demo import, template import, and advanced blocks for this theme.', 'linea-blog'),
    ]);
}
add_action('admin_enqueue_scripts', 'linea_blog_admin_enqueue_scripts');

// install and activate wpopus
function linea_blog_install_and_activate_plugin()
{
    // Check if the current user has the capability to manage options
    if (!current_user_can('manage_options')) {
        wp_send_json_error(['message' => esc_html__('You are not authorized to perform this action.', 'linea-blog')]);
    }

    // Verify if the nonce is set and valid
    if (!isset($_POST['nonce'])) {
        wp_send_json_error(['message' => esc_html__('Nonce is missing.', 'linea-blog')]);
    }

    check_ajax_referer('install_wpopus_nonce', 'nonce');

    include_once ABSPATH . 'wp-admin/includes/plugin-install.php';
    include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
    include_once ABSPATH . 'wp-admin/includes/plugin.php';

    $plugin_slug = 'wpopus';
    $plugin_file = $plugin_slug . '/' . $plugin_slug . '.php';

    // Check if the plugin exists in the plugins directory
    if (file_exists(WP_PLUGIN_DIR . '/' . $plugin_file)) {
        // Plugin exists, activate it
        $activate = activate_plugin($plugin_file);

        if (is_wp_error($activate)) {
            wp_send_json_error(['message' => $activate->get_error_message()]);
        }

        wp_send_json_success(['message' => esc_html__('wpOpus activated successfully!', 'linea-blog')]);
    }

    // Plugin does not exist, proceed to install it
    $api = plugins_api('plugin_information', ['slug' => $plugin_slug]);

    if (is_wp_error($api)) {
        wp_send_json_error(['message' => $api->get_error_message()]);
    }

    $upgrader = new Plugin_Upgrader();
    $result = $upgrader->install($api->download_link);

    if (is_wp_error($result)) {
        wp_send_json_error(['message' => $result->get_error_message()]);
    }

    // Activate the plugin after installation
    $activate = activate_plugin($plugin_file);

    if (is_wp_error($activate)) {
        wp_send_json_error(['message' => $activate->get_error_message()]);
    }

    wp_send_json_success(['message' => esc_html__('wpOpus installed and activated successfully!', 'linea-blog')]);
}
add_action('wp_ajax_install_wpopus_plugin', 'linea_blog_install_and_activate_plugin');


// remove wpopus recommendation
function linea_blog_remove_wpopus_recommendation()
{
    // Check if the current user has the capability to manage options
    if (!current_user_can('manage_options')) {
        wp_send_json_error(['message' => esc_html__('You are not authorized to perform this action.', 'linea-blog')]);
    }

    // Verify if the nonce is set and valid
    if (!isset($_POST['nonce_dismiss'])) {
        wp_send_json_error(['message' => esc_html__('Nonce is missing.', 'linea-blog')]);
    }

    check_ajax_referer('dismiss_wpopus_nonce', 'nonce_dismiss');

    $update_recommendation_removal = update_option( 'linea_blog_remove_wpopus_recommendation', true );
    if ( is_wp_error( $update_recommendation_removal ) ) {
        wp_send_json_error(['message' => $update_recommendation_removal->get_error_message()]);
    }
    wp_send_json_success(['message' => esc_html__('Dismissed successfully!', 'linea-blog')]);
}
add_action('wp_ajax_remove_wpopus_recommendation', 'linea_blog_remove_wpopus_recommendation');
