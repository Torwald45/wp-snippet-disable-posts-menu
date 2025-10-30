# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/).

## [1.0.1] - 2025-10-30

### Fixed
- Fixed blocking of WordPress Pages and Custom Post Types when editing
- Now correctly checks post type before blocking access
- Allows editing of Pages (post_type: page) and any Custom Post Types
- Only blocks actual Posts (post_type: post)

## [1.0.0] - 2025-10-29

### Added
- Remove Posts menu from WordPress admin
- Block direct URL access to post management pages
- Unique prefixes (torwald45_disable_posts_menu_) for all function names to prevent conflicts
