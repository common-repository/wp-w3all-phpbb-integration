=== WP w3all phpBB ===
Contributors: axewww
Donate link: http://www.paypal.me/alessionanni/
Tags: phpbb, integration, template, user, login
Stable tag: 2.9.1
License: GPLv2 or later
Requires at least: 6.0.0
Tested up to: 6.7
Requires PHP: 7.2

WordPress w3all phpBB integration - easy, light, secure.

== Description ==
WP w3all phpBB provides free user login and registration integration between a phpBB bulletin board and WordPress CMS.

= Wp w3all phpBB integration =
Integration cookie based between WordPress and phpBB installed on same and subdomains.

After the setup and initialization of the plugin, WP users will automatically be added into phpBB when they register into WordPress (or in the case of old existent users, when they will login into WordPress), while without using the phpBB extension installed into phpBB, if users are allowed to register in phpBB, they will be added into WordPress when they will visit the WordPress side as logged in or at their first login in WordPress (or install the phpBB extension to add users at same time into WordPress when they register in phpBB). But you could use the plugin just only to transfer users between phpBB and Wordpress by activating the plugin as not linked (read the help install page), or to show phpBB posts into a WordPress hosted into another domain

= Widgets =
* Login/logout widget (anyway users can login/logout/register on any Wordpress or phpBB login form)
* Last Topic Posts widget(Links, Links and Text, With or Without Avatars), Read/Unread Topics/Posts

= Auto Embed phpBB into WordPress Template =
WP w3all phpBB is capable of running in iframe mode and automatically embedding phpBB into WordPress template. Setup for the iframe responsive embedded procedure is quick and quite easy!

= WP to phpBB and phpBB to WP users =
Transfer WP users into your phpBB forums and vice versa

= phpBB avatars into WordPress options =
Option to use phpBB avatars to replace WP Gravatars

= WordPress MUMS ready =
It is possible to integrate a WP Multisite network, but linking the same phpBB forum into each subsite

= Shortcodes and more options =
* [Shortcode to display phpBB posts on WordPress posts/pages as formatted bbcode or plain text](https://www.axew3.com/w3/2017/07/wordpress-shortcode-phpbb-posts-into-wp-post/)
* [Shortcode to display recent phpBB Topics/Posts on WordPress posts/pages](https://www.axew3.com/w3/2017/09/wordpress-shortcode-last-phpbb-topics-posts-into-wp-post/)
* [Check the list of others available Shortcodes on the Common How To section of the install help page](https://www.axew3.com/w3/wordpress-phpbb-integration-install/)
* Users Transfer options
* Check more options and features in the WP admin Settings -> WP_w3all (config page). More documentation can be found at the [WP w3all phpBB help page](https://www.axew3.com/w3/wordpress-phpbb-integration-install/) and into inline plugin admin page hints

= WordPress phpBB integration without linking users =
* [Display phpBB posts and Last Topics Widgets into WordPress posts/pages, also cross domain, without linking users](https://www.axew3.com/w3/2018/01/wordpress-phpbb-integration-without-linking-users/)

= Help pages =
WP w3all phpBB help page with common questions, setup and usage guides, and answers to frequently asked questions to be up and running in minutes are available here:
[WP w3all phpBB help page](https://www.axew3.com/w3/wordpress-phpbb-integration-install/)

== Installation ==
* [Read this page at axew3.com for the installation guide](https://www.axew3.com/w3/wordpress-phpbb-integration-install/)

= Summary =
* Download the WP w3all plugin onto your WP site and activate it.
* Navigate to the WP w3all settings page underneath the settings tab in your WP admin dashboard.
* Configure phpBB database connection values. This is REQUIRED.
* Configure the url of your phpBB forums. This value is REQUIRED.
* Maybe navigate to the WP w3all tranfer settings page under the settings tab in your WP admin dashboard.
* So follow the instructions to transfer all of your existing WP users over into phpBB.

= Optionally =
* Activate widgets or use shortcodes
* Detailed instructions at [WP phpBB integration help install docs page](https://www.axew3.com/w3/wordpress-phpbb-integration-install/)

== Frequently Asked Questions ==
[Read this page at axew3.com for further helps: it contain detailed easy how to install and faq](https://www.axew3.com/w3/wordpress-phpbb-integration-install/).

== Screenshots ==
1. Wp w3all phpBB integration main config
2. Wp w3all (raw) WP users transfer to phpBB
3. WP w3all auto embed phpBB into your WordPress template

== Changelog ==

= 2.9.1 =
*Release Date - 26 Oct, 2024*
Fix: a critical bug on wp login, causing a reset of the user role to the default.
See: https://www.axew3.com/w3/forums/viewtopic.php?t=1931

= 2.9.0 =
*Release Date - 15 Sep, 2024*
Add: any character language for phpBB usernames added/migrated into WordPress and/or auto transliteration to Latin
Add: functions to switch WP roles and phpBB groups that can be called within hooks/actions/filters
Fix: custom files not included on 'function verify_phpbb_credentials()' even if option activated
Fix: minor fixes
See Switch WordPress Roles and phpBB groups functions: https://www.axew3.com/w3/2024/09/wordpress-roles-phpbb-groups-switches-functions/
See phpBB usernames migrated/added into WordPress with native language characters: https://www.axew3.com/w3/2024/09/phpbb-usernames-migrated-to-wordpress-with-native-language-characters/
See all logs: https://www.axew3.com/w3/forums/viewtopic.php?t=1913

= 2.8.9 =
*Release Date - 17 Aug, 2024*
Fix: an important bug related to wrong password update
Fix: add the missing global var $w3all_custom_output_files into 'private static function verify_phpbb_credentials(){'
Fix: shortcode files 'phpbb_last_topics_withimage_output_shortcode.php', 'wp_w3all_phpbb_iframe_short.php' and page-forum.php
Fix: minor fixes
Logs: https://www.axew3.com/w3/forums/viewtopic.php?t=1892


= 2.8.8 =
*Release Date - 8 Jul, 2024*
* Template integration definitive updates: https://www.axew3.com/w3/forums/viewtopic.php?p=6459#p6459
* Fix: phpbb_last_topics_withimage_output_shortcode and add param right/bottom: https://www.axew3.com/w3/forums/viewtopic.php?p=6474#p6474
* Fix: Plugin deactivation behavior. See https://www.axew3.com/w3/forums/viewtopic.php?p=6460#p6460
* Fix: bug on file class.wp.w3all-phpbb.php function 'private static function create_phpBB_user'
* More fixes
* Read all logs: https://www.axew3.com/w3/forums/viewtopic.php?t=1888

= 2.8.7 =
*Release Date - 30 Jun, 2024*
* Fix: the shortcode [w3allphpbbiframe] that not fire in certain configurations/php version: it has been fixed to correctly detect when the [w3allphpbbiframe] shortcode require to be added on page/post.
* Fix: the template integration by shortcode and page-forum(orWhatEverNamed).php so to work fine by default into a domain/subdomain integration. Improve it so to listen to the new window.parent.postMessage used into the new overall_footer.html code.
* Note: to update to these definitive fixes, page-forum.php require to be rebuilt (or manually updated to latest).
* Note: if using a custom version of files 'wp_w3all_phpbb_iframe_short.php' or 'wp_phpbb_iframe_shortcode.php' they also require to be updated to the latest version.
* Note: the definitive overall_footer.html code has been fixed and require AS MANDATORY to be fixed, updating it to the latest: https://www.axew3.com/w3/2020/01/phpbb-wordpress-template-integration-iframe-v5/

= 2.8.6 =
*Release Date - 27 Jun, 2024*
* Update/fix: all about the template integration by shortcode and page-forum(orWhatEverNamed).php. Switch to the last Iframe resizer lib v5>.
* To update both the integration by shortcode and the integration by page-forum.php, refer to: https://www.axew3.com/w3/2020/01/phpbb-wordpress-template-integration-iframe-v5/
* Note that it is possible to follow with old resizer code and the old page-forum. If you wish to use the new code, you have to rebuild or manually substitute the page-forum.php with the new one, and update the phpBB overall_footer.php code to the last.
* Optimize the custom file inclusion for the template integration by shortcode, both plugin's used files can be customized as more like: https://www.axew3.com/w3/2022/02/the-awesome-iframe-template-integration-using-shortcode/
* Minor fixes

= 2.8.5 =
*Release Date - 23 Jun, 2024*
* Update: the template integration by shortcode switch to the last Iframe resizer lib v5.1.2 following these new rules: https://www.axew3.com/w3/forums/viewtopic.php?p=6340#p6340
* Block widget last topics: add default (and same) classes, like it is for the default native Gutenberg WordPress Last posts block widget
* Fix: '/wp-content/plugins/wp-w3all-phpbb-integration/views/wp_w3all_phpbb_iframe_short.php' to correctly load the phpBB page at the right address when accessed from an external request.
* Minor fixes: see all logs https://www.axew3.com/w3/forums/viewtopic.php?t=1872

= 2.8.4 =
*Release Date - 22 Apr, 2024*
* Fix: option 'Retrieve posts on Last Topics Widget based on phpBB user's group' to return the correct result, and the option has been improved to become: Display topics/posts on Shortcodes and Widgets based on the phpBB user's groups permissions
* Fix: improve the 'private static function last_forums_topics($ntopics = 10)' so to get only required values and make it faster. Fix and remove the code on same function.
* Add: Gutenberg w3all 'phpBB last topics block' widget
* Fix: (secondary) security bug into the function 'public static function w3all_bbcodeconvert($text)'
* Fix: minor fixes
* Logs: https://www.axew3.com/w3/forums/viewtopic.php?t=1870

= 2.8.3 =
*Release Date - 13 Apr, 2024*
* Add: the 'wp_w3all_heartbeat_phpbb_lastopics shortcode' option that allow to get last posts/topics from phpBB and update the content without having to reload the WP page: https://www.axew3.com/w3/2024/04/w3all-heartbeat-phpbb-lastopics/
* Fix: Fix shortcode (and page-forum) to always return index.php as Url when the page is the phpBB home index: https://www.axew3.com/w3/forums/viewtopic.php?p=6264#p6264
* Fix: the famous Fatal error: Uncaught Error: Call to a member function get_results() on string: https://www.axew3.com/w3/forums/viewtopic.php?p=6267#p6267
* More important fixes: https://www.axew3.com/w3/forums/viewtopic.php?t=1865

= 2.8.2 =
*Release Date - 22 Mar, 2024*
* Fix: 'Not enough data to create user' error, when an user should be created on WP login, because existent (and active) in phpBB
* Fix: same issue for all 'create user' instances throwing same error

= 2.8.1 =
*Release Date - 14 Mar, 2024*
* Fix: reported warning errors when plugin db settings have still not setup
* Logs: https://www.axew3.com/w3/forums/viewtopic.php?p=6223#p6223

= 2.8.0 =
*Release Date - 05 Mar, 2024*
* Fix: All about profile fields in phpBB has been coded to be shorter and to fit any phpBB possible configuration
* Fix: All queries about user's updates have been reviewed and fixed.
* Fix: Remove unwanted pieces of code and fix some little discrepancy.
* Logs: https://www.axew3.com/w3/forums/viewtopic.php?t=1854

= 2.7.9 =
*Release Date - 03 Mar, 2024*
* Fix: 'error Notice: logged in username contains illegal characters forbidden on this CMS.
* Fix: page-forum.php for the template iframe integration (not working on safary). Require to rebuild it or manually apply changes
* Fix: WP user addition into phpBB, when the registration is a signup to a membership into front end pages
* Fix: some WP-MS issues and add option that allow (multisite installations) to add phpBB users into WordPress, using all allowed default WP characters and not only alphanumeric
* Fix: more fixes all around
* All logs (and report bugs): https://www.axew3.com/w3/forums/viewtopic.php?t=1825

= 1.0.1 =
*Release Date - 2 Febrary, 2016*
* Fix problem about default install administrators (Uid 1 on WP and Uid 2 in phpBB) with different usernames.
* Added to the widget w3all Login the option to choose different text to display on login/out.

= 1.0.0 =
*Release Date - 1 Febrary, 2016*
