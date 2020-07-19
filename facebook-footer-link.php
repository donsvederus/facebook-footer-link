<?php
/**
 * Plugin Name:  Facebook Footer Link
 * Description:  Adds a Facebook profile link to the end of the post.
 * Version:  1.0
 * Author: Don Svederus
 * 
 * 
 */


 // Exit if Accessed Directly
 if (!defined('ABSPATH')){
     exit;
 }

// Load Scripts
require_once(plugin_dir_path(__FILE__).'/includes/facebook-footer-link-scripts.php');

// Load Content
require_once(plugin_dir_path(__FILE__).'/includes/facebook-footer-link-content.php');