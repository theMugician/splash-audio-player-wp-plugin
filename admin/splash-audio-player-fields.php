<?php

require plugin_dir_path(__FILE__) . '../includes/SplashFields.php';

/**
 * Render text field
 * @var  string $name
 * @var  string $title
 * @var  string $type
 * @var  string $placeholder
 * @var  string $desc
 * 
 */
$fields = new SplashFields();
$fields->text('splash_audio_player_volume_toggle', 'Volume Toggle', 'text');

/**
 * Render radio button group
 * @var  string $name
 * @var  string $title
 * @var  string $type - should always be 'radio'
 * @var  string $desc
 * @var  array  $options[['id', 'title', 'value']]
 * 
 */

$radio_options = array(
    array( 'mute_toggle_no', 'No', 'mute_toggle_no' ),
    array( 'mute_toggle_yes', 'Yes', 'mute_toggle_yes' )
);
$fields->radio('splash_audio_player_mute_toggle', 'Mute Toggle', 'radio', '', $radio_options);
