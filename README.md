# WP Snippet: Disable Posts Menu

Completely removes WordPress posts (post_type: post) from admin interface and blocks direct URL access to post management pages.

## Features

- Removes "Posts" menu item from WordPress admin sidebar
- Blocks direct URL access to edit.php, post.php, and post-new.php
- Returns 403 Access Denied error for unauthorized access attempts
- Does not affect Custom Post Types - only native WordPress posts
- Lightweight - only 2 hooked functions
- Unique prefixes (torwald45_disable_posts_menu_) for all function names to prevent conflicts

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
2. Direct access attempts to post management URLs will be blocked with 403 error
3. Custom Post Types remain unaffected and fully accessible

## Use Cases

- WordPress used as CMS for static pages only
- Sites using only Custom Post Types
- Simplified admin interface for clients
- Prevention of accidental post creation

## Technical Details

### Hooks Used
- `admin_menu` (priority 999) - removes Posts menu item
- `admin_init` - blocks direct URL access

### Blocked Pages
- `edit.php` (post list)
- `post.php` (post edit)
- `post-new.php` (new post)

### Security
- Returns HTTP 403 status code for blocked access
- Does not affect Custom Post Types (checked via `post_type` parameter)
- All functions use unique `torwald45_disable_posts_menu_` prefix

## Changelog

See [CHANGELOG.md](CHANGELOG.md) for version history.

## License

GPL v2 or later

## Author

[Torwald45](https://github.com/Torwald45)
