<?php
/******************************************************************************
Plugin Name: Redirect To Homepage
Plugin URI: http://burobjorn.nl
Description: Redirect a logged in user to the homepage after the user logs in.
Version: 1.0
Author: Bjorn Wijers <burobjorn at burobjorn dot nl>
Author URI: http://burobjorn.nl
License: GPLv2 or later
******************************************************************************/

/*  Copyright 2012
RedirectToHomepage is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

RedirectToHomepage is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/**
 * Uses the login_redirect filter which apparently exists since WordPress 2.7
 * according to http://adambrown.info/p/wp_hooks/hook/login_redirect
 * thus this should work from WordPress 2.7 and upwards.
 */
if( ! function_exists('redirectt2homepage') ) {
  function redirect2homepage()
  {
    return get_bloginfo('url');
  }
add_filter('login_redirect', 'redirect2homepage');
}
?>
