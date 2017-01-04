<?php
/*
Plugin Name: Hide Admin Login
Plugin URI: https://github.com/lukasznowicki/wp-hide-admin-login
Description: This small plugin will hide user logins for your WordPress site. Sometimes attacker may see admin login by using example.com?author=1, this plugin can prevent such things.
Author: Lukasz Nowicki
Author URI: http://lukasznowicki.info/
Version: 0.1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/
namespace Phylax\WPPlugin\HideAdminLogin;

class Plugin {

	function __construct() {
		add_action( 'template_redirect', [ $this, 'template_redirect' ] );
	}

	function template_redirect() {
		if ( is_author() ) {
			wp_redirect( home_url() );
			die;
		}
	}

}

$phylax_hideadminlogin = new Plugin();