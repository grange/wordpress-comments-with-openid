=== Plugin Name ===
Contributors: Korolev Igor
Tags: Comments, Third Party Login, openid, Yandex, Mail.ru, Google, LiveJournal, Gmail, Flickr, aol etc
Requires at least: 2.0
Tested up to: 2.9.1
Stable tag: 1.4

The 'Comments with OpenID' plugin allows to provide user details via OpenID service providers (Google, Yandex, LiveJournal etc.) while commenting.

== Description ==

The Comments with OpenId plugin allows the user to provide his/her details via all the famous 
OpenID service providers (Google, Yandex, LiveJournal etc.) while commenting. 
A working example of the plugin can be found on http://unixpin.com

== Installation ==
1. Download and activate the plugin OpenId ( http://wordpress.org/extend/plugins/openid/ ) 
2. Download the plugin file
3. Extract the archive contents to the wp-content/plugins folder i.e. wp-content/plugins/comments-with-openid
4. Login to WordPress Administration Center
5. Activate the plugin  ( Menu 'Plugins'->'Comments with OpenId'->Activate )
6. In menu 'Settings'->'Discussion Settings' enable checkboxes 'Enable OpenID for comments' and 'Do not require name and e-mail for comments left with a verified OpenID'
7. Add the following line in wp-content/themes/YOUR_THEME/comments.php  between 'name-email-url' and 'comment' fields: 
	<?php comments_with_openid(); ?>
	<br/>
	<label>Or enter your OpenId URL:</label><br/>
	<input type="text" name="openid_identifier" id="openid_identifier" class="textfield" tabindex="4" style="width:300px" />

For more details, please visit: http://www.unixpin.com/wordpress/2009/11/16/wordpress-plugin-comments-with-openid

== Frequently Asked Questions ==

= What are the plugin requirements? =

This plugin requires OpenID plugin to be installed.

= I have a question/I want to add X OpenID provider? =

Contact to me at http://www.unixpin.com/wordpress/2009/11/16/wordpress-plugin-comments-with-openid/

= How to setup not require name and e-mail for comments left with a verified OpenID	? =
Login to wordpress as admin
Parameter->Discussion->OpenID Settings
Select checkboxes "Enable OpenID for comments" and "Do not require name and e-mail for comments left with a verified OpenID"


== Screenshots ==

1. Sample of login form


== Changelog ==
= 1.4 =
* Correct mail.ru OpenId provider
= 1.3 =
* Add mail.ru OpenId provider
= 1.2 =
* Correct error with image path
= 1.1 =
* Add several OpenId provider ( wordpress, yahoo, Technorati, Vidoop, Verisign, AOL ) 
= 1.0 =
* First version

