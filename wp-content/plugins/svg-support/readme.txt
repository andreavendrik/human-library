=== SVG Support ===
Contributors: Benbodhi
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=Z9R7JERS82EQQ
Tags: svg, vector, css, style, mime, mime type, embed, img, inline, animation
Requires at least: 4.0
Tested up to: 4.8-alpha-39948
Stable tag: 2.3.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Allow SVG file uploads using the WordPress Media Library uploader plus direct styling/animation of SVG elements using CSS/JS.

== Description ==

When using SVG images on your WordPress site, it can be hard to style elements within the SVG using CSS. **Now you can, easily!**

Scalable Vector Graphics (SVG) are becoming common place in modern web design, allowing you to embed images with small file sizes that are scalable to any visual size without loss of quality.

This plugin not only provides SVG Support like the name says, it also allows you to easily embed your full SVG file's code using a simple IMG tag.<br />
By adding the class `"style-svg"` to your IMG elements, this plugin dynamically replaces any IMG elements containing the `"style-svg"` class with your complete SVG.

The main purpose of this is to allow styling of SVG elements. Usually your styling options are restricted when using `embed`, `object` or `img` tags alone.

= Features =

* SVG Support for your media library
* Style SVG elements directly using CSS
* Super easy settings page with instructions
* Restrict SVG upload ability to Administrators only
* Set custom css target class
* **Extremely Simple To Use**

= Usage =

Firstly, install SVG Support (this plugin) and activate it.

Once activated, you can simply upload SVG images to your media library like any other file.

As an administrator, you can go to the admin settings page 'Settings' > 'SVG Support' and restrict SVG file uploads to administrators only and even define a custom CSS class to target if you wish.

If you only need simple functionality to upload SVG files, then you don't need to enable "Advanced Mode" which will make sure that the frontend script is not enqueued for performance and will hide the unnecessary settings.

For advanced users, enable the "Advanced Mode" under Settings > SVG Support. Then you can embed your SVG images just like you would a standard image with the addition of adding (in text view) the class `"style-svg"` (or the custom class you defined) to your IMG tags that you want this plugin to swap out with your actual SVG code. You can also remove any other attributes from the tag and use CSS to manage the size. There is also a setting to automatically add your class to the IMG tag for you when you're inserting it in to a post or page.<br />
For example:

`<img class="style-svg" alt="alt-text" src="image-source.svg" />`
or
`<img class="your-custom-class" alt="alt-text" src="image-source.svg" />`

The whole IMG tag element will now be dynamically replaced by the actual code of your SVG, making the inner content targetable.<br />
This allows you to target elements within your SVG using CSS.

*Featured Images:* If a post/page is saved with your SVG as a featured image, a checkbox will display in the featured image meta box to allow you to render it inline (only if advanced mode is active).

Please Note: You will need to set your own height and width in your CSS for SVG files to display correctly.

*If you are having any issues, please use the support tab and I will try my best to get back to you quickly*

= Security =

As with allowing uploads of any files, there is potential risks involved. Only allow users to upload SVG files if you trust them. You have the option to restrict SVG usage to Administrators only from the settings page. By default, anyone with Media Library access or upload_files capability will be able to upload SVG files (that is Administrators, Authors and Editors).

= Translations =

* US English - default, always included
* AU English - WordPress Language Packs
* NZ English - WordPress Language Packs
* Serbian - translated and submitted by Ogi Djuraskovic from [first site guide](http://firstsiteguide.com/)
* Spanish - translated and submitted by [Apasionados del Marketing](http://apasionados.es)

= Feedback =

* I am open to your suggestions and feedback - Thanks for using SVG Support!
* Drop me a line [@benbodhi](http://twitter.com/benbodhi) or [@GoWebben](http://twitter.com/gowebben) on Twitter
* Follow me on [my Facebook page](http://www.facebook.com/gowebben)
* Or circle [+GoWebben](https://plus.google.com/+Gowebben/) on Google Plus ;-)

*Note:* This is the second plugin I have submitted to the WordPress repository, I hope you like it. Please take a moment to rate it and click 'works' under compatibility with your version of WordPress.<br />
As always, feel free to send me any suggestions.

== Installation ==

To install this plugin:

= via wp-admin =
1. Upload the compressed version `svg-support.zip` through 'Plugins' > 'Add New' > 'Upload'
2. Click 'Activate Plugin'

or

1. Visit 'Plugins' > 'Add New'
2. Type "SVG Support" into the search field
3. Click 'Install Plugin' and confirm in the pop up
4. Hover over SVG Support and click 'Activate Plugin'


= via FTP =
1. Download plugin file and extract it
2. Upload folder `svg-support` to your `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= SVG not rendering inline since 2.3 update =

SVG Support 2.3 includes a new settings "Advanced Mode". Users that were inlining SVG files need to make sure this setting is checked. Go to your dashboard > Settings > SVG Support and check "Advanced Mode". All of your original settings should still be there.

= How do I disable the Javascript on the front end if I am not using inline SVG? =

If you go to `Settings > SVG Support` in your admin dashboard, you can choose to enable "Advanced Mode" or not. If you leave it disabled, the advanced functionality and extraneous script is removed.

= I'm trying to use SVG in the customizer but it's not working. =

To allow SVG to work in the customizer, you will need to modify/add some code in your child theme's function file. [Here is a great tutorial](https://thebrandid.com/using-svg-logos-wordpress-customizer/) on how to do that. The important part is
`
'flex-width'	=> true
'flex-height'	=> true
`

= How do I add animation to my SVG? =

You will need to edit your SVG file in a code editor so you can add CSS classes to each element you need to target within the SVG. Make sure that your IMG tag is being swapped out for your inline SVG and then you can use CSS or JS to apply animations to elements within your SVG file.

= Why is SVG Support not working in multisite? =

If you installed multisite prior to WordPress 3.5, then you will need to remove your ms-files. Here is a couple of resources to help you: [Dumping ms-files](http://halfelf.org/2012/dumping-ms-files/) [Removing ms-files after 3.5](https://www.yunomie.com/2298/removing-ms-files-php-after-upgrading-an-existing-multisite-installation-to-3-5/).

= Why is my SVG not working in Visual Composer? =

If you are using SVG Support with Visual Composer or any other page builders, you will need to make sure that you can add your own class to the image. The easiest way to do this is by using a simple text or code block in the builder to put your image code in to.

== Screenshots ==

1. Basic Settings
2. Advanced Settings
3. Featured Image checkbox to render SVG inline
4. Inline SVG in the front end markup

== Changelog ==

= 2.3.6 =

* New: Added polyfill to make svgs-inline.js work with older browsers.
* New: Section to leave reviews on settings page.
* Removed: Redundant one time upgrade activate code.
* Fix: Errors reported on activation and on the settings page - [Related Support Thread](https://wordpress.org/support/topic/error-on-plugin-settings-page/).

= 2.3.5 =

* Revision and modification of the thumbnail display code.

= 2.3.4 =

* Fix: Fatal error for some because a function wasn't prefixed.

= 2.3.3 =

* Fix: Missing arguments PHP warnings from new attribute control file.
* Update settings page text.

= 2.3.2 =

* Modified the attribute control code that auto inserts our class to only apply to SVG files.

= 2.3.1 =

* Fix: Fatal error in some cases due to admin notice.

= 2.3 =

* New Feature - Advanced Mode: allows you to turn off the advanced features and simply upload SVG files like normal images. This addition also enables users to turn off the script added on front end by leaving Advanced Mode unchecked.
* New Feature - Featured Image Support: If your featured image is SVG, once the post is saved you will see a checkbox to render the SVG inline (advanced mode only).
* Performance - Stop inlining JS from running if image source is not SVG.
* Added new stylesheet for settings page.
* Moved SCSS files to their own folder.
* Changed donate link so I can track it and properly thank you for your generous donations.
* Added a rating link to the settings and media pages.
* Cleaned up code formatting, added more comments.
* Added a plugin version check.
* Added notice so people are aware they may need to turn on the advanced mode.

= 2.2.5 =

* FIX: Display SVG thumbnails in attachment modals.

= 2.2.4 =

* FIX: Added function to temporarily fix an issue with uploading in WP 4.7.1

= 2.2.32 =

* Changed text domain to match plugin slug for localization.

= 2.2.31 =

* Attempt to fix ability to translate

= 2.2.3 =

* Modified code in svg-support/js/svg-inline.js and svg-support/js/min/svg-inline-min.js to allow JS control of the SVG elements and detect if they have been loaded (IMG tag swapped out). Thanks to [laurosello](https://wordpress.org/support/profile/laurosollero) for this suggestion and code contribution.
* Fixed SVG thumbnails not displaying correctly in list view of the media library.
* Cleaned up the code and comments a bit.
* Added translation for Spanish. Thanks to [Apasionados del Marketing](http://apasionados.es) for the translation.

= 2.2.2 =

* Changed another anonymous function in svg-support/functions/thumbnail-display.php that was causing errors for some.

= 2.2.1 =

* Changed anonymous function in svg-support/functions/thumbnail-display.php line 15 to prevent fatal error in older PHP versions.

= 2.2 =

* Added support to make SVG thumbnails visible in all media library screens.
* Added SVGZ to the mime types.
* Automatically removes the width and height attributes when inserting SVG files.
* Added ability to choose whether the target class is automatically inserted into img tags or not, stripping the default WordPress classes.
* Added ability to choose whether script is output in footer - true or false.
* Blocked direct access to PHP files.
* Added SCSS support using CodeKit - minified CSS + JS files.
* Updated spelling for incorrect function name.
* Changed comment formatting across all files for conistency.
* Added link to $25 Free credit at GoWebben on the settings page.
* Tested in WordPress 4.3.
* Updated Readme file.

= 2.1.7 =

* Tested in WordPress 4.0 and added plugin icons for the new interface.

= 2.1.6 =

* Added missing jQuery dependency in /functions/enqueue.php (pointed out by [walbach](http://wordpress.org/support/profile/waldbach)) - was loading SVG Support JS before jQuery.

= 2.1.5 =

* Added Serbian translation, submitted by Ogi Djuraskovic.

= 2.1.4 =

* Fixed plugin settings link (on plugins page)
* Added more links - Support & Donate
* Modified the settings page a little
* Cleaned up settings page with CSS
* Satisfied my OCD tendencies a little

= 2.1.3 =

* Added plugin_action_links file for custom menus on plugin page.

= 2.1.2 =

* Cleaned up trunk, tags and readme.txt to show correct changelog and update notice.

= 2.1.1 =

* Fixed JS file conditional - worked in local testing but not live.

= 2.1 =

* Updates to language files for localization.

= 2.0 =

* Added an admin settings page with instructions plus options for restricting to admin use only and setting a custom CSS target class.
* Whole plugin completely re-written and re-structured.
* Added option to restrict SVG uploads to administrators only.
* Added field for custom CSS target class.
* Added stylesheet to admin settings page.

= 1.0 =

* Initial Release.

== Upgrade Notice ==

= 2.3.6 =

* Adds support for older browsers, fixes a couple of seemingly isolated errors reported, removes some redundant code.

= 2.3.5 =

* Modifications to thumbnail display code to prevent output buffer clash with another plugin.

= 2.3.4 =

* Fixes fatal error for some because a function wasn't prefixed.

= 2.3.3 =

* This update fixes some PHP warnings introduced in 2.3.2 and also has updated settings page text.

= 2.3.2 =

* Changes to the way the auto class insert works.

= 2.3.1 =

* Fixes fatal error in some cases due to admin notice in V2.3.

= 2.3 =

IMPORTANT, MAJOR CHANGES, BACKUP BEFORE UPDATING: Users that are inlining SVG will need to make sure "Advanced Mode" is active under "Settings > SVG Support". Your settings should all still be there. Make sure you run a backup before updating just in case!!!

= 2.2.5 =

* Fix to display SVG thumbnails in attachment modals. (NOTE: You can not edit SVG files like other images in WordPress)

= 2.2.4 =

* IMPORTANT: Fixes upload ability in WP 4.7.1

= 2.2.32 =

* Changed text domain to match plugin slug for localization.

= 2.2.31 =

* This release attempts to fix translation issues.

= 2.2.3 =

* Feature - Changed code to allow JS detection if SVG has loaded and ability to control SVG using JS.
* Fix - Thumbnail display in media library list view.
* Added Spanish translation and cleaned up code/comments a bit.

= 2.2.2 =

* Fix - Another change from anonymous function that was triggering errors for some.

= 2.2.1 =

* Minor change to remove anonymous function that triggered a fatal error in older PHP versions.

= 2.2 =

* Significant changes, added functionality, please BACKUP BEFORE UPDATING just in case.

= 2.1.7 =

* Tested in WordPress 4.0 and added plugin icons for the new interface.

= 2.1.6 =

* Important update! Added missing jQuery dependency in /functions/enqueue.php - was loading SVG Support JS before jQuery.

= 2.1.5 =

* Added Serbian translation, submitted by Ogi Djuraskovic.

= 2.1.4 =

* Some more re-arranging, added a few helpful links, updated language files, tended to my OCD a bit.

= 2.1.3 =

* Added a link on the plugins page to the plugin settings page for easy access after install.

= 2.1.2 =

* A little bit of house cleaning, updates to changelog and readme.txt for correct output with current version.

= 2.1.1 =

* Update to conditional in JS file.

= 2.1 =

* Updated language files for localization that were missed in version 2.0.

= 2.0 =

* SVG Support has been completely re-written and re-structured. It now includes an admin settings page with instructions, plus options for restricting to admin use only and setting a custom CSS target class.

= 1.0 =

* Initial Release.

== Translations ==

* English - default, always included
* Serbian - translated and submitted by Ogi Djuraskovic from [first site guide]( http://firstsiteguide.com/)
* *Your translation? - [Just send it in](mailto:wp@benbodhi.com)*

*Note:* This plugin is localized/translateable by default. This is very important for all users worldwide. So please contribute your language to the plugin to make it even more useful. For translating I recommend ["Loco Translate" plugin](https://wordpress.org/plugins/loco-translate/) and for validating the ["Poedit Editor"](http://www.poedit.net/).

== Additional Info ==
**Idea Behind / Philosophy:** I needed an easy way to include SVG support in sites instead of having to copy and paste the code for each one. I found a [really cool snippet](http://stackoverflow.com/questions/11978995/how-to-change-color-of-svg-image-using-css-jquery-svg-image-replacement) of jQuery written by Drew Baker a while ago and have used it (modified for WordPress) a few times until I was inspired to build it all into a plugin for ease of use and to share with others. Now styling SVG elements is super easy :)

== Future Features ==
* Option to choose which user ID can access the settings
* Option to choose specific user ID's for usage restriction (both helpful if you have multiple administrators)

Again, feel free to [shoot me suggestions](mailto:wp@benbodhi.com)

== Credits ==
Plugin by [Benbodhi Mantra](http://benbodhi.com/) [@benbodhi](http://twitter.com/benbodhi) from [GoWebben](http://gowebben.com/) [@GoWebben](http://twitter.com/gowebben)

Thanks to [laurosello](https://wordpress.org/support/profile/laurosollero) for his code contribution in svg-inline.php.
Thanks to Ogi Djuraskovic from [first site guide]( http://firstsiteguide.com/) for providing the Serbian translation!
Thanks to [Apasionados del Marketing](http://apasionados.es) for the Spanish translation.
Logo By W3C, CC BY 2.5, [https://commons.wikimedia.org/w/index.php?curid=1895005](https://commons.wikimedia.org/w/index.php?curid=1895005).