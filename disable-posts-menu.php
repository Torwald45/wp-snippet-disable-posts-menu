<?php
/**
 * WP Snippet: Disable Posts Menu
 * 
 * Completely removes WordPress posts (post_type: post) from admin interface
 * and blocks direct URL access to post management pages.
 * 
 * @author      Torwald45
 * @link        https://github.com/Torwald45/wp-snippet-disable-posts-menu
 * @license     GPL-2.0-or-later
 * @version     1.0.1
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Remove Posts menu from WordPress admin
 *
 * @return void
 */
function torwald45_disable_posts_menu_remove_menu() {
    remove_menu_page('edit.php');
}
add_action('admin_menu', 'torwald45_disable_posts_menu_remove_menu', 999);

/**
 * Block direct URL access to post management pages
 *
 * @return void
 */
function torwald45_disable_posts_menu_block_access() {
    global $pagenow;
    
    // List of post-related admin pages to block
    $blocked_pages = array(
        'edit.php',
        'post.php',
        'post-new.php'
    );
    
    if (in_array($pagenow, $blocked_pages)) {
        
        // Allow if post_type parameter is set (custom post types)
        if (isset($_GET['post_type'])) {
            return;
        }
        
        // For post.php, check if editing a page or other post type
        if ($pagenow === 'post.php' && isset($_GET['post'])) {
            $post_id = intval($_GET['post']);
            $post_type = get_post_type($post_id);
            
            // Allow if it's NOT a post (could be page or CPT)
            if ($post_type !== 'post') {
                return;
            }
        }
        
        // Block only actual posts (post_type: post)
        wp_die(
            __('Access to posts has been disabled.', 'torwald45-disable-posts-menu'),
            __('Access Denied', 'torwald45-disable-posts-menu'),
            array('response' => 403)
        );
    }
}
add_action('admin_init', 'torwald45_disable_posts_menu_block_access');
