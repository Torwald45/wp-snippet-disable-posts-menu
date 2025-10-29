# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/).

## [1.0.0] - 2025-10-29

### Added
- Remove Posts menu item from WordPress admin sidebar
- Block direct URL access to post management pages (edit.php, post.php, post-new.php)
- Return 403 Access Denied error for unauthorized access attempts
- Protection for Custom Post Types - only native WordPress posts are blocked
- Unique prefixes (torwald45_disable_posts_menu_) for all function names, IDs, and hooks to prevent conflicts
- Comprehensive documentation with installation methods and use cases
