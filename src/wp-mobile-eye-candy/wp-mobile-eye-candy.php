<?php
/*
Plugin Name: WordPress Mobile Eye Candy
Plugin URI: https://www.tricd.de/mobile-eye-candy/
Description: Checks the health of your WordPress install
Author: Tobias Redmann
Version: 0.1
Author URI: https://www.tricd.de
Text Domain: wpmec
*/

class WP_Mobile_Eye_Candy{


	const VERSION = '0.1';


	static function addThemeColor() {

		echo '<meta name="theme-color" content="#7a9f45">';

	}


}




add_action('wp_head', array('WP_Mobile_Eye_Candy', 'addThemeColor'));