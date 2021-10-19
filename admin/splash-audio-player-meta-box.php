<?php

require plugin_dir_path(__FILE__) . '../includes/SplashMetABox.php';

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
$template = null;
$context = 'advanced';
$priority = 'default';
$screens = array('slash_audio_player');
$fields = array();

$splash_audio_player_meta_box = new SplashMetaBox($id, $title, $template, $context = 'advanced', $priority = 'default', $screens = array(), $fields = array());