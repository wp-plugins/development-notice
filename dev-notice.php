<?php
/*
 *   Plugin Name: Development Notice
 *   Description: Adds a simple bar at the bottom of the site indicating that you're working on a development version, so you don't accidentally break the live site.
 *   Version: 0.2
 *   Author: Sam Bowler
 *   Author URI: http://sambowler.com

 *   Copyright 2009 Sam Bowler  (email : s.bowlerr@googlemail.com)
 * 
 *     This program is free software; you can redistribute it and/or modify
 *     it under the terms of the GNU General Public License as published by
 *     the Free Software Foundation; either version 2 of the License, or
 *     (at your option) any later version.
 * 
 *     This program is distributed in the hope that it will be useful,
 *     but WITHOUT ANY WARRANTY; without even the implied warranty of
 *     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *     GNU General Public License for more details.
 * 
 *     You should have received a copy of the GNU General Public License
 *     along with this program; if not, write to the Free Software
 *     Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

add_action('wp_footer', 'dev_notice');

function dev_notice() {
	print '<div id="dev-notice">';
	print '<p>This is the DEVELOPMENT version of ' . get_bloginfo('name') . ', go break it!</p>';
	print '</div><!-- end #dev-notice -->';
}

add_action('wp_head', 'dev_notice_head');

function dev_notice_head() {
	print '<link rel="stylesheet" type="text/css" media="screen" href="' . get_bloginfo('wpurl') . '/wp-content/plugins/development-notice/dev_notice.css" />';
	print '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>';
	print '<script type="text/javascript" src="' . get_bloginfo('wpurl') . '/wp-content/plugins/development-notice/pulse.jquery.js"></script>';
	print '<script type="text/javascript" src="' . get_bloginfo('wpurl') . '/wp-content/plugins/development-notice/dev_notice.js"></script>';
}

?>