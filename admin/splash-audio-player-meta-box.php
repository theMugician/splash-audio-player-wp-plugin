<?php

require plugin_dir_path(__FILE__) . '../includes/SplashMetaBox.php';

/**
 * Register meta box for the Splash Audio Player Post Type
 *
 * @var string   $id
 * @var string   $title
 * @var string   $template
 * @var string   $context
 * @var string   $priority
 * @var string[] $screens.   
 * @var string[] $fields
 */    

$id = 'splash_audio_player_settings';
$title = 'Audio Player Settings';
$template = plugin_dir_path(__FILE__) . 'splash-audio-player-fields.php';
$context = 'advanced';
$priority = 'default';
$screens = array();
$fields = array('splash_audio_player_volume_toggle','splash_audio_player_mute_toggle');

$splash_audio_player_meta_box = new SplashMetaBox($id, $title, $template, $context, $priority, $screens, $fields);