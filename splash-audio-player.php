<?php
/**
 * Plugin Name:       Splash Audio Player WordPress Plugin
 * Plugin URI:        https://sevenoceans.agency
 * Description:       Customize and add a simple audio player anywhere on your site
 * Version:           0.1
 * Author:            Greg Slonina
 * Author URI:        https://sevenoceans.agency
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       splash-audio-player
 */

if ( ! class_exists( 'SplashAudioPlayer' ) ) {
    class SplashAudioPlayer {

        /** 
         * @var string 
         * The plugin version number. 
         */
		var $version = '0.1';
        
        // Constructor
        public function __construct() {
            add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
            add_action( 'admin_enqueue_scripts', array($this, 'enqueue_admin_scripts'));
            require plugin_dir_path(__FILE__) . 'admin/splash-audio-player-post-type.php';
            require plugin_dir_path(__FILE__) . 'admin/splash-audio-player-meta-box.php';
        }

        public function enqueue_admin_scripts() {
            wp_enqueue_style( 'splash-fields-css', plugins_url( 'admin/css/splash-fields.css', __FILE__ ), null, '');
        }

        // Styles and Scripts
        public function enqueue_scripts() {
            wp_enqueue_style( 'splash-audio-player-css', plugins_url( 'public/assets/splash-audio-player.css', __FILE__ ), null, '');
            wp_enqueue_script( 'splash-audio-player-js', plugins_url( 'public/assets/splash-audio-player.js', __FILE__ ), array(), '', true );
        }

    }
}

// Instantiate
$SplashAudioPlayer = new SplashAudioPlayer();

?>