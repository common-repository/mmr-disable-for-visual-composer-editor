<?php
/**
 * Plugin Name: MMR Disable for Visual Composer Editor
 * Plugin URI: https://wordpress.org/plugins/merge-minify-refresh
 * Description: Disable MMR when Visual Composer Editor is active
 * Version: 1.0.0
 * Author: Launch Interactive
 * Author URI: http://launchinteractive.com.au
 * License: GPL2

Copyright 2019  Marc Castles  (email : marc@launchinteractive.com.au)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function should_mmr_visual_composer($should_mmr)
{
    if($should_mmr && is_user_logged_in())
    {
	    if(class_exists('Vc_Manager') && isset($_GET['vc_editable']))
	    { 
			return false;
		}
    }
    return $should_mmr;
}
add_filter('should_mmr', 'should_mmr_visual_composer');