<?php
/*
 * Plugin Name: Hint
 * Plugin URI: https://wordpress.org/plugins/hint/
 * Description: Replaces the login hints with a default text.
 * Version: 1.0.2
 * Author: Mitch
 * Author URI: https://profiles.wordpress.org/lowest
 * Text Domain: hint
 * Domain Path:
 * Network:
 * License: GPL-2.0+
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */
 
if ( ! defined( 'ABSPATH' ) ) exit;

add_filter( 'login_errors', function() {
	return __('<strong>ERROR:</strong> Invalid login credentials.');
} );

add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), function($link) {
	return array_merge( $link, array('<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2VYPRGME8QELC" target="_blank" rel="noopener noreferrer">Donate</a>') );
} );