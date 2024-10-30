=== Hint ===
Contributors: lowest
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2VYPRGME8QELC
Tags: remove password hint, remove username hint, remove login hint, invalid password, invalid username, hints
Requires at least: 2.0
Stable tag: 2.5
Tested up to: 4.7

Replaces the login hints with a default text.

== Description ==

By default, WordPress shows error messages when someone enters incorrect usernames or passwords on the login page. These error messages can be used as a hint to guess a username, user email address, or password.

This lightweight plugin is here to replace these login errors with something like it should have been from the start of WordPress: "Invalid login credentials".

While this plugin can replace login hints, it cannot save you from more sophisticated hacking attempts or bruteforce attacks.

== Installation ==

1. Upload the 'hint' folder to the /wp-content/plugins/ directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. All done! The login messages have been replaced.

== Changelog ==

= 1.0.2 =
* Fixed an security vulnerability regarding `target="_blank"` ([read more](https://core.trac.wordpress.org/ticket/36809))
* Added support for WordPress 4.7

= 1.0.1 =
* Merged the hint remover function
* Support for WordPress 4.6

= 1.0 =
* Initial release