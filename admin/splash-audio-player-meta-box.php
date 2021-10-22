<?php

require plugin_dir_path(__FILE__) . '../includes/class-splash-meta-box.php';

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
$fields1 = array(
    'splash_audio_player_autoplay',
    'splash_audio_player_mute_toggle',
    'splash_audio_player_text',
);

$fields = array(
    array(
        'meta_key' => 'splash_audio_player_autoplay',
        'type' => 'checkbox',
    ),
    array(
        'meta_key' => 'splash_audio_player_mute_toggle',
        'type' => 'radio',
    ),
    array(
        'meta_key' => 'splash_audio_player_text',
        'type' => 'text',
    )
);

$splash_audio_player_meta_box = new Splash_Meta_Box($id, $title, $template, $context, $priority, $screens, $fields);