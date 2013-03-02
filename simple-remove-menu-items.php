<?php
/*
Plugin Name: Simple Remove Menu Items
Plugin URI: http://plugins.findingsimple.com
Description: Drop in for removing some of the default menu items for non super admins. 
Version: 1.0
Author: Finding Simple
Author URI: http://findingsimple.com
License: GPL2
*/
/*
Copyright 2013  Finding Simple  (email : plugins@findingsimple.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if ( ! class_exists( 'Simple_Remove_Menu_Items' ) ) :

/**
 * Plugin Main Class.
 *
 * @package Simple Remove Menu Items
 * @author Jason Conroy <jason@findingsimple.com>
 * @since 1.0
 */
class Simple_Remove_Menu_Items {
	
	/**
	 * Initialise
	 */
	function Simple_Remove_Menu_Items() {

		add_action( 'admin_menu', array( &$this , 'simple_remove_items' ) , 99 );

	}

	/**
	 * Remove individual menu items
	 */
	function simple_remove_items() {
		
		/* Keep displaying them for Super Admins */
		if ( !is_super_admin( get_current_user_id() ) ) {
		
			remove_submenu_page( 'options-general.php', 'options-permalink.php' );
			remove_submenu_page( 'tools.php', 'tools.php' );
		
		}
	
	}		

}

$Simple_Remove_Menu_Items = new Simple_Remove_Menu_Items();

endif;