=== NS Featured Posts ===
Contributors: rabmalin
Donate link: https://www.nilambar.net/2014/07/ns-featured-posts-wordpress-plugin.html
Tags: post, custom post type, custom, posts, meta, plugin, featured, featured-post, page
Requires at least: 5.0
Requires PHP: 5.6.20
Tested up to: 5.8
Stable tag: 2.0.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A plugin for making posts, pages or custom post types featured. User can enable/disable Featured for selected post types.

== Description ==

<h3>NS Featured Posts</h3>This plugin adds checkboxes for each list item. You can easily check /  uncheck the Featured. Checking the Featured will set the meta value **yes** for meta key **_is_ns_featured_post**. From plugin settings, you can choose to which post types you want Featured functionality.

= Using in theme =
This plugin only set / unset the meta key for asigned post. You need to implement it in your theme to get Featured functionality.

Example:


`$query = new WP_Query( array( 'meta_key' => '_is_ns_featured_post', 'meta_value' => 'yes' ) );`


This will fetch the list of post which are checked as Featured.

**Want to see how this can be used in a Page Template?**
[Click this link to see example](https://gist.github.com/ernilambar/ad31b89b459e954fc950)


== Installation ==

= Using The WordPress Dashboard =

1. Navigate to the 'Add New' Plugin Dashboard
1. Select 'ns-featured-posts.zip' from your computer
1. Upload
1. Activate the plugin on the WordPress Plugin Dashboard
1. Place the 'NS Featured Posts Widget' into a Widget area through the 'Appearance -> Widgets' menu in WordPress.

= Using FTP =

1. Extract 'ns-featured-posts.zip' to your computer
1. Upload the 'ns-featured-posts' directory to your 'wp-content/plugins' directory
1. Activate the plugin on the WordPress Plugins dashboard
1. Place the 'NS Featured Posts Widget' into a Widget area through the 'Appearance -> Widgets' menu in WordPress.

== Frequently Asked Questions ==

= Does this support custom post types? =

Yes. It supports custom post types also. From Settings page( Settings -> NS Featured Posts), you can enable/disable custom post types for featured.

== Screenshots ==

1. Admin Settings page
2. Example of featured in Post listing

== Changelog ==

= 2.0.3 - 20 Jul 2021 =
* Compatibility with WP 5.8
* Minor bug fixes

= 2.0.2 =
* Minor bug fixes

= 2.0.1 =
* Fix bug of cpt

= 2.0.0 =
* Major code refactoring
* Add radio mode
* Add max posts option
* Minor bug fixes

= 1.4.1 =
* Fix links

= 1.4.0 =
* Fix: Allow Editor to toggle checkbox
* Compatibility with WP 4.6
* Fix: Minor Bug fixes

= 1.3 =
* Fix: Minor Bug fixes

= 1.2 =
* Fix: Minor Bug fixes

= 1.1 =
* New: Metabox added in edit screen to enable/disable featured
* Fix: Minor Bug fixes
* Compatibility: Compatibility check with WP 4.2

= 1.0.2 =
* Bug fixes

= 1.0.1 =
* Add Featured Posts Widget
* Bug fixes

= 1.0.0 =
* Initial release

== Upgrade Notice ==
NS Featured Posts

