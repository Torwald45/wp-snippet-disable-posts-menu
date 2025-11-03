# WP Snippet: Disable Posts Menu

Removes WordPress posts (post_type: post) menu from admin interface.

## Features

- Removes "Posts" menu item from WordPress admin sidebar
- Lightweight - single hooked function
- Does not affect Custom Post Types - only native WordPress posts
- Unique prefixes (torwald45_disable_posts_menu_) for all function names to prevent conflicts

## Important Note

**URL blocking functionality has been disabled** (commented out in code) due to conflicts with ACF Pro and other plugins that use WordPress admin pages for their own custom functionality.

Menu removal provides sufficient protection against accidental post creation. If you need stricter access control, see the GitHub issue for possible implementation strategies.

## Requirements

- WordPress 5.0 or higher
- PHP 7.4 or higher

## Installation

### Method 1: functions.php

1. Open your theme's `functions.php` file
2. Copy the entire content from `disable-posts-menu.php`
3. Paste at the end of your `functions.php`
4. Save the file

### Method 2: Code Snippets Plugin

1. Install and activate the [Code Snippets](https://wordpress.org/plugins/code-snippets/) plugin
2. Go to Snippets → Add New
3. Copy content from `disable-posts-menu.php` **WITHOUT the opening `<?php` tag**
4. Paste into the Code field
5. Activate the snippet

## Usage

Once installed and activated:

1. The "Posts" menu item will be removed from WordPress admin sidebar
2. Direct URL access to post management pages is possible but WordPress will handle appropriately
3. Custom Post Types remain unaffected and fully accessible

## Use Cases

WordPress enables all features by default, which clutters the admin interface unnecessarily. This snippet helps clean up the backend when you don't need the Posts feature:

- **Landing pages** - Single page sites don't need blog posts
- **Portfolio sites** - Using Custom Post Types for projects, not blog posts
- **Business websites** - Static pages only, no blog section
- **Client projects** - Cleaner admin interface, less confusion
- **E-commerce sites** - Using WooCommerce products, not posts

**Philosophy:** Disable everything you don't use. Enable only what you need. If you decide to add a blog later, simply deactivate this snippet.

## Technical Details

### Hooks Used

- `admin_menu` (priority 999) - removes Posts menu item

### URL Blocking (Currently Disabled)

URL blocking functionality is commented out in the code due to conflicts with plugins like ACF Pro. The blocking logic cannot reliably distinguish between:
- Direct attempts to access post management pages
- Legitimate plugin usage of WordPress admin pages for custom functionality

For details and possible solutions, see the related GitHub issue.

## Changelog

See [CHANGELOG.md](CHANGELOG.md) for version history.

## License

GPL v2 or later

## Author

[Torwald45](https://github.com/Torwald45)
