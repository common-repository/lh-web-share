=== LH Web Share ===
Contributors: shawfactor
Donate link:  https://lhero.org/plugins/lh-web-share/
Tags: web share, social share, shareas, sharing
Requires at least: 4.0
Tested up to: 4.9
Stable tag: trunk
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add javascript support for the web share api

== Description ==

The Web Share API is a Promise-based, single method API. It accepts an object which must have at least one of the properties named text or url.

Once invoked it will bring up the native picker and allow you to share the data with the app chosen by the user.


== Installation ==

1. Download and unzip the plugin.
1. Upload the `lh-web-share` directory to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= So I have installed this plugin, now what? =
* By defauls this plugin just installs the javascript necessary to trigger the web share dialog, when an anchor with the class lh_web_share is clicked. You need to include the anchors to action this in your content or theme. E.G <a href="http://yourlink.com" class="lh_web_share">Click me</a>


== Changelog ==

**1.00 December 23, 2017** 
* Initial version.